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

    /**
     * 1 to 1:
     * - hasOne(NamaModelnya)   : table saat ini meminjamkan id
     * - belongsTo(NamaModelnya): table saat ini meminjam id dari table lain
     * 
     * 1 to M:
     * - hasMany(NamaModelnya)      : table saat ini meminjamkan id
     * - belongsToMany(NamaModelnya): table saat ini meminjam id dari table lain
     */ 

    // Mendefinisikan relasi ke model student 1:M
    public function students(){
        return $this->hasMany(Student::class);
    }
}
