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

<?php

//Obtain data from login form 
$key=$_GET['id'];

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/offer/".$key );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$offerInfo=curl_exec($ch);
 //Close Session
curl_close($ch);
    
$coupon=json_decode($offerInfo,true);
if ($coupon)
{   
	$code=$coupon['code'];
    $product=$coupon['product'];
    $discountPer=$coupon['discountPer'];
    $validUntil=$coupon['validUntil'];  
    $validWebsite=$coupon['validWebsite'];  
}

?>

<div class="fmdiv" >
<h3>Edit coupon</h3>
<form action="offer_update.php" method="post">
<input type="hidden" name="key" value="<?php echo $key; ?>">
<label for="product">Product</label>
<input type="text" name="product" id="product" value="<?php echo $product; ?>" required>
<label for="txt-email">Discount</label>
<input type="text" name="discount" id="discount" value="<?php echo $discountPer; ?> " required>
<label for="txt-email">Discount Code</label>
<input type="text" name="code" id="code" value="<?php echo $code; ?>" required>
<label for="txt-password">Valid Until</label>
<input type="text" name="validUntil" id="validUntil" value="<?php echo $validUntil; ?>" required>
<label for="txt-password">Valid Website</label>
<input type="text" name="validWebsite" id="validWebsite" value="<?php echo $validWebsite; ?>" required>

    <input type="submit" value="Submit">
</form>

</div>
<div data-role="footer" data-position="fixed">
  <div data-role="navbar">
    <ul>
      <li><a href="user.php" data-icon='home'>My Coupons</a></li>
      <li><a href="#" data-icon='plus'>Add Coupon</a></li>
      <li><a href="logout.php" data-icon='user'>Sign out</a></li>
     </ul>
  </div><!-- /navbar -->
</div><!-- /foot



</body>
</html>
