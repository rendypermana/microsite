<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = [
        'id_pemesanan',
        'type_pemesanan',
        'tujuan',
        'benefit',
        'periode_perjalanan',
        'tgl_berangkat',
        'tgl_kembali',
        'durasi',
        'grand_total',
        'created_at',
        'updated_at'
    ];

    protected $table = 'pemesanan';
    public $timestamps = true;
    protected $primaryKey = 'id_pemesanan';

    public function transaksi() {
    	return $this->belongsTo('App\Transaksi', 'id_pemesanan');
    }
}
