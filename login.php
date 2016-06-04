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

<div class="fmdiv">
<h3>Welcome!</h3>
<div class="fmdiv">
<label for="txt-email">Email Address</label>
<input type="text" name="txt-email" id="txt-email" value="">
<label for="txt-password">Password</label>
<input type="password" name="txt-password" id="txt-password" value="">

    <input type="button" value="Sign In">
</form>
<p>Don't have a login? <a href="signup.php">Sign up</a> </p>

<div>

<?php
/*
//PHP cURL

//Initialize session

$ch = curl_init();

$userid="5664248772427776"; 
//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user/".$userid );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$content=curl_exec($ch);
//Close Session
curl_close($ch);
//Transfor user data into a json object
$data=json_decode($content,true);

echo "<h2>My Coupons</h2>";

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
  	
	echo "<h3>$product<h3>";
	echo "<p>Discount code: $code</p>";	
	echo "<p>Discount percentage: $discountPer</p>";	
	echo "<p>Valid until: $validUntil</p>";	
	echo "<p>Website: $validWebsite</p>";	
	
	echo "</div>";
	
}
echo "</table>";
*/
?>

<div data-role="footer" data-position="fixed"> 
	<h4></h4> 
</div> 

</body>
</html>

