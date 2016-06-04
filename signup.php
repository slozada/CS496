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
<h3>Sign Up</h3>
<form action="post_user.php" method="post">
<label for="txt-fname">Firt Name</label>
<input type="text" name="fname" id="fname" value="" required>
<label for="txt-email">Last Name</label>
<input type="text" name="lname" id="lname" value="" required>
<label for="txt-email">Email Address</label>
<input type="text" name="email" id="email" value="" required>
<label for="txt-password">Password</label>
<input type="password" name="password" id="password" value="" required>
<label for="txt-password">Confirm password</label>
<input type="password" name="password1" id="password1" value="" required>

    <input type="submit" value="Submit">
</form>

</div>

</body>
</html>

