<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pengiriman', 'tanggal', 'lokasi_id', 'barang_id', 'jumlah_barang', 'harga_barang', 'kurir_id'
    ];
}
