<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function setGrade($newGrade) {
        echo $this->grade;
        echo $newGrade;
        if ($newGrade >= $this->grade) {
            $this->grade = $newGrade;
        }
        if ($newGrade >= 5.5) {
            $this->completed = true;
        }
        $this->save();
    }
}
