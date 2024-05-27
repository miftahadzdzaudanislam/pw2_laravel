<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; //boleh gk pake

    // mendefinisika field yang boleh diisi
    protected $fillable = ['name', 'nim', 'major', 'class'];
}
