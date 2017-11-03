<style type="text/css">
*{
  margin: 0;
  padding: 0;
}

html,
body {
  height: 100%;
}

body {
  background-color: #081F29;
  font-family: 'Open Sans', sans-serif;
}

.content span {
  display: block;
  margin-top: 20px;
  text-align: center;
  color: rgba(255, 255, 255, 0.5);
  font-size: 1.2em;
}
.header {
  width: 100%;
  height: 200px;
  background-color: #0E3448;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
}

.menu {
  width: 100%;
  height: 70px;
  background-color: #1C6084;
  text-align: center;
  padding: 18px 0;
  box-sizing: border-box;
}

.menu input[type=text] {
  padding: 10px 15px;
  width: 400px;
  border: 0;
  border-radius: 5px;
  background-color: rgba(0, 0, 0, 0.4);
  color: rgba(255, 255, 255, 0.7);
  text-align: center;
}

.menu input[type=submit] {
  padding: 10px 15px;
  border: 0;
  border-radius: 5px;
  margin-left: 10px;
}

.menu input[type=text]:focus {
  outline: 0;
}

.result {
  width: 530px;
  height: 300px;
  margin: 20px auto;
  box-shadow: inset 0 20px 20px -20px rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  padding: 10px 15px;
  text-align: center;
  overflow: auto;
  color: rgba(255, 255, 255, 0.4);
}
a:link {
    color: white;
}

a:visited {
    color: white;
}

a:hover {
    color: white;
}

a:active {
    color: white;
}

</style>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">

