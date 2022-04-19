<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        // to remove all the data from users table
        User::truncate();

        // create a user
        DB::table('users')->insert([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'), // password
        ]);

        // create admin user
        DB::table('users')->insert([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
