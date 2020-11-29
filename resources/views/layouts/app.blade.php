<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | Student App</title>
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}" />
</head>
<body>

	<div class="container" style="margin-top: 30px;">
		<div class="row">
			<div class="col-md-12">
				@include('layouts.messages')
				@yield('content')
			</div>
		</div>
	</div>

</body>
</html>