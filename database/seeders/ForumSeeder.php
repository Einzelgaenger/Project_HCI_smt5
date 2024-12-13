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
            ],
            [
                'id'        => 3,
                'content'   => "I found a bug in a small business website. What's the best approach to disclose it without legal risks?",
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 4,
                'content'   => "Hey guys, my website's just got hacked. Does anyone have tips on what to do first?",
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 5,
                'content'   => "I think my personal info leaked. Somebody seems to be spying on me. What should I do?",
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 6,
                'content'   => "This account has been hacked! The owner of this account is no longer here.",
                'user_id'   => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ]
        ]);
    }
}
