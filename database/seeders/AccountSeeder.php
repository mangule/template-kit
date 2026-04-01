<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'name'              => config('account.SUPERADMIN_NAME'),
            'email'             => config('account.SUPERADMIN_MAIL'),
            'password'          => config('account.SUPERADMIN_PASS'),
            'email_verified_at' => Carbon::now(),
        ]);

        $admin = User::create([
            'name'              => config('account.ADMIN_NAME'),
            'email'             => config('account.ADMIN_MAIL'),
            'password'          => config('account.ADMIN_PASS'),
            'email_verified_at' => Carbon::now(),
        ]);

        $user = User::create([
            'name'              => config('account.USER_NAME'),
            'email'             => config('account.USER_MAIL'),
            'password'          => config('account.USER_PASS'),
            'email_verified_at' => Carbon::now(),
        ]);

        $superadmin->assignRole('superadmin');
        $admin->assignRole('admin');
        $user->assignRole('user');
    }
}
