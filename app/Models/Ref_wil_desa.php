<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ref_wil_desa extends Model
{
    protected $table = 'ref_wil_desa';
    protected $primaryKey = 'id_desa';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_desa',
        'id_kecamatan',
        'nama_desa',
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Ref_wil_kecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }
}
