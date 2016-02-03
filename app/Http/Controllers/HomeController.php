<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  showUserMap(){

        return view('map');
    }

    public function  showUserMap2(){

        return view('map2');
    }

    public function  showUserMap3(){

        return view('map3');
    }

    public function  showUserMap4(){

        return view('map4');
    }

    public function  showUserMapComponent(){

        return view('map-component');
    }

    public function showVue(){
        return view('vue-test');
    }

    public function showJsonPage(){
        return view('json');
    }

    public function handleGeodata(){

        return response()->json(['latitude' => -37.764152, 'longitude' => 145.008062]);
    }


}
