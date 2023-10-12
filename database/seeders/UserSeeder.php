<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'role_id' => 1,
                'created_at' => now()
            ],
            [
                'name' => 'Employee 1',
                'email' => 'employee1@gmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => 2,
                'created_at' => now()
            ],
            [
                'name' => 'Employee 2',
                'email' => 'employee2@gmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => 2,
                'created_at' => now()
            ],
            [
                'name' => 'Owner 1',
                'email' => 'owner1@gmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => 3,
                'created_at' => now()
            ],
            [
                'name' => 'Owner 2',
                'email' => 'owner2@gmail.com',
                'password' => bcrypt('12345678'),
                'role_id' => 3,
                'created_at' => now()
            ]
        ]);

        User::factory(15)->create();
    }
}
