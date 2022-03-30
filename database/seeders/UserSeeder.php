<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Salwa',
                'email' => 'admin1@admin.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Nazela',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('password'),
            ]
        ];
        DB::table('users')-> insert($data);
    }
}
