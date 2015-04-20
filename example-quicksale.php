<?php
// USA ePay PHP Library.
//      v1.6
//
//      Copyright (c) 2002-2008 USA ePay
//      For support please contact devsupport@usaepay.com
//
//  The following is an example of running a quicksale, which is a new transaction
//  against a prior sale or credit.  Credit card (or ACH) data is retrieved from
//  prior transaction and does not need to be provided.  The only required information
//  is the transaction reference number (refnum) and the amount.
//
//  Please see the README file for more information on usage.
//

// Change this path to the location you have save usaepay.php to
include "./usaepay.php";
 
$tran=new umTransaction;
 
$tran->key="897asdfjha98ds6f76324hbmnBZc9769374ybndfs876";
$tran->usesandbox=true;

$tran->pin="1234";
$tran->ip=$REMOTE_ADDR;   // This allows fraud blocking on the customers ip address
 
$tran->testmode=0;    // Change this to 0 for the transaction to process
$tran->usesandbox=1;
 
$tran->amount="10.00";			// charge amount in dollars
$tran->invoice="1234";   		// invoice number.  must be unique.
 
$tran->description="Online Order";	// description of charge
$tran->refnum="47100443"; //refnum stored from the $tran->refnum of a previous transaction
 
 
echo "<h1>Please wait one moment while we process your card...<br>\n";
flush();
 
if($tran->ProcessQuickSale())
{
	echo "<b>Card Approved</b><br>";
	echo "<b>Authcode:</b> " . $tran->authcode . "<br>";
	echo "<b>AVS Result:</b> " . $tran->avs . "<br>";
	echo "<b>Cvv2 Result:</b> " . $tran->cvv2 . "<br>";
} else {
	echo "<b>Card Declined</b> (" . $tran->result . ")<br>";
	echo "<b>Reason:</b> " . $tran->error . "<br>";	
	if(@$tran->curlerror) echo "<b>Curl Error:</b> " . $tran->curlerror . "<br>";	
}		
 ?>