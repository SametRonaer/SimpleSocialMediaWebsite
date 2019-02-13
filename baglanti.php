<?php
	
	
	$baglanti = mysql_connect('localhost','samet','1234');

echo	"merhaba<br>";
if (!$baglanti) { 								//veri tabanı baglanti
	echo "Bağlantı kurulamiyor.<hr>";
    die('Hata: ' . mysql_connect_error()); 
}else{
	echo "Bağlantı kuruldu.<hr>";
}
		   	
	 	
	$db = @mysql_select_db("websitesideneme", $baglanti)  or
	 	    die("mySQL sunucusuna bağlanmada bir sorunla karşılaşıldı. Bunun nedeni sitemizde bakım çalışması olabilir. Lütfen daha sonra tekrar deneyiniz.");  
?>