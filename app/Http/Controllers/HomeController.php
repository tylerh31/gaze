<?php

namespace App\Http\Controllers;

use App;
use PDF;
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
        #dd($threads);
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

    public function newReply(Request $request, $id)
    {
        
        if($request->get('body') == '')
        {
            $post = DB::table('threads')->where('id', $id)->get();
            $reply = DB::table('replies')->where('replyToId', $id)->get();
            return view('forum.singleThread', compact('post', 'reply'));
        }
        else
        {
        DB::table('replies')->insert(
            ['body' => $request->get('body'), 'replyToId' => $id, 'user' => Auth::user()->name, 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s')]
        );
        $post = DB::table('threads')->where('id', $id)->get();
        $reply = DB::table('replies')->where('replyToId', $id)->get();
        return view('forum.singleThread', compact('post', 'reply'));
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

    public function weather(Request $request)
    {
        $details = json_decode(file_get_contents("http://ipinfo.io/"));
        $details = $details->postal; // zip

        date_default_timezone_set('EST');
        //http://api.aerisapi.com/sunmoon/07731?client_id=w0wLMj5tgENboyCpOQLUx&client_secret=9yA1LNrGNVr5JfuZlSxgIMxaSqRT9TWkmQLM7z5W
        if($request->get('body') == '')
        {
            $aerisurl = "http://api.wunderground.com/api/565010eb55032207/forecast/q/{$details}.json";
            $wunderground = "http://api.wunderground.com/api/565010eb55032207/astronomy/q/{$details}.json";
            $wunderweather = "http://api.wunderground.com/api/565010eb55032207/conditions/q/{$details}.json";
        }
        else
        {
            $zip = $request->get('body');
            $aerisurl = "http://api.wunderground.com/api/565010eb55032207/forecast/q/{$zip}.json";
            $wunderground = "http://api.wunderground.com/api/565010eb55032207/astronomy/q/{$zip}.json";
            $wunderweather = "http://api.wunderground.com/api/565010eb55032207/conditions/q/{$zip}.json";
        }


        $aerisjson = file_get_contents($aerisurl, 'r');
        $wunderjson = file_get_contents($wunderground, 'r');
        $wunderweatherjson = file_get_contents($wunderweather, 'r');

        $aerisresponse = json_decode($aerisjson);
        $wunderresponse = json_decode($wunderjson);
        $wunderweatherresponse = json_decode($wunderweatherjson);

        $location = $wunderweatherresponse->current_observation->display_location->full;
        $night_text = $aerisresponse->forecast->txt_forecast->forecastday[1]->title;
        $night_forecast = $aerisresponse->forecast->txt_forecast->forecastday[1]->fcttext;
        $moon_phase = $wunderresponse->moon_phase->phaseofMoon;
        $moon_illum = $wunderresponse->moon_phase->percentIlluminated;
        $moon_rise_hour = $wunderresponse->moon_phase->moonrise->hour;
        $moon_rise_minute = $wunderresponse->moon_phase->moonrise->minute;
        $sun_set_hour = $wunderresponse->moon_phase->sunset->hour;
        $sun_set_minute = $wunderresponse->moon_phase->sunset->minute;

        if($moon_rise_hour > 12)
        {
            $moon_rise_hour = $moon_rise_hour - 12;  
            $moon_rise = $moon_rise_hour . ":" . $moon_rise_minute . " P.M.";         
        }
        else
        {
            $moon_rise = $moon_rise_hour . ":" . $moon_rise_minute . " A.M.";
        }

        if($sun_set_hour > 12)
        {
            $sun_set_hour = $sun_set_hour - 12;  
            $sun_set = $sun_set_hour . ":" . $sun_set_minute . " P.M.";         
        }
        else
        {
            $sun_set = $sun_set_hour . ":" . $sun_set_minute . " A.M.";
        }

        $pdf = PDF::loadView('weather.test', compact('moon_phase', 'moon_illum', 'moon_rise', 'sun_set', 'night_text', 'night_forecast', 'location'));
        //return $pdf->download('invoice.pdf');
        //dd($moon_rise, $sun_set);

        return view('weather.show', compact('details', 'moon_phase', 'moon_illum', 'moon_rise', 'sun_set', 'night_text', 'night_forecast', 'location'));
        //dd($moon_name, $moon_illum, date('r', $moon_rise), date('r', $sun_rise), date('r', $sun_set), date('r', time()));
    }

    public function stars()
    {
        return view('stars');
    }

    public function news()
    {

        return view('news.show');
    }

    //http://api.wunderground.com/api/565010eb55032207/conditions/q/CA/San_Francisco.json
}
