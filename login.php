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
<form action="logininfo.php" method="post">
<label for="txt-email">Email Address</label>
<input type="text" name="email" id="email" value="" required>
<label for="txt-password">Password</label>
<input type="password" name="password" id="password" value="" required>

    <input type="submit" value="Sign In">
</form>

<p>Don't have a login? <a href="signup.php">Sign up</a> </p>

</div> 

</body>
</html>

