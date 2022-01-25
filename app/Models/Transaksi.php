<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable=[
        'id_harga',
        'qty',
        'status'
        ];
    public function transaksi()
    {
        
        return $this->belongsTo(harga::class,'id_harga');
    }
}
