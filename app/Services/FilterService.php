<?php 

namespace App\Services;
use Session;

class FilterService {

	/**
	 * Student search
	 */
	public function setStudent( $studentFilter )
	{

		Session::put('student', ['name' => $studentFilter['name'], 'dob' => $studentFilter['date_of_birth'] ]);
	}

	/**
	 * Get student filters
	 */
	public function getStudent()
	{
		return Session::get('student');
	}

	/**
	 * Reset student search
	 */
	public function resetStudent()
	{
		Session::forget('student');
	}

}