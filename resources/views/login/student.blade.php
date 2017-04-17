<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
</head>

<body>

	<form action="{{URL::to('studentlogin')}}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input placeholder="Enter Index Number" name="username" type="text"  required>
		<label for="name">Index Number</label>

		<input placeholder="Enter Reference Number" name="pass" type="text"  required>
		<label for="name">Reference Number</label>

		<input type="submit" value="Submit">

	</form>

</body>

</html>
