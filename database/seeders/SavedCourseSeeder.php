<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SavedCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table(table: 'saved_courses')->insert(values: [
            [
                'id'        => 1,
                'user_id'   => 1,
                'course_id' => 4,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
            [
                'id'        => 2,
                'user_id'   => 1,
                'course_id' => 2,
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now(),
            ],
        ]);
    }
}
