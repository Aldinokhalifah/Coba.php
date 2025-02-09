<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemasukkan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tanggal', 'jumlah', 'kategori', 'keterangan'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
