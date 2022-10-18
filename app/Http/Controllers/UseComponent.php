<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseComponent extends Controller
{
    // for form get request
    public function index(){
        return view('use_component.form');
    }

    // for form post request
    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        $data = $request->all();
        echo "<pre>"; print_r($data); echo "</pre>";
        
    }
}
