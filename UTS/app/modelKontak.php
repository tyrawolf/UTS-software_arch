<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelKontak extends Model
{
    protected $fillable = ['nama','telepon','email','alamat'];
}
