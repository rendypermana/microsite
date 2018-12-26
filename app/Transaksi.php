<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'id_transaksi',
        'id_pemesanan',
        'id_pemesan',
        'created_at',
        'updated_at'
    ];

    protected $table = 'transaksi';
    public $timestamps = false;
    protected $primaryKey = 'id_transaksi';

    public function pemesanan() {
        return $this->hasMany('App\Pemesanan', 'id_pemesanan');
    }
    public function pemesan() {
        return $this->hasMany('App\Pemesan', 'id_pemesan');
    }
}
