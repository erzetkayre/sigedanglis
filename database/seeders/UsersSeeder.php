<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@gedanglis.id',
                'role_id' => '2',
                'password' => bcrypt('111111')
            ],
            [
                'name' => 'owner',
                'email' => 'owner@gedanglis.id',
                'role_id' => '1',
                'password' => bcrypt('111111')
            ],
            [
                'name' => 'seller',
                'email' => 'seller@gedanglis.id',
                'role_id' => '3',
                'password' => bcrypt('111111')
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
