<!DOCTYPE html> 
<html>
<head>
        <title>My Page</title>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
<link rel="stylesheet"
href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
/>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
<div data-role="page" id="pageone" data-theme="a">
  <div data-role="header">
    <h1>Coupon Saver</h1>
  </div>

<?php
//PHP cURL

//Initialize session

$ch = curl_init();

$userid="5692462144159744"; 
//Set Options
curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/user/".$userid );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$content=curl_exec($ch);
//Close Session
curl_close($ch);
//Transfor user data into a json object
$data=json_decode($content,true);

print_r ($data['offers']);



//Obtain current user data -> current saved coupons 
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<th>CustomerName</th>";
echo "</tr>";
echo "</thead>";
foreach ($data['offers'] as $key => $values)
{
    print $values;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://finalapi-1327.appspot.com/offer/".$values );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $offerInfo=curl_exec($ch);
    //Close Session
    curl_close($ch);
    print_r ($data);
}

echo "</table>";

?>
  <div data-role="footer">
    <h1></h1>
  </div>


</body>
</html>

