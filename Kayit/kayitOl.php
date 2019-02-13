 <?php


include 'baglanti.php';


echo $_POST['name']; 
$isim = $_POST['name'];
$soyisim = $_POST['surname'];
$email = $_POST['email'];
$sifre = $_POST['password'];
$sifre2 = $_POST['password2'];
$no = 4;
echo $isim ;
echo $soyisim;
echo $email ;
echo $sifre ;
echo $sifre2;






$begeniler = array();
$begenilerEncoded = json_encode($begeniler);

$takipler = array();
$takiplerEncoded = json_encode($begeniler);














 $ekle        =    mysql_query("insert into kullanicilar (isim, soyisim , email , sifre  ,begeniler , takipler ) 
 								values ('$isim','$soyisim' , '$email' , '$sifre' ,  '$begenilerEncoded' , '$takiplerEncoded'   )");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
     

echo '<meta HTTP-EQUIV="REFRESH" content="0; url=../Giris/giris.html">';




            
?>