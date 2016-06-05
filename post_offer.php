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

//$userid="5676073085829120";

$product=$_POST['product'];
$discount=$_POST['discount'];
$code=$_POST['code'];
$validUntil=$_POST['validUntil'];
$validWebsite=$_POST['validWebsite'];

$data_to_post = array();
$data_to_post['product'] = $product;
$data_to_post['discountPer'] = $discount;
$data_to_post['validUntil'] = $validUntil;
$data_to_post['code'] = $code;
$data_to_post['validWebsite'] = $validWebsite;



//Create a new offer object via a POST request to API 
//Initialize session
$ch = curl_init();

//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/offer" );
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

$newOffer=curl_exec($ch);
$data=json_decode($newOffer,true);

$keyOffer=$data['key'];


//Close Session
curl_close($ch);

//Initialize session
$ch = curl_init();

//Set Options
$path="http://finalapi-1327.appspot.com/user/".$userid."/offer/".$keyOffer;

curl_setopt($ch,CURLOPT_URL,$path);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PUT");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

$content=curl_exec($ch);

//Close Session
curl_close($ch);

header('Location: user.php');    

?>
