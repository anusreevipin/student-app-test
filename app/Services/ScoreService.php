<?php 

namespace App\Services;

use App\Models\StudentScore;

class ScoreService {

	/**
	 * Save student scores
	 */
	public function saveScore( $studentID, $courseID, $score )
	{
		StudentScore::updateOrCreate(
			['student_id' => $studentID, 'course_id' => $courseID ],
			['student_id' => $studentID, 'course_id' => $courseID, 'score' => $score ],
		);
	}
}