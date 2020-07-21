<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function show( Request $request)
    {
       
        $url = $request->url;
        $value = explode("v=", $url);

        $videoID = $value[1];  

        echo $videoID;

        return view('welcome', ['videoID' => $videoID]);
    }

    
}

