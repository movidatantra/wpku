<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $table = 'hasil';

    public $timestamps = false;

    protected $fillable = [
        'alt_id',
        's_value',
        'preferensi'
        
    ];

    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alt_id');
    }
}
