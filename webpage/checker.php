<?php
if (isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['userName'])&&isset($_POST['password'])&&isset($_POST['confirmPassword'])

&&isset($_POST['date'])&&isset($_POST['gender'])&&isset($_POST['phone'])&&isset($_POST['url'])&&isset($_POST['gpa'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$userName=$_POST['userName'];
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$confirmPassword=$_POST['confirmPassword'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$url=$_POST['url'];
	$gpa=$_POST['gpa'];
	if(!preg_match("/[\D]{2,}/",$name)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}
	else if(!preg_match('/[\w\d]+@[\w\d]+/',$email)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}		
	elseif(!preg_match("/[\D]{2,}/",$userName)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}		
	elseif(!preg_match("/[\w\d]{8,}/",$password)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}		
	elseif($confirmPassword!=$password){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}	
		elseif(!preg_match("/\d{2}\.\d{2}\.\d{2,4}/",$date)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}	
	elseif(!preg_match("/\+998-\d{2}-\d{7}/",$phone)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}		
	elseif(!preg_match("/http.*/",$url)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}		
	elseif(!preg_match("/^\d\.\d{1,4}$/",$gpa)){
		echo "<h1>Error!</h1>";
		echo "<a href='index.php'>Try again</a>";
	}
	else{
		echo "<h1>Thank you!</h1>";
	}
}
else{
	echo "<h1>Error!</h1>";
	echo "<a href='index.php'>Try again</a>";		
}



?>