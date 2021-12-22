<?phpif(isset($_REQUEST["vname"]));
{
	$vname=$_REQUEST["vname"];
	$email=$_REQUEST["email"];
	$message=$_REQUEST["message"];
	$from="From:$vname<$email>\r\nRrturn_path:$email";
	$subject="message sent using your contact from";
	$m=mail("youremail@yoursite.com",$subject,$message,$from);
	if($m)
		echo"<h1>Email sent!";
	else
		echo"send failed:".mysql_error();
	echo"&nbsp;&nbsp;&nbsp;<a href='contacts.php'>[back to contacts]</a>";
}
else{?>

	<html>
	<head>
	<title>contacts page</title>
	</head>
	<body>
	<font face="Trebuchet ms"size="6">
	<table border="1">
	<tr><th>contact Us</th></tr>
	<tr><td>
	<form action="contacts.php"method=POST"enctype="multipart/form-data">
	Your name<br/>
	<input type="text"name="vname"value=""size="30"/><br>
	Your email<br>
	<input type="text"name="email"value=""size=30"/><br>
	Your message<br>
	<textarea name="message"rows="7"cols="30"></textarea><br>
	<inputtyppe="submit"value="Send email"/>
	</form>
	</td></tr>
	</table>
	</body>
	</html>
<?php } ?>