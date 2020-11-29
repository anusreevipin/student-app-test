<?php 

namespace App\Services; 

use App\Models\Course;

class CourseService {

	/**
	 * Get all courses
	 */
	public function getCourses()
	{
		return Course::orderBy('course_name','asc')->get();
	}
}