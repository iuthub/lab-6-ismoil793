<?php
/*
	check email - /[\w\d]+@[\w\d]+/
	string contains a phone number - /\+998-\d{2}-\d{7}/
	removes the whitespaces from a string - /\s/
	remove nonnumeric characters except comma and dot - /[^\d\,\.]/  //finds non-numerical ele-ts and replace with space,or anything entered for $replacetext
	remove new lines - /\n/
	remove text in square brackets - /\[.*\]/ 

*/ 
	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";

	$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];

	$replacedText=preg_replace($pattern, $replaceText, $text); 	// preg_replace() searches for $pattern(regularExpression) if it finds
															   	// string matching $replaceText is replaced with string inside $text
	if(preg_match($pattern, $text)) {
						$match="Match!";
					} else {
						$match="Does not match!";
					}
}

//         /^\+([0-9]{3})-([0-9]{2})-([0-9]{3})-([0-9]{4})$/    to check phone number
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
