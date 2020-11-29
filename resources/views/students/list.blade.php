@extends('layouts.app')
@section('title','Student List')

@section('content')

@include('students.filter')

<table class="table table-striped table-condensed table-bordered">
<tr>
	<th>Student</th>
	<th>DoB</th>
	<th>Edit</th>
	<th>Scores</th>
</tr>
	
@if( $students->count() == 0 )
	<tr>
		<td colspan="4"><div class="alert alert-warning">No Students Found Yet!</div></td>
	</tr>
@else
	
	@foreach($students as $student)
	<tr>	
		<td>{{ ucwords( $student->name ) }}</td>
		<td>{{ date('d F Y', strtotime( $student->date_of_birth )) }}</td>
		<td><a href="{{ route('students.edit', $student->id) }}">Edit</a></td>
		<td><a href="{{ route('scores.index', $student->id) }}">Scores</a></td>
	</tr>
	@endforeach

@endif

</table>

{{ $students->links('pagination::bootstrap-4') }}

@endsection