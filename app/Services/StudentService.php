<?php 

namespace App\Services;

use App\Models\Student;
use App\Services\FilterService;

class StudentService {

	private $filterService;

	/**
	 * Construct
	 */
	public function __construct( FilterService $filterService )
	{
		$this->filterService = $filterService;
	}


	/**
	 * Get students
	 */
	public function getStudents()
	{	
		$filter = $this->filterService->getStudent();
		return Student::when( isset($filter['name']) , function($q) use ($filter) {
			return $q->where('name','like','%'.$filter['name'].'%');
		})->when( isset($filter['dob']), function($q) use($filter) {
			return $q->where('date_of_birth', $filter['dob']);
		})
		->orderBy('name')->paginate(10);
	}

	/**
	 * Get student by ID
	 */
	public function getStudent( $id )
	{
		return Student::find( $id );
	}

	/**
	 * Save student 
	 */
	public function updateStudent( $id, $student )
	{	
		Student::where('id', $id)->update($student);
		return true;
	}
}