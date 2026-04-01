<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ref_wil_provinsi extends Model
{
    protected $table = 'ref_wil_provinsi';
    protected $primaryKey = 'id_provinsi';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'id_provinsi',
        'nama_provinsi',
    ];

    public function kabupaten()
    {
        return $this->hasMany(Ref_wil_kabupaten::class, 'id_provinsi', 'id_provinsi');
    }
}
