<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // seed user roles
        $this->call(RoleSeeder::class);

        //customer user seeder
        \App\Models\User::factory(10)->create()->each(function ($user) {
            $user->assignRole('customer');
        });

        //employee user seeder
        \App\Models\User::factory()->create([
            'name' => 'Employee 1',
            'email' => 'employee1@employee.com',
            'email_verified_at' => now(),
            'city' => 'aberdeen',
            'phone' => fake()->phoneNumber(),
            'address' => 'Fake Address',
            'postcode' => 'AB10 ABZ',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
        ])->assignRole('employee');

        \App\Models\User::factory()->create([
            'name' => 'Employee 2',
            'email' => 'employee2@employee.com',
            'email_verified_at' => now(),
            'city' => 'aberdeen',
            'phone' => fake()->phoneNumber(),
            'address' => 'Fake Address',
            'postcode' => 'AB10 ABZ',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
        ])->assignRole('employee');

        //admin user seeder
        \App\Models\User::factory()->create([
            'name' => 'Sese',
            'email' => 'sese@hotmail.com',
            'email_verified_at' => now(),
            'city' => 'aberdeen',
            'phone' => fake()->phoneNumber(),
            'address' => 'Fake Address',
            'postcode' => 'AB10 ABZ',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
        ])->assignRole('admin');
    }
}
