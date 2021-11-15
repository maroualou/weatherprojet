<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Logger\ConsoleLogger;

use function PHPUnit\Framework\returnSelf;

class HomeController extends Controller
{

    public function home(){
        $status="";
            return view('welcome')->with('status', $status);
    } 

    
    public function homePost(Request $r){

        $status="";
        $msg="";
        $city= $r->input('search');
        $url="http://api.openweathermap.org/data/2.5/weather?q=$city&appid=49c0bad2c7458f1c76bec9654081a661";
        $ch=curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $result=curl_exec($ch);
        curl_close($ch);
        $result=json_decode($result,true);
        if($result['cod']==200){
            $status="yes";
        }else{
            $msg=$result['message'];
        }
        return view("welcome")->with('results', $result)->with('status', $status);
      // return view('welcome');
        } 

}

