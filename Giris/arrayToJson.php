<?php


include 'baglanti.php';






/*$example = array(1, 2, 3);
$exampleEncoded = json_encode($example);
$ekle        =    mysql_query("insert into kullanicilar (isim  ) values ('$exampleEncoded' )");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
*/


	$sql="SELECT * FROM kullanicilar";
	$sorgu=mysql_query($sql);
	while( $sonuc=mysql_fetch_assoc($sorgu)  ){
    //echo $sonuc["isim"]; 
    if(($sonuc["no"]== 6)  ){
    echo "Evet" ;
    $example = json_decode($sonuc['isim'], true);
    echo $example[2];
    }else{
    echo "Hayır";
    }
}


            
?>