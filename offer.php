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

<div class="fmdiv" >
<div data-role="pager">
<h3>Add a new coupon</h3>
<form action="post_offer.php" method="post">
<label for="product">Product</label>
<input type="text" name="product" id="product" value="" required>
<label for="txt-email">Discount</label>
<input type="text" name="discount" id="discount" value="" required>
<label for="txt-email">Discount Code</label>
<input type="text" name="code" id="code" value="" required>
<label for="txt-password">Valid Until</label>
<input type="text" name="validUntil" id="validUntil" value="" required>
<label for="txt-password">Valid Website</label>
<input type="text" name="validWebsite" id="validWebsite" value="" required>

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

