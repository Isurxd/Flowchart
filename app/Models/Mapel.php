<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_mapel'];
    public $timestamp = true;

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
