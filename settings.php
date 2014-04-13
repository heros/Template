<?php
	//Make sure to edit all of these settings below
	define('SVRNAME', 'Cool Server');
	define('OWNER', 'Your name'); //Or the community owners name
	define('SVRIP', '192.168.1.1'); //Your server's IP
	define('YEAR', '2014'); //This is just for the copyright, probably wont need to change it
	define('PASSWORDHASH', 'BLowE9E&zujN'); //Leave this alone

?>

<?php
	if(!defined('SQL_SERVER')) define('SQL_SERVER', 'localhost');

	if(!defined('SQL_USERNAME')) define('SQL_USERNAME', 'root');

	if(!defined('SQL_PASSWORD')) define('SQL_PASSWORD', 'PASS');

	if(!defined('SQL_DB')) define('SQL_DB', 'test');

	$con = mysql_connect(SQL_SERVER, SQL_USERNAME, SQL_PASSWORD);

	mysql_select_db(SQL_DB, $con);
	
	function convert($str,$ky='') //Credits to who ever made the convert function (Converting the hash)
{ 
	if($ky=='') return $str; 
	$ky=str_replace(chr(32),'',$ky); 
	if(strlen($ky)<8)exit('key error'); 
	$kl=strlen($ky)<32?strlen($ky):32; 
	$k=array();for($i=0;$i<$kl;$i++){ 
	$k[$i]=ord($ky{$i})&0x1F;} 
	$j=0;for($i=0;$i<strlen($str);$i++){ 
	$e=ord($str{$i}); 
	$str{$i}=$e&0xE0?chr($e^$k[$j]):chr($e); 
	$j++;$j=$j==$kl?0:$j;} 
	return $str; 
} 
	
	function getuser()//Credits to who ever made this function!
{
	$decrpt = convert(PASSWORDHASH);
	$str = explode("||", $decrpt);
	return;
}
?>

