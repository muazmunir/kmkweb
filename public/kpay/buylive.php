<?php 
$total=$_GET['data'];



$price = $total;

$TranAmount = $price;

$TranTrackid = mt_rand();

$TranportalId = "205801";
$ReqTranportalId = "id=" . $TranportalId;
$ReqTranportalPassword = "password=edTBPG8g";
$ReqAmount = "amt=" . $TranAmount;
$ReqTrackId = "trackid=" . $TranTrackid;
$ReqCurrency = "currencycode=414";
$ReqLangid = "langid=USA";
$ReqAction = "action=1";
$ResponseUrl = "https://www.anazah.org/kPay/GetHandlerResponse.php";
$ReqResponseUrl = "responseURL=" . $ResponseUrl;
$ErrorUrl = "https://www.anazah.org/kPay/result.php";
$ReqErrorUrl = "errorURL=" . $ErrorUrl;
$ReqUdf1 = "udf1=Test1";
$ReqUdf2 = "udf2=Test2";
$ReqUdf3 = "udf3=Test3";
$ReqUdf4 = "udf4=Test4";
$ReqUdf5 = "udf5=Test5";
$param = $ReqTranportalId . "&" . $ReqTranportalPassword . "&" . $ReqAction . "&" . $ReqLangid . "&" . $ReqCurrency . "&" . $ReqAmount . "&" . $ReqResponseUrl . "&" . $ReqErrorUrl . "&" . $ReqTrackId . "&" . $ReqUdf1 . "&" . $ReqUdf2 . "&" . $ReqUdf3 . "&" . $ReqUdf4 . "&" . $ReqUdf5;

$termResourceKey = "2BD2CG6786X8Y3GU";
$param = encryptAES($param, $termResourceKey) . "&tranportalId=" . $TranportalId . "&responseURL=" . $ResponseUrl . "&errorURL=" . $ErrorUrl;

//header("Location: https://kpaytest.com.kw/kpg/PaymentHTTP.htm?param=paymentInit" . "&trandata=" . $param); /* send request and redirect to TEST */
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
