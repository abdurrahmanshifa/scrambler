<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Noun;
use App\Score;
use Illuminate\Support\Facades\Auth;
use Alert;
use DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            return redirect()->route('admin.dashboard');
        }

        if(request()->ajax()){
            $user = Auth::user();

            $score = DB::table('scores')->select('users.name','scores.*')->join('users', 'users.id', '=', 'scores.user_id')
            ->where('users.id',$user->id)
            ->orderByDesc('scores.created_at')
            ->get();
            return Datatables::of($score)
            ->addIndexColumn()
            ->editColumn('name', function($score) {
                return $score->name;
            })
            ->editColumn('score', function($score) {
                return '<span class="label label-primary">' . $score->score . ' / 10</span>';
            })
            ->editColumn('level', function($score) {
                return $score->level;
            })
            ->editColumn('date', function($score) {
                return indonesian_date($score->created_at);
            })
            ->escapeColumns([])
            ->make(true);
        }
        return view('home');
    }

    public function play($id=5)
    {
        $data = Noun::inRandomOrder()->where('count','=',$id)->limit(10)->get();
        $this->data = array(
            'id'    => $id,
            'data'  => $data,
        );
        return view('public/play',['data' => $this->data]);  
    }

    public function save(Request $request)
    {
        $data['error_string'] = array();
        $data['input_error'] = array();
        $nilai = 0;
        $no = 0;
        foreach( $request->input('id') as $key => $value){
            $cek = Noun::where('id', $value)->where('text',$request->input('noun')[$key])->count();
            if($cek != 0)
            {
                $nilai++;
            }else{
                $data['input_error'][] = 'data'.$no;
        		$data['error_string'][] = 'Maaf soal ini salah';
            }
            $no++;
        }

        $user = Auth::user();
        $score = new Score();
        $score->score = $nilai;
        $score->user_id = $user->id;
        $score->created_at = now();
        $score->updated_at = null;
        $score->level = $request->input('level');
        $score->save();

        if($nilai <= 6)
        {
            $data['icon']       = 'error';
            $data['message']    = 'Anda hanya mendapatkan point '.$nilai.' dari 10';
            $data['title']      = 'Perhatian'; 
            echo json_encode($data);
        }else{
            $data['icon']       = 'success';
            $data['message']    = 'Anda mendapatkan point '.$nilai.' dari 10';
            $data['title']      = 'Selamat'; 
            echo json_encode($data);
        }
        
    }

    public function table()
    {
        
    }
}
