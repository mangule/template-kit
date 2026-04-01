<?php

namespace App\Models;

use App\Traits\HasUuidV4;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $table = "roles";

    use HasUuidV4;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    protected $fillable = [
        "name",
        "guard_name",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [];

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
            ->orWhere('guard_name', 'ILIKE', '%' . $search . '%')
            ->orWhere('level', 'ILIKE', '%' . $search . '%');
    }
}
