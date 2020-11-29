<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CousrseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $courses = array('Physics','Biology','Maths','Malayalam','English','Chemistry');
        foreach( $courses as $course ) {

        	$newCourse = new Course;
        	$newCourse->course_name = $course;
        	$newCourse->save();
        }
    }
}
