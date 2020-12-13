<?php

namespace App\Http\Controllers;

use App\Models\Heeder;
use App\Models\InFoAboutCompany;
use App\Models\OurServices;
use App\Models\Prant;
use App\Models\Settings;
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
        $this->middleware('auth')->except('front');
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

    public function front()
    {
        $headSection = Heeder::first();
        $infoSection = InFoAboutCompany::first();
        $services = OurServices::limit(12)->get();
        $prants = Prant::limit(30)->get();
        $settings = Settings::first();
        return view('front.index',compact('headSection','infoSection','services','prants','settings'));
    }
}
