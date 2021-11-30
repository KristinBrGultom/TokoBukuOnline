<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admintoko',
            'name' => 'Admin Baru',
            'email' => 'admin.baru@gmail.com',
            'password' => Hash::make('tokobuku'),
        ]);
    }
}
