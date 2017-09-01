<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	
    public function institution(){
    	return $this->belongsTo(Institution::class);
    }
}
