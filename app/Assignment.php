<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded = [];

    public function courses () {
        return $this->belongsTo(Course::class, 'course_id');
    }

    function setGrade($newGrade) {
        $currentGrade = $this->grade;

        if ($newGrade > $currentGrade) {
            $this->grade = $newGrade;
            $currentGrade = $newGrade;
        }

        if ($currentGrade >= 5.5 ) {
            $this->passed = true;
        }

        $this->save();
    }
}
