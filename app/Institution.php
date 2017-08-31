<?php

namespace App;

//Im using the model 'Model' to extend the 'protect $guarded = [];' functionality
// to every single class on the future
// and this line is not necessary any more 'use Illuminate\Database\Eloquent\Model;'

class Institution extends Model
{
	public function patients(){

		return $this->hasMany(Patient::class);
	}
    // to specify the fields that i wanna allow  to make mass assignment 
    // protected $fillable = ['name','address','phone'];
    

    // fields that i don´t wanna allow, is better not allow the id, is insecure and is autegenerated on DB 
    //protected $guarded = ['institution_id'];
    

    // if i leave this empty i will just accept the field that i specify from the request on the controller method.
	//protected $guarded = [];
    
    //this line 'protected $guarded = [];' is not necessary is used for all the class 
}
