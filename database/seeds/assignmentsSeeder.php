<?php

use Illuminate\Database\Seeder;
use App\Assignment;

class assignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function createAssignment($course_id, $assignmentName, $weight, $grade = null, $passed = false)
        {
            Assignment::create([
                'course_id' => $course_id,
                'name' => $assignmentName,
                'weight' => $weight,
                'grade' => $grade,
                'passed' => $passed
            ]);
        }

        createAssignment(1,'Eindgesprek', 100);
        createAssignment(2,'Theorietentamen', 100);
        createAssignment(3,'Casustoets', 100);
    }
}
