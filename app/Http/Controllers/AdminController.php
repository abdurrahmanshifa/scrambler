<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use App\Score;
use DataTables;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Gate::allows('isPublic')) {
            return redirect()->route('home');
        }

        if(request()->ajax()){
            $score = DB::table('scores')->join('users', 'users.id', '=', 'scores.user_id')->get();
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
        return view('admin/dashboard');
    }
        
}
