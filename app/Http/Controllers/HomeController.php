<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Task;
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
       /* $task = Task::all();
        return \View::make('nangareko')->with('saludo',$saludo);*/
        $tasks = DB::table('tasks')->get();
        return \View::make('home')->with('tasks',$tasks);
       // return view('home');
    }
}
