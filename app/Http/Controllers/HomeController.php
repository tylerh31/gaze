<?php

namespace App\Http\Controllers;

use DB;
use App\Thread;
use App\Http\Requests;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application forum.
     *
     * @return \Illuminate\Http\Response
     */
    public function forum()
    {
        $threads = Thread::paginate(1);

        return view('forum.home', compact('threads'));
    }
}
