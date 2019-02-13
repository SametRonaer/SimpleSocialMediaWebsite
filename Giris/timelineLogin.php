<!DOCKTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset = "utf-8" >
<link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">

<style>


body { 
   font-family: 'Domine', serif;
    
}

.haber {
    height: auto;
    width: 45%;
    border: 1px solid black;
    margin-left: 25% ;
    border-radius: 15px;
}

#kayitOl , #girisYap{
    border-style: none;
    background-color: #da291c;
    height: 60px ;
    border-radius: 20px ;
   
   }
   
   .navbar a {
    color: white;
}

#option{
    height: 10%;
    width: 100%;
    background-color: white;
    color: rgba(28, 47, 74, 1);
    border-style: solid;
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
       
       <?php 

		session_start();

	if($_SESSION["email"] != null){
	//echo "dolu";
	//echo $_SESSION["isim"];
	
	echo "<li id = 'kayitOl' >  <a href='../Kayit/kayitOl.html'>"; 
	echo $_SESSION["isim"];
	echo"<img src = 'panda2.png'   width = '40' height='40' class = 'img-circle'> </a> </li> 
		 <li id = 'kayitOl' >  <a href='../Kayit/kayitOl.html'>  <img src = 'quit.png'   width = '30' height='30' class = 'img-circle'> </a>
				</li>
				
				" ;

	
	}else{
	
	echo '<li id = "kayitOl" ><a href="Kayit/kayitOl.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         
        <li id = "girisYap"><a href="Giris/giris.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li> ';
	
	
	}


	
		?>

       
      </ul>
		
		
	</div>
  </div>
</nav>    																					    <!-- Navbar Bitiyor-->

</font>




<br><br><br>



<div id = "option">

<div  class = "row">															
	<div class = "col-lg-2">  </div>
	<div class = "col-lg-3"> <h2 onclick="discoverFunction()" >  Discover </h2>  </div>
	<div class = "col-lg-3"> <h2 onclick="myFunction()" > Timeline  </h2> </div>
	<div class = "col-lg-3"> <h2> Likes <h2> </div>
</div>


</div>







<br><br><br><br>
<div id = "haberler">
<?php include 'veri22.php';?>
<div class="haber" >      
<img src="persona.jpg"  height="300px" width="100%" align = "center" style = "margin-top: 4px;">


<div class = "baslik" align = "center">
<h4>   Samet Ronaer     </h4>
</div>

<div id = "ozet">

</div>

<div class = "likes">
<img src="panda2.png"  height="70" width="90" style = "margin-left: 4%;">
Samet Ronaer
<img src="like.jpg"  onclick="myFunction()" height="70" width="90" style = "margin-left: 15%;">
like
<img src="dislike.jpg"  height="70" width="90" style = "margin-left: 4%;" >
dislike

</div>

</div>

</div>






</body>





























<script>

function myFunction(){
document.getElementById("haberler").innerHTML = "Paragraph changed!";
}

function discoverFunction(){

document.getElementById("haberler").innerHTML = "<?php include 'veri2.php';?>";

}



</script>



















</html>

