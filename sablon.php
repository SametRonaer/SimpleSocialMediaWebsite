
<!DOCTYPE>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset = "utf-8" >
<link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
<style>

.nav > li > a:focus, 
.nav > li > a:hover 
{
    text-decoration: underline;
    background-color: #da291c;
    border-style: solid;
    border-radius: 20px ;
}

body { 
    color: white;
   font-family: 'Domine', serif;
   background-image: url("haberBack.jpg");
    background-size: 100% 100%; ;
    
}
	 .navbar a {
    color: white;
}


 #kayitOl , #girisYap{
    border-style: none;
    background-color: #da291c;
    height: 60px ;
    border-radius: 20px ;
   
   }

#metin{

height: 60px ;
width: 60% ;
}

</style>
</head>
<body>


<font style = "font-size: 20px;"  >


<nav class="navbar navbar-fixed-top " data-spy="affix" data-offset-top="600" style = " background: rgba(28, 47, 74, 1); z-index: 1000; "  >	 <!-- Navbar Başlıyor -->
  <div class="container-fluid">
   
	<div>
		<ul class = "nav  navbar-nav ">
		<a href="../index.html" class="pull-left"> <img src="Logo.png" style = "margin-left: 40px;  margin-right: 240px;" width = "160" height="60"></a> 
			<li><a href ="index.html"> Art </a> </li>  
			<li><a href ="#"> Science </a> </li>  
			<li><a href ="#"> Sport </a> </li>
			<li><a href ="#"> Cinema </a> </li> 
			<li><a href ="../Tarot/tarot.html"> Tarot </a> </li>
			<li><a href ="#"> Entertainmet </a> </li> 
			
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
        <li id = "kayitOl" ><a href="../Kayit/kayitOl.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
        <li id = "girisYap"><a href="../Giris/giris.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
      </ul>
		
		
	</div>
  </div>
</nav>    																					    <!-- Navbar Bitiyor-->

</font>





<?php 

	include 'baglanti.php';

	 $profil = $_GET["name"] ;
 	//echo $profil ;
	//echo $_GET["name2"];
          
     
	$sql="SELECT * FROM haberler";
	$sorgu=mysql_query($sql);
	while( $sonuc=mysql_fetch_assoc($sorgu)  ){
    
    if($sonuc["kullaniciId"]== $profil ){
   
    
    
    echo
    "<br><br><br><br>

       <div align = 'center'>
       <br><br><br><br>
       <font size = 40>";
       echo $sonuc["baslik"];
       echo " </font>";
    
    echo "<br><br> <img src = ' ";
    echo $sonuc["haberFoto"];
    
    echo " 'width = '50%' height='60%'  >" ;
    
    echo "<br><br> <div id = 'metin' ><h4 > ";
	echo $sonuc["yazi"];
	echo"</h4><br><br></div></div>";
    
    }

}









?>































<br><br><br>
</body>
</html>