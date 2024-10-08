<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;

    protected $table = 'sepatus';

    protected $fillable = [
        'nama',
        'tanggal',
        'keterangan',
        'harga',
        'foto',

    ];

    public $timestamps = false;
}
