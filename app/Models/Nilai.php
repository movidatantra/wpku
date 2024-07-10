<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    public $timestamps = false;

    protected $fillable = [
        'alt_id',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5'
    ];
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alt_id');
    }
}
