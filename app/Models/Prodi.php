<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable =['nama'];

    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }

    public function dosen(){
        return $this->hasMany(Dosen::class);
    }
}
