<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //seeder untuk data referensi wilayah
        $this->call(RefWilDesaTableSeeder::class);
        $this->call(RefWilKecamatanTableSeeder::class);
        $this->call(RefWilKabupatenTableSeeder::class);
        $this->call(RefWilProvinsiTableSeeder::class);

        //seeder untuk data account
        $this->call(RolePermissionSeeder::class);
        $this->call(AccountSeeder::class);
    }
}
