<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Auth;
use App\User;
use App\Noun;
use App\Score;
use Alert;
use DataTables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $this->authorize('isAdmin');
        if(request()->ajax()){
            
            $score = DB::table('scores')->select('users.name','scores.*')->join('users', 'users.id', '=', 'scores.user_id')
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
        return view('admin/dashboard');
    }

    public function nouns()
    {
        $this->authorize('isAdmin');
        if(request()->ajax()){
            $nouns = DB::table('nouns')->orderBy('count','ASC')
            ->get();
            return Datatables::of($nouns)
            ->addIndexColumn()
            ->editColumn('text', function($nouns) {
                return $nouns->text;
            })
            ->editColumn('count', function($nouns) {
                return $nouns->count;
            })
            ->editColumn('date', function($nouns) {
                return indonesian_date($nouns->created_at);
            })
            ->escapeColumns([])
            ->make(true);
        }
        return view('admin/nouns');
    }

    public function get_nouns(){
        $this->authorize('isAdmin');
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->request('GET','https://www.wordgenerator.net/application/p.php?id=nouns&type=1');
        $nouns =  $result->getBody();
        // $nouns = 'Effect,Act,Growth,Reward,Damage,Mass,Self,Secretary,Development,Example,Balance,Name,Rain,Blood,Ray,Committee,Mountain,Offer,Base,Flower,Crack,Increase,Weight,Summer,River,Tin,Love,Relation,Nation,Shake,Invention,Room,Hope,Driving,Servant,Death,Size,Meeting,Oil,Letter,Scale,Substance,Produce,Use,Move,Month,Respect,Birth,Price,Play,';
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
        return back()->with('Berhasil','Nouns Berhasil Ditambah');
        return redirect()->route('admin.nouns'); 

    }
        
}
