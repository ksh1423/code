<?
//ini_set("session.cookie_domain", ".urban114.com"); 
//session_regenerate_id(); z
@header('P3P: CP="ALL CURa ADMa DEVa TAIa OUR BUS IND PHY ONL UNI PUR FIN COM NAV INT DEM CNT STA POL HEA PRE LOC OTC"');
@session_start();


mysql_connect('localhost', 'urban114', 'lena47') or die(mysql_error());
mysql_select_db('urban114') or die(mysql_error());

//mysql_query("set names utf8");
//*
if($_MMMMM == "LOGOUT"){
	setcookie("COOKIE_U_I", "", time()+60*60*24, "/");
	setcookie("COOKIE_U_D", "", time()+60*60*24, "/");
}else if($_MMMMM == "LOGIN"){
	setcookie("COOKIE_U_I", $_SESSION["GOOD_SHOP_USERID"], time()+60*60*24, "/");
	setcookie("COOKIE_U_D", $_SESSION["GOOD_SHOP_PASSWD"], time()+60*60*24, "/");
}else if($_COOKIE["COOKIE_U_I"] && $_COOKIE["COOKIE_U_D"]){
	$_is_cookie_value_correct = mysql_fetch_array(mysql_query("select * from member WHERE userid = '" . $_COOKIE["COOKIE_U_I"] . "' && pwd = MD5('" . $_COOKIE["COOKIE_U_D"] . "')"));
	if($_is_cookie_value_correct)	{
		$_SESSION["GOOD_SHOP_USERID"] = $_COOKIE["COOKIE_U_I"];
		$_SESSION["GOOD_SHOP_PASSWD"] = $_COOKIE["COOKIE_U_D"];
	}
}
$_MMMMM = "";

if ( $_COOKIE["member_rand_id"] == "" ) {
	$SSSSSID = strtolower(substr(crypt(time()), 0, 10));;
	setcookie("member_rand_id", $SSSSSID , time()+60*60*24*30 , "/"  );
}

 function userAgent($ua){ 

		$iphone = strstr(strtolower($ua), 'mobile'); //Search for 'mobile' in user-agent (iPhone have that) 
		$android = strstr(strtolower($ua), 'android'); //Search for 'android' in user-agent 
		$windowsPhone = strstr(strtolower($ua), 'phone'); //Search for 'phone' in user-agent (Windows Phone uses that) 
		 
		 
		function androidTablet($ua){ //Find out if it is a tablet 
			if(strstr(strtolower($ua), 'android') ){//Search for android in user-agent 
				if(!strstr(strtolower($ua), 'mobile')){ //If there is no ''mobile' in user-agent (Android have that on their phones, but not tablets) 
					return true; 
				} 
			} 
		} 
		$androidTablet = androidTablet($ua); //Do androidTablet function 
		$ipad = strstr(strtolower($ua), 'ipad'); //Search for iPad in user-agent 
		 
		if($androidTablet || $ipad){ //If it's a tablet (iPad / Android) 
			return 'tablet'; 
		} 
		elseif($iphone && !$ipad || $android && !$androidTablet || $windowsPhone){ //If it's a phone and NOT a tablet 
			return 'mobile'; 
		} 
		else{ //If it's not a mobile device 
			return 'desktop'; 
		}     
	}

//*/
?>
