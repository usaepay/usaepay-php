USAePay PHP Library v1.6.13
=================================
Copyright 2013 USAePay, Inc.

[http://www.usaepay.com](http://www.usaepay.com)

[http://help.usaepay.com/developer/phplib](http://help.usaepay.com/developer/phplib)

SYNOPSIS
--------
The USAePay PHP library is a class for running transactions on the USAePay
gateway.  Its feature set roughly follows the [http://help.usaepay.com/developer/transaction]transactionapi.  If
you are looking for more features, take a look at [http://help.usaepay.com/developer/soap/]soap api.

SUPPORT
-------
If you have any questions on the use of this library, please contact
the developer integration support department:
   devsupport@usaepay.com
   866-872-3729 x706
   
For more documentation on using the library, please see
http://help.usaepay.com/developer/phplibrary



REQUIREMENTS
------------
-PHP 4.3.x or higher (http://www.php.net) 

-HTTPs streams support in PHP
or
-Curl/ssl module installed (http://curl.haxx.se/) 


VERIFYING INSTALLATION
----------------------

This package includes a test script "verify_install.php"  that can be used to verify
that your PHP installation is capable of using this library.  Make sure to modify the script
to include the correct path to the library.  Then place the script in web accessable directiory
and access it from a web browser.  If any problems are detected,  follow the on screen 
instructions.


QUICK START
--------------------

	<?php
	include "usaepay.php";
	$tran=new umTransaction;
	$tran->key="AAAAABBBBBBCCCCCCDDDDDDEEEEEEEE";  
	$tran->card="4444555566667779";	
	$tran->exp="1214";
	$tran->amount="5.00";
	if($tran->process())
	{
		echo "Transaction Approved!";
	} else {
		echo "Transaction Failed: " . $tran->error;
	}
