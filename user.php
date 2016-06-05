<?php

session_start();

if(!$_SESSION['login_user'])
{
	echo "You are not logged in!";
  	header("location: login.php");
  	echo '<br/>Please <a href="login.php" class="btn btn-primary btn-lg active" role="button">Login</a>';
  	die();
}

$userid=$_SESSION['login_user'];


?>


<!DOCTYPE html> 
<html>
<head>
        <title>My Page</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"/>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<link href="app.css" rel="stylesheet" />
</head>

<body>
<div data-role="page" id="pageone" data-theme="a">
  <div data-role="header">
    <h1>The Coupon Book</h1>
  </div>

<?php
//PHP cURL

//Initialize session

$ch = curl_init();

//$userid="5676073085829120"; 
//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user/".$userid );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$content=curl_exec($ch);
//Close Session
curl_close($ch);
//Transfor user data into a json object
$data=json_decode($content,true);

echo "<h3>My Coupons</h3>";

//Obtain current user saved coupons 
foreach ($data['offers'] as $key => $values)
{
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/offer/".$values );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $offerInfo=curl_exec($ch);
    //Close Session
    curl_close($ch);
	
	$coupon=json_decode($offerInfo,true);
	$code=$coupon['code'];
	$product=$coupon['product'];
	$discountPer=$coupon['discountPer'];
	$validUntil=$coupon['validUntil'];	
	$validWebsite=$coupon['validWebsite'];	

	echo "<div data-role='collapsible' data-theme='s' data-content-theme='s' >";
  	
	echo "<h4>$product<h4>";
	echo "<p>Discount code: $code</p>";	
	echo "<p>Discount percentage: $discountPer</p>";	
	echo "<p>Valid until: $validUntil</p>";	
	echo "<p>Website: $validWebsite</p>";	
	
	echo "</div>";
	
}
echo "</table>";

?>


<div data-role="footer" data-position="fixed">
  <div data-role="navbar">
    <ul>
      <li><a href="#" data-icon='home'>My Coupons</a></li>
      <li><a href="offer.php" data-icon='plus'>Add Coupon</a></li>
      <li><a href="logout.php" data-icon='user'>Sign out</a></li>
    
	</ul>
  </div><!-- /navbar -->
</div><!-- /foot


</body>
</html>

