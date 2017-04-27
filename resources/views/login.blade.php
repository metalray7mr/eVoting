<html>
<head>
	<title>Login Page</title>
</head>
<body>
<form action="/loginme" method="post"/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<label>Username :</label>
<input type="text" name="username"><br/>
<label>Password :</label>
<input type="text" name="password"><br/>
<input type="submit" name="" value="login"/>
</body>
</html>