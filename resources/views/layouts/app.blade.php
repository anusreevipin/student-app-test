<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') | Student App</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@yield('content')
			</div>
		</div>
	</div>

</body>
</html>