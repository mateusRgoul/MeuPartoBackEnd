<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nome extends Model
{
    #use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'email', 'senha'];
}
