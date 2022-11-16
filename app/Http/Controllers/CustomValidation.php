<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\CustomValidationRule;

class CustomValidation extends Controller
{
    public function index()
    {
        return view('custom_validation.index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'dob' => ['required', new CustomValidationRule, 'before:today'],
        ]);


        $name = $request->name;
        $dob = $request->dob;

        $age = date_diff(date_create($dob), date_create('today'))->y;

        if($age >= 18 && $age < 60) {
            $msg = "$name are $age years old and You are eligible for driving license.";
            session()->flash('success', $msg);
            return redirect(route('custom_validation'));
        }
        elseif($age >= 60) {
            $msg = "$name are $age years old and You are too old to get a driving license.";
            session()->flash('error', $msg);
            return redirect(route('custom_validation'));
        }
        
            $msg = "$name are $age years old and You are too young to get a driving license.";
            session()->flash('error', $msg);
            return redirect(route('custom_validation'));
        


    }
}
