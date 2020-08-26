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

            $score = DB::table('scores')->join('users', 'users.id', '=', 'scores.user_id')
            ->where('users.id',$user->id)
            ->get();
            return Datatables::of($score)
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
        // $client = new Client(); //GuzzleHttp\Client
        // $result = $client->request('GET','https://www.wordgenerator.net/application/p.php?id=nouns&type=1');
        // $nouns =  $result->getBody();
        $nouns = 'Effect,Act,Growth,Reward,Damage,Mass,Self,Secretary,Development,Example,Balance,Name,Rain,Blood,Ray,Committee,Mountain,Offer,Base,Flower,Crack,Increase,Weight,Summer,River,Tin,Love,Relation,Nation,Shake,Invention,Room,Hope,Driving,Servant,Death,Size,Meeting,Oil,Letter,Scale,Substance,Produce,Use,Move,Month,Respect,Birth,Price,Play,';
        $noun = array_filter(explode(',',$nouns),'strlen');
        foreach($noun as $value){
            $kalimat = new Noun();

            $cek = Noun::where('text', $value)->count();
            if($cek == 0)
            {
                $kalimat->text = strtolower($value);
                $kalimat->count = strlen($value);
                $kalimat->created_at = now();
                $kalimat->updated_at = null;
                $kalimat->save();
            }
        }
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
            $data['title']      = 'Maaf'; 
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
