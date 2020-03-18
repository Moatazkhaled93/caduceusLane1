<?php

namespace App\Http\Controllers;

use App\Pain;
use App\PatientDetiels;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class PatientDetielsController extends Controller
{
    public function create(Request $request)
    { $pains = Pain::all();
        return view('home',compact('pains'));
    }

    public function store( Request $request)
    {   $patint =new PatientDetiels();
        $patint->frist_name = $request->input('frist_name');
        $patint->last_name = $request->input('last_name');
        $patint->email = $request->input('email');
        $patint->date_of_birth = $request->input('date_of_birth');
        $patint->phone = $request->input('phone');
        $patint->occupation = $request->input('occupation');
        $patint->country = $request->input('country');
        $patint->gender = $request->input('gender');
        $patint->pain_id = $request->input('pain_id');
        $patint->save();


    }
}
