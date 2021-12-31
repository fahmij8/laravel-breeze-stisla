<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'user',
            'display_name' => 'User',
            'description' => 'A normal user',
        ]);

        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'A super user',
        ]);

        User::create([
            'name' => 'Fahmi Jabbar',
            'email' => 'fahmijabbar@google.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ])->attachRole(Role::where('name', 'admin')->first());

        User::factory()->count(30)->create()->each(function ($user) {
            $roles = ['admin', 'user'];
            $user->attachRole(Role::where('name', $roles[array_rand($roles)])->first());
        });

    }
}