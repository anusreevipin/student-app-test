@extends('layouts.app')
@section('title','Student Scores')

@section('content')

@include('students.navigation')
@include('students.info')

<form method="post" action="{{ route('scores.update', $student->id)}}">
	@csrf
	@method('PATCH')
<div class="row">	
	<div class="col-md-12">
		<table class="table table-striped table-condensed table-bordered">
		<tr>
			<th>Course</th>
			<th>Score</th>
		</tr>

		@foreach( $courses as $course )
		<tr>
			<td>{{ $course->course_name }}</td>
			<td><input 
					type="text" 
					class="form-control" 
					name="scores[ {{ $course->id }} ]" 
					value="{{ old( 'scores['.$course->id.']', $scores[$course->id]) }}" 
				/>
		</tr>
		@endforeach


		</table>

		<input type="submit" class="btn btn-dark" value="Save" />
	</div>	
</div>
</form>

@endsection