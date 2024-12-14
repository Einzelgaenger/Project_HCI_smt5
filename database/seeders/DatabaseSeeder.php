<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(class:UserSeeder::class);
        $this->call(class:ForumSeeder::class);
        $this->call(class:SyllabusSeeder::class);
        $this->call(class:CourseSeeder::class);
        $this->call(class:ModuleSeeder::class);
        $this->call(class:OngoingSeeder::class);
        $this->call(class:DoneSeeder::class);
        $this->call(class:DoneModuleSeeder::class);
    }
}
