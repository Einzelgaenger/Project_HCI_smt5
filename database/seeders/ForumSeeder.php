<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table(table: 'forums')->insert(values: [
            [
                'id'        => 1,
                'content'   => 'Hey everyone, I just started my cybersecurity journey. What syllabus do you recommend for absolute beginners? Thanks!',
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'content'   => "Does anyone have tips on how to execute a basic XSS attack in a test environment? I'm trying to learn how it works.",
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ]);
    }
}
