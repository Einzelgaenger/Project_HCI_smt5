<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class SyllabusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table(table: 'syllabus')->insert(values: [
            [
                'id'        => 1,
                'title'     => 'Introduction to Cyber Security',
                'description' => 'Understand what is offensive and defensive security, and learn about careers available in cyber.',
                'difficulty' => 'Beginner',
                'duration' => 10,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'title'     => 'Network Fundamentals',
                'description' => 'Learn the core concepts of how computers communicate with each other and typess of network weaknesses.',
                'difficulty' => 'Beginner',
                'duration' => 25,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 3,
                'title'     => 'How The Web Works',
                'description' => 'To become a better hacker it is vital to understand the underlying functions of the world wide web and what makes it work.',
                'difficulty' => 'Intermediate',
                'duration' => 20,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 4,
                'title'     => 'Linux Fundamentals',
                'description' => 'Many servers and security tools use Linux. Learn how to use the Linux operating system, a critical skill in cyber security.',
                'difficulty' => 'Intermediate',
                'duration' => 15,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 5,
                'title'     => 'Windows Fundamentals',
                'description' => 'Get hands-on access to Windows and it is security controls. These basics will help you in identifying, exploiting and defending Windows.',
                'difficulty' => 'Advanced',
                'duration' => 30,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],

        ]);
    }
}
