<?php

$key=$_POST['key'];
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


//Initialize session
$ch = curl_init();

//Set Options
$path="http://finalapi-1327.appspot.com/offeredit/".$key;

curl_setopt($ch,CURLOPT_URL,$path);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"PUT");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

$content=curl_exec($ch);

print $content;

//Close Session
curl_close($ch);

header('Location: user.php');    

?>
