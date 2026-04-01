<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ref_wil_kecamatan extends Model
{
    protected $table = 'ref_wil_kecamatan';
    protected $primaryKey = 'id_kecamatan';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_kecamatan',
        'id_kabupaten',
        'nama_kecamatan',
    ];

    public function kabupaten()
    {
        return $this->belongsTo(Ref_wil_kabupaten::class, 'id_kabupaten', 'id_kabupaten');
    }

    public function desa()
    {
        return $this->hasMany(Ref_wil_desa::class, 'id_kecamatan', 'id_kecamatan');
    }
}
