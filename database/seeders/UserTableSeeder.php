<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            // user
            [
                'name' => 'Md. Rafiqul',
                'slug' => Str::slug(Str::random(20)),
                'email' => 'rafiqul@gmail.com',
                'password' => Hash::make('123456'),
                'status' => 'active',
            ]
          
        ]);
    }
    }