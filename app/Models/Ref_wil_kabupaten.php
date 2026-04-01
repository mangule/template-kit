<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ref_wil_kabupaten extends Model
{
    protected $table = 'ref_wil_kabupaten';
    protected $primaryKey = 'id_kabupaten';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_kabupaten',
        'id_provinsi',
        'nama_kabupaten',
    ];

    public function provinsi()
    {
        return $this->belongsTo(Ref_wil_provinsi::class, 'id_provinsi', 'id_provinsi');
    }

    public function kecamatan()
    {
        return $this->hasMany(Ref_wil_kecamatan::class, 'id_kabupaten', 'id_kabupaten');
    }
}
