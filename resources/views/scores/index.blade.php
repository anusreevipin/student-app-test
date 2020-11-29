@extends('layouts.app')
@section('title','Student Scores')

@section('content')



<table class="table table-striped table-condensed table-bordered">
<tr>
	<th>Student</th>
	<th>Course</th>
	<th>Score</th>
</tr>
	
@if(empty($students))
	<tr>
		<td colspan="4"><div class="alert alert-warning">No Students Found Yet!</div></td>
	</tr>
@else
	
	@foreach($scores as $score)
	
	@endforeach

@endif

</table>

{{ $students->links() }}

@endsection