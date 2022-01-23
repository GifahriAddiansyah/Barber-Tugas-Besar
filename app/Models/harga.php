<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class harga extends Model
{
    use HasFactory;
    protected $fillable=[
        'kode',
        'nama_menu',
        'harga'
        ];
    protected $table='hargas';
}
