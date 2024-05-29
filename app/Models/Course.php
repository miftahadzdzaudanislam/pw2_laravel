<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    // mendifinisikan field yang boleh diisi
    protected $fillable = ['name', 'category', 'desc'];
}
