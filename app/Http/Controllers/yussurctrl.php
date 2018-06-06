<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yussurctrl extends Controller
{
    //
    public function yussur(){
    	// $arr=Array('id'=>44,'name'=>'yussur alani');
    	$request = 'http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=05e6241b5e092bb3c2f9a1d68c089401';
    	$response  = file_get_contents($request);
    	$data = json_decode($response);
       
     // print_r($data);
      
    	// return view('yussur',$arr);
      return view('yussur',$data);
    }
}
