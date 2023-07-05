<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloControllerRequest;
use Illuminate\Http\Request;

class Pv121Controller extends Controller
{
    function form(Request $request){
        $request->validate([
            'userName'=>'min:5'
        ]);
        $data=[
            "userName"=>$request->input('userName'),
        ];
        return view("pv121.hello", $data);
    }
//    function helloController(HelloControllerRequest $request) {
//        $myVar=$request ->input("myVar");
//        return "<H1> Hello Controller: " .$myVar ."</H1>";
//    }

        function helloController(Request $request){
            $data=[
                "userName"=>"Yuliia Orel",
                "hack" => "<script>alert('Hi')</script>",
                "iterator"=>10,
                "users" =>[
                    ['name'=> 'Vasya'],
                    ['name' => 'Masha']
                ]
            ];
            return view("pv121.hello", $data);
            //return "<h1>Hello controller</h1>";
        }
        function helloController_Validator(Request $request){
            $validated=$request->validate([]);
            $validatedData=$request->validateWithBag('post', [
                'myVar'=>['required', 'max:255'],
            ]);
            dd($validatedData);
        }
}
