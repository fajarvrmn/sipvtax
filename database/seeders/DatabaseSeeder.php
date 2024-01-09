<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

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
            'role_name' => 'superadmin',
            'desc' => 'digunakan oleh lead spr',
        ]);

        Role::create([
            'role_name' => 'admin',
            'desc' => 'digunakan oleh tim spr',
        ]);

        Role::create([
            'role_name' => 'manager',
            'desc' => 'digunakan oleh manager',
        ]);

        Role::create([
            'role_name' => 'marketing',
            'desc' => 'digunakan oleh marketing '
        ]);

        Role::create([
            'role_name' => 'support',
            'desc' => 'digunakan oleh tim it as'
        ]);
        
        User::factory(8)->create();

    }
}
