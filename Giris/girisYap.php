 <?php


include 'baglanti.php';

$email = $_POST['email'];
$sifre = $_POST['password'];

echo $email ;
echo $sifre ;
$yanlis = "";
$dogru = 0;
	$sql="SELECT * FROM kullanicilar";
	$sorgu=mysql_query($sql);
	while( $sonuc=mysql_fetch_assoc($sorgu)  ){
    //echo $sonuc["isim"]; 
    if(($sonuc["sifre"]== $sifre) && ($sonuc["email"]== $email) ){
    //echo "Evet" ;
  

session_start();
$_SESSION["email"] = $email ;
$_SESSION["isim"] = $sonuc["isim"] ;




    
    
   echo'<meta HTTP-EQUIV="REFRESH" content="0; url=../../okul_deneme/timeline.php">';
   $dogru = 1 ;
    
    }
   
   
    
}


	if($dogru==0){
	echo '<meta HTTP-EQUIV="REFRESH" content="0; url=giris.html">';
	}
//echo '<meta HTTP-EQUIV="REFRESH" content="0; url=giris.html">';
//echo $dogru;


?>