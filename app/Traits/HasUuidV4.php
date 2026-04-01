<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasUuidV4
{
    /**
     * The "booted" method of the trait.
     */
    protected static function bootHasUuidV4(): void
    {
        static::creating(function ($model) {
            if (!$model->uuid) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Find model by ID or UUID.
     *
     * @param  string|int  $key
     * @return static
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public static function findByKeyOrFail(string|int $key): static
    {
        return static::where(function ($query) use ($key) {
            $query->where('id', $key)
                ->orWhere('uuid', $key);
        })->firstOrFail();
    }
}
