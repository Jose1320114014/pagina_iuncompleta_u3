<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIcontroller extends Controller
{
    public function index()
    {

        $cliente =new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'http://www.boredapi.com/api/activity/');
        $datos = json_decode($response->getBody()->getContents(),true);

            /* 
            $resultado=[];

                
                $resultado []=[
                    'activity' => $datos['activity'],
                    'accesibility' => $datos['accessibility'],
                    'type' => $datos['type'],
                    'participants' => $datos['participants'],
                    'price' => $datos['price'],
                    'link' => $datos['link'],
                    'key' => $datos['key'],
                    
                ]; */
                return view('hack',['datos'=>$datos]);
    }
            
    }

