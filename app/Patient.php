<?php

namespace App;

class Patient extends Model
{
    public function institution(){
    	return $this->belongsTo(Institution::class);
    }
}
