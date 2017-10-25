<?php 

// Chick if IP Address from Shared Internet
if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
// Chick if IP Address from Proxy
else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
// Chick if IP Address from Remote Address
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>

	</body>
</html>
