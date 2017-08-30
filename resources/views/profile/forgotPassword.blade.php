<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password Page</title>
</head>
<body>

<form method="post" action="{{URL::to('/')}}/setToken">
{{csrf_field()}}
<input type="text" name="email_address">
<input type="submit" name="" value="Send Reset Link">
	
</form>

</body>
</html>