<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class weather extends Controller
{
	public function weather(){
		$request = 'http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=05e6241b5e092bb3c2f9a1d68c089401';
    	$response  = file_get_contents($request);
    	$data = json_decode($response);

     // print_r($data);
      // print_r($response);
    	// return view('yussur',$arr);
      // return view('yussur',$data);
    

    
     return view('weather',array('data'=>$data -> main -> temp));
 }
}
