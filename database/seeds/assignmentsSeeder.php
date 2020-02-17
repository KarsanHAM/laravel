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

        createAssignment(1,'Eindgesprek', 100, 6.5);
        createAssignment(2,'Theorietentamen', 100, 8.5);
        createAssignment(3,'Casustoets', 100, 6.0);
        createAssignment(4,'Presentatie', 33, 5.4);
        createAssignment(4,'Verslag', 33, 5.4);
        createAssignment(4,'Functioneringsgesprek', 33, 5.7);
        createAssignment(5,'Portfolio', 100);
        createAssignment(6,'Casustoets', 50, 5.5);
        createAssignment(6,'Groepsproject', 50, 7.5);
        createAssignment(7,'Agile functioneren', 50);
        createAssignment(7,'Taaltoets', 25, 6.6);
        createAssignment(7,'Verslag', 25, 7.7);
        createAssignment(8,'Eindgesprek', 100);
        createAssignment(9,'Casustoets', 100);
        createAssignment(10,'Requirementsverslag', 50);
        createAssignment(10,'Projectresultaat', 50);
        createAssignment(11,'Agile functioneren', 50);
        createAssignment(11,'Engels opdrachten', 25);
        createAssignment(11,'Engels werkstuk', 25);
        createAssignment(12,'Portfolio', 100);
        createAssignment(13,'Opdrachten', 100);
        createAssignment(14,'Code reviews', 50);
        createAssignment(14,'Projectresultaat', 50);
    }
}
