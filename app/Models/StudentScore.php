<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class StudentScore extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','course_id','score'];

    /** 
     * Score - course
     */
    public function course()
    {
    	return $this->belongsTo( Course::class,'course_id','id');
    }
    
}
