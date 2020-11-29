@extends('layouts.app')

@section('title','Edit student details')

@section('content')
	
	@include('students.navigation')

	<div class="row">
		<div class="col-md-5">
			
			<form method="post" action="{{ route('students.update', $student->id ) }}">

				@csrf
				@method('PATCH')

				<div class="form-group">
					<label class="">Name</label>
					<input type="text" class="form-control" name="student_name" value="{{ old('student_name', $student->name) }}" />
					@include('layouts.error',['input' => 'student_name'])
				</div>

				<div class="form-group">
					<label class="">DoB</label>
					<input type="date" class="form-control" name="student_dob" value="{{ old('student_dob', $student->date_of_birth) }}" />
					@include('layouts.error',['input' => 'student_dob'])
				</div>

				<div class="form-group">
					<input type="submit" class="btn btn-dark" />
				</div>
			</form>

		</div>
	</div>

@endsection