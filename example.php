<?php
// USA ePay PHP Library.
//      v1.6
//
//      Copyright (c) 2002-2008 USA ePay
//      For support please contact devsupport@usaepay.com
//
//  The following is an example of running a transaction using the php library.
//  Please see the README file for more information on usage.
//

// Change this path to the location you have save usaepay.php to
include "./usaepay.php";

// Instantiate USAePay client object
$tran=new umTransaction;

// Merchants Source key must be generated within the console
$tran->key="897asdfjha98ds6f76324hbmnBZc9769374ybndfs876";

// Send request to sandbox server not production.  Make sure to comment or remove this line before
//  putting your code into production
$tran->usesandbox=true;    

$tran->card="4005562233445564";		
$tran->exp="0312";			
$tran->amount="1.00";			
$tran->invoice="1234";   		
$tran->cardholder="Test T Jones"; 	
$tran->street="1234 Main Street";	
$tran->zip="90036";			
$tran->description="Online Order";	
$tran->cvv2="435";				

echo "<h1>Please Wait One Moment While We process your card.<br>\n";
flush();

if($tran->Process())
{
	echo "<b>Card approved</b><br>";
	echo "<b>Authcode:</b> " . $tran->authcode . "<br>";
	echo "<b>AVS Result:</b> " . $tran->avs_result . "<br>";
	echo "<b>Cvv2 Result:</b> " . $tran->cvv2_result . "<br>";
} else {
	echo "<b>Card Declined</b> (" . $tran->result . ")<br>";
	echo "<b>Reason:</b> " . $tran->error . "<br>";	
	if($tran->curlerror) echo "<b>Curl Error:</b> " . $tran->curlerror . "<br>";	
}		

?>