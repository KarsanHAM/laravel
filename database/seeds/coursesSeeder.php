<?php

use Illuminate\Database\Seeder;
use App\Course;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function createCourse($courseName, $EC)
        {
            Course::create([
                'name' => $courseName,
                'EC' => $EC
            ]);
        }

        createCourse('Opleiding en Beroepsorientantie', 2.5);
        createCourse('Computer science basics', 7.5);
        createCourse('Programming basics', 5);
        createCourse('Professional skills 1', 2.5);
        createCourse('HZ Personality', 2.5);
        createCourse('Object-oriented programming', 10);
        createCourse('Professional skills 2', 2.5);
        createCourse('Professionele werkplek', 5);
        createCourse('Framework development 1', 5);
        createCourse('Framework project 1', 5);
        createCourse('Professional skills 3', 2.5);
        createCourse('IT Personality 1', 2.5);
        createCourse('Framework development 2', 5);
        createCourse('Framework project 2', 5);
    }
}
