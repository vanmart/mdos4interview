<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Institution;

class InstitutionController extends Controller
{
    public function index(){
    	$institutions = Institution::all();

    	return view('institutions.index',compact('institutions'));
    }

    public function create(){

    	return view('institutions.create');
    }

    public function store(){
    	//to get request and see his content and is Ok
    	//dd(request()->all());

    	// model validation server side 
    	$this->validate(request(),[
    			'name' => 'required',
    			'address' => 'required',
    			'phone' => 'required' 
    		]);

    	//only pass the fields than i trust
    	Institution::create(request(['name', 'address', 'phone']));

    	return redirect('/');
    }

    public function show($id){
    	$institution = Institution::find($id);

    	return view('institutions.show',compact('institution'));

    }
}
