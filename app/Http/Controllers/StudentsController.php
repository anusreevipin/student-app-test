<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentService;
use App\Http\Requests\Students\StudentRequest;
use App\Services\MessageService;
use App\Services\FilterService;

class StudentsController extends Controller
{
   
    private $messageService;
    private $filterService;

    /**
     * Construct
     */
    public function __construct( MessageService $messageService, FilterService $filterService )
    {
        $this->messageService = $messageService;
        $this->filterService = $filterService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( StudentService $StudentService )
    {   

        $students = $StudentService->getStudents();
        $filter = $this->filterService->getStudent();
        return view('students.list')
            ->with('students',$students)
            ->with('filter', $filter);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, StudentService $StudentService)
    {   
        $student = $StudentService->getStudent( $id );
        if( $student == null ) return abort(404);

        return view('students.edit')
            ->with('student',$student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, StudentService $StudentService, $id)
    {   
        $data = [
            'name' => $request->student_name,
            'date_of_birth' => $request->student_dob
        ];

        $StudentService->updateStudent( $id, $data);
        $this->messageService->set('success','Student details has been updated');
        return redirect( route('students.index') );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Set student filters
     * @param  Request filter params 
     * @return Response
     */
    public function setFilter( Request $request )
    {
        $data = [
            'name' => $request->student_name,
            'date_of_birth' => $request->student_dob
        ];

        $this->filterService->setStudent( $data );
        return redirect( route('students.index') );
    }

    /**
     * Reset student filter
     */
    public function resetFilter()
    {
        $this->filterService->resetStudent();
        return redirect( route('students.index') );
    }
}
