<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showItems(){

    return view('/catalog');
    }

    public function itemDetails(){
    	
    return view('/items');
    }

    public function showDashboard(){

    return view('/mydashboard');
    }
}
