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
    }
}