<?php
		echo '<div align=center><a href="https://github.com/joaqhoc/"><i class="fa fa-github fa-5x"></i></a> ';
		echo ' <a href="http://main-index.vzpla.net/"><i class="fa fa-globe fa-5x"></i></a> ';
		echo ' <a href="https://www.facebook.com/joaquincentu"><i class="fa fa-facebook-official fa-5x"></i></a> ';
		echo ' <a href="https://twitter.com/joaqho"><i class="fa fa-twitter fa-5x"></i></a> ';
		echo ' <a href="https://www.paypal.me/joaqhoc"><i class="fa fa-heart fa-5x"></i></a> ';
        echo'<div class="content"><div class="header"><title>Identificar HASH</title></div><div class="menu">';
		echo'<form name="hash" method="post" action="">';
		echo'<input type="text" name="key" placeholder="Hash">';
		echo'<input type="submit" name="scan" value="Identificar"></form></div>';


	if (isset($_POST['scan']))

	{

		$hash = $_POST['key'];

		$hashes = array( "102020"=>"ADLER-32", "102040"=>"CRC-32", "102060"=>"CRC-32B", "101020"=>"CRC-16", "101040"=>"CRC-16-CCITT", "104020"=>"DES(Unix)", "101060"=>"FCS-16", "103040"=>"GHash-32-3", "103020"=>"GHash-32-5", "115060"=>"GOST R 34.11-94", "109100"=>"Haval-160", "109200"=>"Haval-160(HMAC)", "110040"=>"Haval-192", "110080"=>"Haval-192(HMAC)", "114040"=>"Haval-224", "114080"=>"Haval-224(HMAC)", "115040"=>"Haval-256", "115140"=>"Haval-256(HMAC)", "107080"=>"Lineage II C4", "106025"=>"Domain Cached Credentials - MD4(MD4((pass)).(strtolower(username)))", "102080"=>"XOR-32", "105060"=>"MD5(Half)", "105040"=>"MD5(Middle)", "105020"=>"MySQL", "107040"=>"MD5(phpBB3)", "107060"=>"MD5(Unix)", "107020"=>"MD5(Wordpress)", "108020"=>"MD5(APR)", "106160"=>"Haval-128", "106165"=>"Haval-128(HMAC)", "106060"=>"MD2", "106120"=>"MD2(HMAC)", "106040"=>"MD4", "106100"=>"MD4(HMAC)", "106020"=>"MD5", "106080"=>"MD5(HMAC)", "106140"=>"MD5(HMAC(Wordpress))", "106029"=>"NTLM", "106027"=>"RAdmin v2.x", "106180"=>"RipeMD-128", "106185"=>"RipeMD-128(HMAC)", "106200"=>"SNEFRU-128", "106205"=>"SNEFRU-128(HMAC)", "106220"=>"Tiger-128", "106225"=>"Tiger-128(HMAC)", "106240"=>"md5(pass.salt)", "106260"=>"md5(salt.'-'.md5(pass))", "106280"=>"md5(salt.pass)", "106300"=>"md5(salt.pass.salt)", "106320"=>"md5(salt.pass.username)", "106340"=>"md5(salt.md5(pass))", "106360"=>"md5(salt.md5(pass).salt)", "106380"=>"md5(salt.md5(pass.salt))", "106400"=>"md5(salt.md5(salt.pass))", "106420"=>"md5(salt.md5(md5(pass).salt))", "106440"=>"md5(username.0.pass)", "106460"=>"md5(username.LF.pass)", "106480"=>"md5(username.md5(pass).salt)", "106500"=>"md5(md5(pass))", "106520"=>"md5(md5(pass).salt)", "106540"=>"md5(md5(pass).md5(salt))", "106560"=>"md5(md5(salt).pass)", "106580"=>"md5(md5(salt).md5(pass))", "106600"=>"md5(md5(username.pass).salt)", "106620"=>"md5(md5(md5(pass)))", "106640"=>"md5(md5(md5(md5(pass))))", "106660"=>"md5(md5(md5(md5(md5(pass)))))", "106680"=>"md5(sha1(pass))", "106700"=>"md5(sha1(md5(pass)))", "106720"=>"md5(sha1(md5(sha1(pass))))", "106740"=>"md5(strtoupper(md5(pass)))", "109040"=>"MySQL5 - SHA-1(SHA-1(pass))", "109060"=>"MySQL 160bit - SHA-1(SHA-1(pass))", "109180"=>"RipeMD-160(HMAC)", "109120"=>"RipeMD-160", "109020"=>"SHA-1", "109140"=>"SHA-1(HMAC)", "109220"=>"SHA-1(MaNGOS)", "109240"=>"SHA-1(MaNGOS2)", "109080"=>"Tiger-160", "109160"=>"Tiger-160(HMAC)", "109260"=>"sha1(pass.salt)", "109280"=>"sha1(salt.pass)", "109300"=>"sha1(salt.md5(pass))", "109320"=>"sha1(salt.md5(pass).salt)", "109340"=>"sha1(salt.sha1(pass))", "109360"=>"sha1(salt.sha1(salt.sha1(pass)))", "109380"=>"sha1(username.pass)", "109400"=>"sha1(username.pass.salt)", "1094202"=>"sha1(md5(pass))", "109440"=>"sha1(md5(pass).salt)", "109460"=>"sha1(md5(sha1(pass)))", "109480"=>"sha1(sha1(pass))", "109500"=>"sha1(sha1(pass).salt)", "109520"=>"sha1(sha1(pass).substr(pass,0,3))", "109540"=>"sha1(sha1(salt.pass))", "109560"=>"sha1(sha1(sha1(pass)))", "109580"=>"sha1(strtolower(username).pass)", "110020"=>"Tiger-192", "110060"=>"Tiger-192(HMAC)", "112020"=>"md5(pass.salt) - Joomla", "113020"=>"SHA-1(Django)", "114020"=>"SHA-224", "114060"=>"SHA-224(HMAC)", "115080"=>"RipeMD-256", "115160"=>"RipeMD-256(HMAC)", "115100"=>"SNEFRU-256", "115180"=>"SNEFRU-256(HMAC)", "115200"=>"SHA-256(md5(pass))", "115220"=>"SHA-256(sha1(pass))", "115020"=>"SHA-256", "115120"=>"SHA-256(HMAC)", "116020"=>"md5(pass.salt) - Joomla", "116040"=>"SAM - (LM_hash:NT_hash)", "117020"=>"SHA-256(Django)", "118020"=>"RipeMD-320", "118040"=>"RipeMD-320(HMAC)", "119020"=>"SHA-384", "119040"=>"SHA-384(HMAC)", "120020"=>"SHA-256", "121020"=>"SHA-384(Django)", "122020"=>"SHA-512", "122060"=>"SHA-512(HMAC)", "122040"=>"Whirlpool", "122080"=>"Whirlpool(HMAC)"); 

        $checks = array();

         $hs="4607";

    if (strlen($hash)==strlen($hs) && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	   array_push($checks, "101020");

    }

        $hs="3d08";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	 array_push($checks, "101040");

    }

        $hs="0e5b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "101060");

	}

	    $hs="b33fd057";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "102040");

	}

	    $hs="0607cb42";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "102020");

	}

	    $hs="b764a0d9";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "102060");

	}

	    $hs="0000003f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "102080");

	}

		    $hs="80000000";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==true && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "103040");

	}

		    $hs="85318985";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==true && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "103020");

	}

		    $hs="ZiY8YtDKXJwYQ";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false)

	{

	array_push($checks, "104020");

	}

	

		    $hs="ae11fd697ec92c7c";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "105060");

	}

	    $hs="7ec92c7c98de3fac";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "105040");

	}

	    $hs="63cea4673fd25f46";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "105020");

	}

	  $hs="f42005ec1afe77967cbc83dce1b4d714";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106025");

	}

		  $hs="d6e3ec49aa0f138a619f27609022df10";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106160");

	}

		  $hs="3ce8b0ffd75bc240fc7d967729cd6637";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106165");

	}

		  $hs="08bbef4754d98806c373f2cd7d9a43c4";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106060");

	}

			  $hs="4b61b72ead2b0eb0fa3b8a56556a6dca";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106120");

	}

		  $hs="a2acde400e61410e79dacbdfc3413151";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106040");

	}

	  $hs="6be20b66f2211fe937294c1c95d1cd4f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106100");

	}

	  $hs="ae11fd697ec92c7c98de3fac23aba525";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106020");

	}

	 $hs="d57e43d2c7e397bf788f66541d6fdef9";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106080");

	}

	 $hs="3f47886719268dfa83468630948228f6";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106140");

	}

	 $hs="cc348bace876ea440a28ddaeb9fd3550";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106029");

	}

	 $hs="baea31c728cbf0cd548476aa687add4b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106027");

	}

	 $hs="4985351cd74aff0abc5a75a0c8a54115";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106180");

	}

		 $hs="ae1995b931cf4cbcf1ac6fbf1a83d1d3";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106185");

	}

			 $hs="4fb58702b617ac4f7ca87ec77b93da8a";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106200");

	}

			 $hs="59b2b9dcc7a9a7d089cecf1b83520350";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106205");

	}

			 $hs="c086184486ec6388ff81ec9f23528727";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106220");

	}

		 $hs="c87032009e7c4b2ea27eb6f99723454b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106225");

	}

			 $hs="5634cc3b922578434d6e9342ff5913f7";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106240");

	}

				 $hs="245c5763b95ba42d4b02d44bbcd916f1";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106260");

	}

			 $hs="22cc5ce1a1ef747cd3fa06106c148dfa";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106280");

	}

				 $hs="469e9cdcaff745460595a7a386c4db0c";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106300");

	}

			 $hs="9ae20f88189f6e3a62711608ddb6f5fd";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106320");

	}

		 $hs="aca2a052962b2564027ee62933d2382f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106340");

	}

		 $hs="de0237dc03a8efdf6552fbe7788b2fdd";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106360");

	}

		 $hs="5b8b12ca69d3e7b2a3e2308e7bef3e6f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106380");

	}

		 $hs="d8f3b3f004d387086aae24326b575b23";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106400");

	}

			 $hs="81f181454e23319779b03d74d062b1a2";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106420");

	}

			 $hs="e44a60f8f2106492ae16581c91edb3ba";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106440");

	}

			 $hs="654741780db415732eaee12b1b909119";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106460");

	}

			 $hs="954ac5505fd1843bbb97d1b2cda0b98f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106480");

	}

			 $hs="a96103d267d024583d5565436e52dfb3";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106500");

	}

				 $hs="5848c73c2482d3c2c7b6af134ed8dd89";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106520");

	}

					 $hs="8dc71ef37197b2edba02d48c30217b32";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106540");

	}

					 $hs="9032fabd905e273b9ceb1e124631bd67";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106560");

	}

				 $hs="8966f37dbb4aca377a71a9d3d09cd1ac";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106580");

	}

	 $hs="4319a3befce729b34c3105dbc29d0c40";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106600");

	}

	 $hs="ea086739755920e732d0f4d8c1b6ad8d";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106620");

	}

	$hs="02528c1f2ed8ac7d83fe76f3cf1c133f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106640");

	}

	$hs="4548d2c062933dff53928fd4ae427fc0";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106660");

	}

	$hs="cb4ebaaedfd536d965c452d9569a6b1e";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106680");

	}

		$hs="099b8a59795e07c334a696a10c0ebce0";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106700");

	}

		$hs="06e4af76833da7cc138d90602ef80070";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106720");

	}

	$hs="519de146f1a658ab5e5e2aa9b7d2eec8";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "106740");

	}

	$hs="0x49a57f66bd3d5ba6abda5579c264a0e4";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true && $hash[0] == '0' && $hash[1] == 'x')

	{

	array_push($checks, "107080");

	}

	$hs="\$H\$9kyOtE8CDqMJ44yfn9PFz2E.L2oVzL1";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[0] == "$" && $hash[1] == 'H' && $hash[2] == "$")

	{

	array_push($checks, "107040");

	}

		$hs="\$1\$cTuJH0Ju$1J8rI.mJReeMvpKUZbSlY/";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[0] == "$" && $hash[1] == '1' && $hash[2] == "$")

	{

	array_push($checks, "107060");

	}

		$hs="\$P\$BiTOhOj3ukMgCci2juN0HRbCdDRqeh.";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[0] == "$" && $hash[1] == 'P' && $hash[2] == "$")

	{

	array_push($checks, "107020");

	}

		$hs="\$apr1\$qAUKoKlG\$3LuCncByN76eLxZAh/Ldr1";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[0] == "$" && $hash[1] == 'a' && $hash[2] == "p" && $hash[3] == "r")

	{

	array_push($checks, "108020");

	}

		$hs="a106e921284dd69dad06192a4411ec32fce83dbb";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109100");

	}

			$hs="29206f83edc1d6c3f680ff11276ec20642881243";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109200");

	}

				$hs="9bb2fb57063821c762cc009f7584ddae9da431ff";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109040");

	}

				$hs="*2470c0c06dee42fd1618bb99005adca2ec9d1e19";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[0] == "*")

	{

	array_push($checks, "109060");

	}

				$hs="dc65552812c66997ea7320ddfb51f5625d74721b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109120");

	}

				$hs="ca28af47653b4f21e96c1235984cb50229331359";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109180");

	}

			$hs="4a1d4dbc1e193ec3ab2e9213876ceb8f4db72333";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109020");

	}

		$hs="6f5daac3fee96ba1382a09b1ba326ca73dccf9e7";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109140");

	}

	$hs="a2c0cdb6d1ebd1b9f85c6e25e0f8732e88f02f96";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109220");

	}

	$hs="644a29679136e09d0bd99dfd9e8c5be84108b5fd";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109240");

	}

	$hs="c086184486ec6388ff81ec9f235287270429b225";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109080");

	}

		$hs="6603161719da5e56e1866e4f61f79496334e6a10";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109160");

	}

		$hs="f006a1863663c21c541c8d600355abfeeaadb5e4";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109260");

	}

		$hs="299c3d65a0dcab1fc38421783d64d0ecf4113448";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109280");

	}

		$hs="860465ede0625deebb4fbbedcb0db9dc65faec30";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109300");

	}

		$hs="6716d047c98c25a9c2cc54ee6134c73e6315a0ff";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109320");

	}

		$hs="58714327f9407097c64032a2fd5bff3a260cb85f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109340");

	}

		$hs="cc600a2903130c945aa178396910135cc7f93c63";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109360");

	}

		$hs="3de3d8093bf04b8eb5f595bc2da3f37358522c9f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109380");

	}

		$hs="00025111b3c4d0ac1635558ce2393f77e94770c5";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109400");

	}

		$hs="fa960056c0dea57de94776d3759fb555a15cae87";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "1094202");

	}

		$hs="1dad2b71432d83312e61d25aeb627593295bcc9a";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109440");

	}

			$hs="8bceaeed74c17571c15cdb9494e992db3c263695";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109460");

	}

			$hs="3109b810188fcde0900f9907d2ebcaa10277d10e";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109480");

	}

		$hs="780d43fa11693b61875321b6b54905ee488d7760";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109500");

	}

		$hs="5ed6bc680b59c580db4a38df307bd4621759324e";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109520");

	}

			$hs="70506bac605485b4143ca114cbd4a3580d76a413";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109540");

	}

			$hs="3328ee2a3b4bf41805bd6aab8e894a992fa91549";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109560");

	}

	$hs="79f575543061e158c2da3799f999eb7c95261f07";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "109580");

	}

	$hs="cd3a90a3bebd3fa6b6797eba5dab8441f16a7dfa96c6e641";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "110040");

	}

	$hs="39b4d8ecf70534e2fd86bb04a877d01dbf9387e640366029";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "110080");

	}

		$hs="c086184486ec6388ff81ec9f235287270429b2253b248a70";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "110020");

	}

	$hs="8e914bb64353d4d29ab680e693272d0bd38023afa3943a41";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "110060");

	}

	$hs="35d1c0d69a2df62be2df13b087343dc9:BeKMviAfcXeTPTlX";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[32] == ":")

	{

	array_push($checks, "112020");

	}

	$hs="sha1\$Zion3R\$299c3d65a0dcab1fc38421783d64d0ecf4113448";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && strncmp($hash,'sha1$',5) == 0)

	{

	array_push($checks, "113020");

	}

	$hs="f65d3c0ef6c56f4c74ea884815414c24dbf0195635b550f47eac651a";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "114040");

	}

	$hs="f10de2518a9f7aed5cf09b455112114d18487f0c894e349c3c76a681";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "114080");

	}

	$hs="e301f414993d5ec2bd1d780688d37fe41512f8b57f6923d054ef8e59";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "114020");

	}

		$hs="c15ff86a859892b5e95cdfd50af17d05268824a6c9caaa54e4bf1514";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "114060");

	}

	$hs="2c740d20dab7f14ec30510a11f8fd78b82bc3a711abe8a993acdb323e78e6d5e";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115020");

	}

		$hs="d3dd251b7668b8b6c12e639c681e88f2c9b81105ef41caccb25fcde7673a1132";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115120");

	}

		$hs="7169ecae19a5cd729f6e9574228b8b3c91699175324e6222dec569d4281d4a4a";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115040");

	}

		$hs="6aa856a2cfd349fb4ee781749d2d92a1ba2d38866e337a4a1db907654d4d4d7a";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115140");

	}

	$hs="ab709d384cce5fda0793becd3da0cb6a926c86a8f3460efb471adddee1c63793";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115060");

	}

		$hs="5fcbe06df20ce8ee16e92542e591bdea706fbdc2442aecbf42c223f4461a12af";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115080");

	}

			$hs="43227322be1b8d743e004c628e0042184f1288f27c13155412f08beeee0e54bf";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115160");

	}

			$hs="3a654de48e8d6b669258b2d33fe6fb179356083eed6ff67e27c5ebfa4d9732bb";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115100");

	}

			$hs="4e9418436e301a488f675c9508a2d518d8f8f99e966136f2dd7e308b194d74f9";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115180");

	}

			$hs="b419557099cfa18a86d1d693e2b3b3e979e7a5aba361d9c4ec585a1a70c7bde4";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115200");

	}

		$hs="afbed6e0c79338dbfe0000efe6b8e74e3b7121fe73c383ae22f5b505cb39c886";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "115220");

	}

	$hs="fb33e01e4f8787dc8beb93dac4107209:fxJUXVjYRafVauT77Cze8XwFrWaeAYB2";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && $hash[32] == ':')

	{

	array_push($checks, "116020");

	}

		$hs="4318B176C3D8E3DEAAD3B435B51404EE:B7C899154197E8A2A33121D76A240AB5";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && ctype_lower($hash) == false && $hash[32] == ':')

	{

	array_push($checks, "116040");

	}

	$hs="sha256\$Zion3R\$9e1a08aa28a22dfff722fad7517bae68a55444bb5e2f909d340767cec9acf2c3";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && strncmp($hash,'sha256',6) == 0)

	{

	array_push($checks, "117020");

	}

	$hs="b4f7c8993a389eac4f421b9b3b2bfb3a241d05949324a8dab1286069a18de69aaf5ecc3c2009d8ef";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "118020");

	}

	$hs="244516688f8ad7dd625836c0d0bfc3a888854f7c0161f01de81351f61e98807dcd55b39ffe5d7a78";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "118040");

	}

		$hs="3b21c44f8d830fa55ee9328a7713c6aad548fe6d7a4a438723a0da67c48c485220081a2fbc3e8c17fd9bd65f8d4b4e6b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "119020");

	}

	$hs="bef0dd791e814d28b4115eb6924a10beb53da47d463171fe8e63f68207521a4171219bb91d0580bca37b0f96fddeeb8b";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "119040");

	}

		$hs="\$6\$g4TpUQzk\$OmsZBJFwvy6MwZckPvVYfDnwsgktm2CckOlNJGy9HNwHSuHFvywGIuwkJ6Bjn3kKbB6zoyEjIYNMpHWBNxJ6g.";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && strncmp($hash,'$6$',3) == 0)

	{

	array_push($checks, "120020");

	}

		$hs="sha384\$Zion3R$88cfd5bc332a4af9f09aa33a1593f24eddc01de00b84395765193c3887f4deac46dc723ac14ddeb4d3a9b958816b7bba";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==false && strncmp($hash,'sha384',6) == 0)

	{

	array_push($checks, "121020");

	}

	$hs="ea8e6f0935b34e2e6573b89c0856c81b831ef2cadfdee9f44eb9aa0955155ba5e8dd97f85c73f030666846773c91404fb0e12fb38936c56f8cf38a33ac89a24e";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "122020");

	}

    	$hs="dd0ada8693250b31d9f44f3ec2d4a106003a6ce67eaa92e384b356d1b4ef6d66a818d47c1f3a2c6e8a9a9b9bdbd28d485e06161ccd0f528c8bbb5541c3fef36f";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "122060");

	}

		$hs="76df96157e632410998ad7f823d82930f79a96578acc8ac5ce1bfc34346cf64b4610aefa8a549da3f0c1da36dad314927cebf8ca6f3fcd0649d363c5a370dddb";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "122040");

	}

	$hs="77996016cf6111e97d6ad31484bab1bf7de7b7ee64aebbc243e650a75a2f9256cef104e504d3cf29405888fca5a231fcac85d36cd614b1d52fce850b53ddf7f9";

    if (strlen($hash)==strlen($hs) && ctype_digit($hash)==false && ctype_alpha($hash)==false && ctype_alnum($hash)==true)

	{

	array_push($checks, "122080");

	}

	//
  echo'<span>'; print($hash); echo'</span>';
  echo'<div class="result">';
	$amount = count($checks);
    if ($amount == 0) {
      echo'<p>';
      print "Hash no encontrado!";
	  echo'</p>';
    } else if(count($checks) > 2) {
       sort($checks);
      	echo'<p>';
        print ($hashes[$checks[0]]);
	  	echo'</p>';
      	echo'<p>';
        print ($hashes[$checks[1]]);
	  	echo'</p>'; 

        for( $i = 0, $max = count($checks)-2; $i < $max; $i++) {
      		echo'<p>';
			print ($hashes[$checks[$i+2]]);
	  		echo'</p>'; 
        }
    } else {
        sort($checks);
        for( $i = 0, $max = count($checks); $i < $max; $i++) {
      		echo'<p>';
		  	print ($hashes[$checks[$i]]);

	  		echo'</p>'; 
        }

    }

	}
