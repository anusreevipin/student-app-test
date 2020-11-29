<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentService;
use App\Services\CourseService;
use App\Services\ScoreService;
use App\Services\MessageService;

class ScoreController extends Controller
{
    
    private $courseService;
    private $messageService;

    /**
     * Construct
     */
    public function __construct( CourseService $courseService, MessageService $messageService )
    {
        $this->courseService = $courseService;
        $this->messageService = $messageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function show(StudentService $studentService, $id)
    {   
        $student = $studentService->getStudent( $id );
        if( $student == null ) return abort(404);

        $courses = $this->courseService->getCourses();
        $scores = $student->scores()->pluck('score','course_id');

        return view('scores.index')
            ->with('student', $student)
            ->with('courses', $courses)
            ->with('scores', $scores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentService $studentService, ScoreService $scoreService, $studentID)
    {
        $student = $studentService->getStudent( $studentID );
        if( $student == null ) return abort(404);

        foreach($request->scores as $courseID => $score) {
            $scoreService->saveScore( $studentID, $courseID, $score );
        }


        $this->messageService->set('suc','Score details updated');
        return redirect( route('scores.show', $student->id ));
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
}
