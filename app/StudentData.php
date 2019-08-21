<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentData extends Model
{
    protected $fillable = ['name', 'email', 'year'];

    protected $dates = ['created_at', 'updated_at'];
}
