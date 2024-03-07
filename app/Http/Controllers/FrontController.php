<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        $services=Services::all();
        $company=Company::first();
        return view('LandingPage',compact('sliders','services','company'));
    }
}
