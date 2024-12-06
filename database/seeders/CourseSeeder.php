<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table(table: 'courses')->insert(values: [
            [
                'id'        => 1,
                'title'     => 'Offensive Security Intro',
                'description' => "Hack your first website (legally in a safe environment) and experience an ethical hacker's job.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'title'     => 'Defensive Security Intro',
                'description' => "Introducing defensive security and related topics, such as Threat Intelligence, SOC, DFIR, Malware Analysis, and SIEM.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 3,
                'title'     => 'Careers in Cyber',
                'description' => "Learn about the different careers in cyber security.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 1,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 4,
                'title'     => 'What is Networking?',
                'description' => "Begin learning the fundamentals of computer networking in this bite-sized and interactive module.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 5,
                'title'     => 'Intro to LAN',
                'description' => "Learn about some of the technologies and designs that power private networks.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 6,
                'title'     => 'OSI Model',
                'description' => "Learn about the fundamental networking framework that determines the various stages in which data is handled across a network.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 7,
                'title'     => 'Packets & Frames',
                'description' => "Understand  how data is divided into smaller pieces and transmitted across a network to another device.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 8,
                'title'     => 'Extending Your Network',
                'description' => "Learn about some of the technologies used to extend networks out onto the Internet and the motivations for this.",
                'difficulty' => 'Beginner Friendly',
                'duration' => 5,
                'syllabus_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 9,
                'title'     => 'DNS in detail',
                'description' => "Learn how DNS works and how it helps you access internet services.",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 10,
                'title'     => 'HTTP in Detail',
                'description' => "Learn about how you request content from a web server using the HTTP protocol",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 11,
                'title'     => 'How Websites Work',
                'description' => "To exploit a website, you first need to know how they are created.",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 12,
                'title'     => 'Putting it all together',
                'description' => "Learn how all the individual components of the web work together to bring you access to your favourite web sites.",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 3,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 13,
                'title'     => 'Linux Fundamentals Part 1',
                'description' => "Embark on the journey of learning the fundamentals of Linux. Learn to run some of the first essential commands on an interactive terminal.",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 14,
                'title'     => 'Linux Fundamentals Part 2',
                'description' => "Continue your learning Linux journey with part two. You will be learning how to log in to a Linux machine using SSH, how to advance your commands, file system interaction.",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 15,
                'title'     => 'Linux Fundamentals Part 3',
                'description' => "Power-up your Linux skills and get hands-on with some common utilities that you are likely to use day-to-day!",
                'difficulty' => 'Intermediate',
                'duration' => 5,
                'syllabus_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 16,
                'title'     => 'Windows Fundamentals 1',
                'description' => "In part 1 of the Windows Fundamentals module, we'll start our journey learning about the Windows desktop, the NTFS file system, UAC, the Control Panel, and more..",
                'difficulty' => 'Advanced',
                'duration' => 10,
                'syllabus_id' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 17,
                'title'     => 'Windows Fundamentals 2',
                'description' => "In part 2 of the Windows Fundamentals module, discover more about System Configuration, UAC Settings, Resource Monitoring, the Windows Registry and more..",
                'difficulty' => 'Advanced',
                'duration' => 10,
                'syllabus_id' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 18,
                'title'     => 'Windows Fundamentals 3',
                'description' => "In part 3 of the Windows Fundamentals module, learn about the built-in Microsoft tools that help keep the device secure, such as Windows Updates, Windows Security, BitLocker, and more...",
                'difficulty' => 'Advanced',
                'duration' => 10,
                'syllabus_id' => 5,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],

        ]);
    }
}
