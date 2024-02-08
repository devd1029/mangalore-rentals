<?php

$message="Mangalore Rentals   ";

if(isset($_POST['name'])){
	$message=$message." Name : ".$_POST['name'];
}
if(isset($_POST['number'])){
	$message=$message.", Number : ".$_POST['number'];
	$number=$_POST['number'];
}
if(isset($_POST['pickup'])){
	$message=$message.", PickUp : ".$_POST['pickup'];
}
if(isset($_POST['drop'])){
	$message=$message.", Destination : ".$_POST['drop'];
}

if(isset($_POST['service'])){
	$message=$message.", Service Type : ".$_POST['service'];
}

if(isset($_POST['vehicle'])){
	$message=$message.", Vehicle Type : ".$_POST['vehicle'];
}

if(isset($_POST['distance'])){
	$message=$message.", Distance : ".$_POST['distance'];
}

if(isset($_POST['date'])){
	$message=$message.", Date : ".$_POST['date'];
}
if(isset($_POST['time'])){
	$message=$message.", Time : ".$_POST['time'];
}
echo $message;
$time=$_POST['time'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=MSGIND&route=4&mobiles=9449022895,&authkey=202137A0tWsOtS5aa526b6&message=".$message,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?country=91&sender=MSGIND&route=4&mobiles=".$number.",&authkey=202137A0tWsOtS5aa526b6&message=Mangalore Rentals : We will revert back soon Based On Availability",
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "Could Not able to Request #:" . $err;
} else {
 
  echo "Mangalore Rentals : We will revert back soon Based On Availability";
}

?>