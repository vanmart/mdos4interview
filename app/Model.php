<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    /* to not do that on all classes and just make an extends */
    protected $guarded = [];
}
