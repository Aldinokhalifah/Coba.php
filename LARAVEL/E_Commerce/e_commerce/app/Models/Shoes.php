<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoes extends Model
{
    use HasFactory;

    protected $table = 'shoes';

    protected $fillable = [
        'nama',
        'tanggal',
        'keterangan',
        'harga',
        'foto',

    ];
}
