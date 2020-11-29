<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StudentScore;

class Student extends Model
{
    use HasFactory;

    /**
     * Student - score
     */
    public function scores()
    {
    	return $this->hasMany( StudentScore::class, 'student_id');
    }
}
