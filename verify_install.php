<?php
// USA ePay PHP Library.
//      v1.6 
//
//      Copyright (c) 2002-2007 USA ePay
//      For assistance please contact devsupport@usaepay.com
//
//  The following script uses the Test function to verify
//  that your PHP installation can properly communicate with
//  the USAePay Gateway.  If a problem is detected, potential
//  solutions will be suggested.  If none of the suggestions
//  work for you, please contact support for additional
//  assistance.
//


// Change this path to match the location of your usaepay.php file
include "/home/usaepay-php/usaepay.php";


$tran=new umTransaction();

// Uncomment this line to specify a root ca bundle location for Windows
//$tran->cabundle='c:\windows\curl-ca-bundle.crt';

// Uncomment this line to specify a root ca bundle location for Unix
//$tran->cabundle='/usr/share/curl/curl-ca-bundle.crt';

$tran->Test();

?>