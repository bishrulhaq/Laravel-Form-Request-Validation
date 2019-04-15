<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'formData';
    protected $fillable = ['name', 'detail', 'price'];
}
