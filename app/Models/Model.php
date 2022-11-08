<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{

    protected $guarded = []; // This disables mass assignment in all models that extends this model.
}