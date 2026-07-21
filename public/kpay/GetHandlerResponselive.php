<?php
$ResErrorText = $_REQUEST['ErrorText']; 	  	//Error Text/message
$ResPaymentId = $_REQUEST['paymentid'];		//Payment Id
$ResTrackID = $_REQUEST['trackid'];       	//Merchant Track ID
$ResErrorNo = $_REQUEST['Error'];           //Error Number
$ResResult =  $_REQUEST['result'];          //Transaction Result
$ResPosdate = $_REQUEST['postdate'];        //Postdate
$ResTranId = $_REQUEST['tranid'];           //Transaction ID
$ResAuth = $_REQUEST['auth'];               //Auth Code		
$ResAVR = $_REQUEST['avr'];                 //TRANSACTION avr					
$ResRef = $_REQUEST['ref'];                 //Reference Number also called Seq Number
$ResAmount = $_REQUEST['amt'];              //Transaction Amount
$Resudf1 = $_REQUEST['udf1'];               //UDF1
$Resudf2 = $_REQUEST['udf2'];               //UDF2
$Resudf3 = $_REQUEST['udf3'];               //UDF3
$Resudf4 = $_REQUEST['udf4'];               //UDF4
$Resudf5 = $_REQUEST['udf5'];               //UDF5

$termResourceKey = "FFP81EK36R3V7C21";

if ($ResErrorText == null && $ResErrorNo == null) {

	$ResTranData = $_REQUEST['trandata'];
	if ($ResTranData != null) {
		$decrytedData = decrypt($ResTranData, $termResourceKey);
		
		
header("Location: https://baniwail.com/kpay/result.php?" . $decrytedData);
		
	echo $ResTranData ;
		exit();
	}
} else {
    
    
	header("Location: https://baniwail.com/kpay/result.php?" . "Error=" . $ResErrorNo . "&ErrorText=" . $ResErrorText . "&trackid=" . $ResTrackID . "&amt=" . $ResAmount . "&paymentid=" + $ResPaymentId);
	exit();
	echo $ResTranData ;
}


function decrypt($code, $key)
{
	$code =  hex2ByteArray(trim($code));
	$code = byteArray2String($code);
	$iv = $key;
	$code = base64_encode($code);
	$decrypted = openssl_decrypt($code, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $iv);
	return pkcs5_unpad($decrypted);
}

function hex2ByteArray($hexString)
{
	$string = hex2bin($hexString);
	return unpack('C*', $string);
}


function byteArray2String($byteArray)
{
	$chars = array_map("chr", $byteArray);
	return join($chars);
}


function pkcs5_unpad($text)
{
	$pad = ord($text[strlen($text) - 1]);
	if ($pad > strlen($text)) {
		return false;
	}
	if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
		return false;
	}
	return substr($text, 0, -1 * $pad);
}
