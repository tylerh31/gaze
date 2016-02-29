<?php

namespace App\Http\Controllers;

use DB;
use App\Thread;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $threads = Thread::orderBy('created_at', 'desc')->paginate(10);
        return view('forum.home', compact('threads'));
    }

    public function newThread(Request $request)
    {
        if($request->get('title') == '' || $request->get('body') == '')
        {
            DB::table('threads')->where('id', $request->get('id'))->delete();
            $threads = Thread::orderBy('created_at', 'desc')->paginate(10);
            return view('forum.home', compact('threads'));
        }
        else
        {
        DB::table('threads')->insert(
            ['title' => $request->get('title'), 'body' => $request->get('body'), 'category' => $request->get('category'), 'user' => Auth::user()->name, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        );
        return view('forum.successful');
        }
    }

    public function singleThread($id)
    {
        $post = DB::table('threads')->where('id', $id)->get();
        $reply = DB::table('replies')->where('replyToId', $id)->get();
        #dd($reply);
        #dd($post);
        return view('forum.singleThread', compact('post', 'reply'));
    }
}
