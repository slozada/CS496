
<!DOCTYPE html> 
<html>
<head>
        <title>My Page</title>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
<link rel="stylesheet"
href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
/>

<link href="app.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
</head>

<body>
<div data-role="page" id="pageone" data-theme="a">
  <div data-role="header">
    <h1>The Coupon Book</h1>
  </div>

</body>
</html>

<?php

//PHP post request

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=$_POST['password1'];

if ($password==$password1)
{
	$data_to_post = array();
	$data_to_post['fname'] = $fname;
	$data_to_post['lname'] = $lname;
	$data_to_post['email'] = $email;
	$data_to_post['password'] = $password;


	//Initialize session
	$ch = curl_init();

	//Set Options
	curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user" );
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

	$content=curl_exec($ch);

	//Close Session
	curl_close($ch);

	
	echo "<div class='fmdiv'>";
	echo "<div data-role='pager'>";
	echo "<h3>Accout Created Successfully</h3>";

    echo "<form action='login.php'>";
    echo "<input type='submit' value='Sign In'></input>";
    echo "</form>";

	echo "</div>";

}
else
{

	echo "<h3>ERROR: The password does not match</h3>";	
	
    echo "<form action='signup.php'>";
    echo "<input type='submit' value='Back'></input>";
    echo "</form>";

	echo "</div>";

}
?>
