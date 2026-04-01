<?php

namespace App\Models;

use App\Traits\HasUuidV4;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    protected $table = "permissions";

    use HasUuidV4;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        'name',
        'guard_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'name'       => 'string',
            'guard_name' => 'string',
        ];
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'ILIKE', '%' . $search . '%')
            ->orWhere('guard_name', 'ILIKE', '%' . $search . '%');
    }

}
