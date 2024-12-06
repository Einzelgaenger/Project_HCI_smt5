<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        DB::table(table: 'users')->insert(values: [
            [
                'id'        => 1,
                'username'  => 'user',
                'name'      => 'user',
                'email'     => 'user@gmail.com',
                'password'  => bcrypt('user123'),
                'is_admin'  => 0,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'username'  => 'admin',
                'name'      => 'admin',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('admin123'),
                'is_admin'  => 0,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ]);
    }
}
