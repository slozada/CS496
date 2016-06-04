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

<?php
//PHP cURL


$data_to_post = array();
$data_to_post['validWebsite'] = 'www.tarte.com';
$data_to_post['code'] = 'OFF123';
$data_to_post['validUntil'] = '02-12-17';

print_r ($data_to_post);

//Initialize session
$ch = curl_init();

//Set Options
curl_setopt($ch,CURLOPT_URL,"http://assignment3-1290.appspot.com/offer" );
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data_to_post);

$content=curl_exec($ch);

//Close Session
curl_close($ch);

print $content;


?>
<form>
<div class="ui-field-contain">
    <select name="tag" id="tag">
        <option value="art">art</option>
        <option value="sky">sky</option>
        <option value="flower">flower</option>
        <option value="beach">beach</option>
        <option value="dog">dog</option>
        <option value="river">river</option>

    </select>
</div>
</form>

</body>
</html>

