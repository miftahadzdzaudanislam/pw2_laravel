<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; //boleh gk pake

    // mendefinisika field yang boleh diisi
    protected $fillable = ['name', 'nim', 'major', 'class', 'couse_id'];

    /**
     * 1 to 1:
     * - hasOne(NamaModelnya)   : table saat ini meminjamkan id
     * - belongsTo(NamaModelnya): table saat ini meminjam id dari table lain
     * 
     * 1 to M:
     * - hasMany(NamaModelnya)      : table saat ini meminjamkan id
     * - belongsToMany(NamaModelnya): table saat ini meminjam id dari table lain
     */ 

    // Mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Course::class, 'couse_id'); // nama kolom id harus sama dengan nama model
    }
}
