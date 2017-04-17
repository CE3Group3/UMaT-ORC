<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
</head>

<body>

<form action="{{URL::to('adminlogin')}}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">


	<label for="name">Username</label><br/>
	<input placeholder="Enter username" name="username" type="text"  required><br/>


	<label for="name">Password</label><br/>
	<input placeholder="Enter password" name="pass" type="text"  required><br/>


	<input type="submit" value="Submit">

</form>
</body>

</html>
