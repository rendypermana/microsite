<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    protected $fillable = [
        'id_pemesan',
        'ps_nama',
        'ps_no_hp',
        'ps_email',
        'tt_nama',
        'tt_no_hp',
        'tt_email',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'kota',
        'kewarganegaraan',
        'no_id',
        'created_at',
        'updated_at'
    ];

    protected $table = 'pemesan';
    public $timestamps = true;
    protected $primaryKey = 'id_pemesan';

    public function transaksi() {
    	return $this->belongsTo('App\Transaksi', 'id_pemesan');
    }
}
