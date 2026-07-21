<?php
$token = $_GET['token'];
$total = $_GET['total'];
$paymethod = $_GET['paymethod'];
$saller = $_GET['saller'];
$price = $total;//$_POST['price'];
$qty =1 ; //$_POST['qty'];
$TranAmount = $price * $qty;

$TranTrackid = mt_rand();

$TranportalId = "325901";
$ReqTranportalId = "id=" . $TranportalId;
$ReqTranportalPassword = "password=7MgqsWkm";
$ReqAmount = "amt=" . $TranAmount;
$ReqTrackId = "trackid=" . $TranTrackid;
$ReqCurrency = "currencycode=414";
$ReqLangid = "langid=USA";
$ReqAction = "action=1";
$ResponseUrl = "https://baniwail.com/kpay/GetHandlerResponselive.php";
$ReqResponseUrl = "responseURL=" . $ResponseUrl;
$ErrorUrl = "https://baniwail.com/kpay/result.php";
$ReqErrorUrl = "errorURL=" . $ErrorUrl;
$ReqUdf1 = "udf1=Test3";
$ReqUdf2 = "udf2=Test3";
$ReqUdf3 = "udf3=Test3";
$ReqUdf4 = "udf4=Test4";
$ReqUdf5 = "udf5=Test5";
$param = $ReqTranportalId . "&" . $ReqTranportalPassword . "&" . $ReqAction . "&" . $ReqLangid . "&" . $ReqCurrency . "&" . $ReqAmount . "&" . $ReqResponseUrl . "&" . $ReqErrorUrl . "&" . $ReqTrackId . "&" . $ReqUdf1 . "&" . $ReqUdf2 . "&" . $ReqUdf3 . "&" . $ReqUdf4 . "&" . $ReqUdf5;

$termResourceKey = "FFP81EK36R3V7C21";
$param = encryptAES($param, $termResourceKey) . "&tranportalId=" . $TranportalId . "&responseURL=" . $ResponseUrl . "&errorURL=" . $ErrorUrl;

//header("Location: https://kpaytest.com.kw/kpg/PaymentHTTP.htm?param=paymentInit" . "&trandata=" . $param); /* send request and redirect to TEST */


//echo "https://www.kpay.com.kw/kpg/PaymentHTTP.htm?param=paymentInit"."&trandata=".$param;
header("Location: https://www.kpay.com.kw/kpg/PaymentHTTP.htm?param=paymentInit"."&trandata=".$param); /* send request and redirect to PRODUCTION */
exit();
function encryptAES($str, $key)
{
	$str = pkcs5_pad($str);
	$encrypted = openssl_encrypt($str, 'AES-128-CBC', $key, OPENSSL_ZERO_PADDING, $key);
	$encrypted = base64_decode($encrypted);
	$encrypted = unpack('C*', ($encrypted));
	$encrypted = byteArray2Hex($encrypted);
	$encrypted = urlencode($encrypted);
	return $encrypted;
}

function pkcs5_pad($text)
{
	$blocksize = 16;
	$pad = $blocksize - (strlen($text) % $blocksize);
	return $text . str_repeat(chr($pad), $pad);
}
function byteArray2Hex($byteArray)
{
	$chars = array_map("chr", $byteArray);
	$bin = join($chars);
	return bin2hex($bin);
}
