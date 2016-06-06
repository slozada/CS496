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


//Obtain data from login form 
$key=$_GET['id'];

print $key;

$ch = curl_init();
//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/offer/delete/".$key );
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

$content=curl_exec($ch);

//Close Session
curl_close($ch);

header("Location: user.php");


?>
