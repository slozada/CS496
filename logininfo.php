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

//Reference: https://www.formget.com/login-form-in-php/

session_start();
session_destroy();
session_start();
$error='';

//Obtain data from login form 
$email=$_POST['email'];
$password=$_POST['password'];
$data_to_post = array();
$data_to_post['email'] = $email;


$ch = curl_init();
//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user/search" );
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

$content=curl_exec($ch);

//Close Session
curl_close($ch);

$data=json_decode($content,true);
$userid=$data['keys'][0];

if($userid)
{
	//Obtain user password from the API  
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user/".$userid );
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$content=curl_exec($ch);
	//Close Session
	curl_close($ch);
	$data1=json_decode($content,true);
	$upassword=$data1['password'];

	if ($password==$upassword)
	{
		$_SESSION['login_user']=$userid;
		header("location: user.php");
	}

}



?>
