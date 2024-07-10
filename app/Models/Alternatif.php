<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatif';

    public $timestamps = false;

    protected $fillable = [
        'nama_kota'
    ];

public function nilai(){
        return $this->hasMany(Hasil::class, 'alt_id');
    }
}
