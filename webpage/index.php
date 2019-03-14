<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
			<form action="checker.php" method="post">
				<input type="text" placeholder="Name:" name="name" />
				<input type="email" placeholder="Email:" name="email" />
				<input type="text" placeholder="Username:" name="userName" />
				<input type="password" placeholder="Password:" name="password" />
				<input type="password" placeholder="Confirm password:" name="confirmPassword" />
				<input type="text" placeholder="Data of birth:" name="date" />
				<select name="gender">
					<option>Mail</option>
					<option>Femail</option>
				</select>
				<input type="text" placeholder="Phone number:" name="phone" />
				<input type="text" placeholder="Web url:" name="url" />
				<input type="text" placeholder="Overall GPA:" name="gpa" />
				<input type="submit" />
			</form>
	</body>
</html>