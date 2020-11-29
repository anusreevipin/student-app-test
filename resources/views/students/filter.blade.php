<form method="post" action="{{ url('set-student-filter') }}">
@csrf
<div class="row" style="margin-bottom: 20px;">
		<div class="col-md-4">
			<input type="text" class="form-control" placeholder="Name" name="student_name" value="{{ old('student_name', isset($filter['name']) ? $filter['name'] : '' ) }}" />
		</div>

		<div class="col-md-4">
			<input type="date" class="form-control" placeholder="Date of Birth" name="student_dob" value="{{ old('student_dob', isset($filter['dob']) ? $filter['dob'] : '') }}" />
		</div>

		<div class="col-md-4">
			<input type="submit" class="btn btn-dark" value="Filter students" />
			<a href="{{ url('reset-student-filter') }}" class="btn btn-dark">Reset filters</a>
		</div>
</div>
</form>