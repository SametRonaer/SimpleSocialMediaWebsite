<!DOCKTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset = "utf-8" >
<link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">



<script>
function bigImg(x) {
    x.style.height = "105%";
    x.style.width = "105%";
    x.style.opacity = "0.7";
    //x.style.-webkit-filter: grayscale(70%); 
   // x.style.filter: blur(40px);
}

function normalImg(x) {
    x.style.height = "100%";
    x.style.width = "100%";
    x.style.opacity = "1";
}



</script>




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
   font-family: 'Domine', serif;
   background-color: #000000;
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


	#firstRow{
	height: 50%;
    width: 100%;
    background-color: black;
    
    
}

	#secondRow{
	height: 50%;
    width: 100%;
    background-color: black;
    
    
}

	#thirdRow{
	height: 40%;
    width: 100%;
    background-color: black;
}

	


	#firstRow1{
	height: 100%;
    width: 100%;
    background-image: url("8/Sixers brass indicates its interest in LeBron James in free agency.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
   
}


	#firstRow2{
	height: 100%;
    width: 100%;
    background-image: url("10/Eastern Conference Finals pits Brad vs. Bron in a battle of wits.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
    
}

	#firstRow3{
	height: 100%;
    width: 100%;
    background-image: url("3/ATHLETES NEED BREATHABLE AIR FOR PEAK PERFORMANCE.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
    
}


	#secondRow1{
	height: 100%;
    width: 100%;
    background-image: url("2/PENNY OLEKSIAK, MOLLY HANNIS ADDED TO ATLANTA SWIM CLASSIC ENTRIES.jpg");
    background-size: 100% 100%;
    color:white;
    border-radius: 20px ;
    
}

	#secondRow2{
	height: 100%;
    width: 100%;
    color: black;
    background-image: url("4/SYRKIN, KOUSTIK BREAK MEET RECORDS AT CIF-SS DIVISION 2 FINALS.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    
}

	#thirdRow1{
	height: 100%;
    width: 100%;
    background-image: url("5/Hughie Fury outclasses Sam Sexton to win British heavyweight title .jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
    
}

	#thirdRow2{
	height: 100%;
    width: 100%;
    background-image: url("6/Here are the players who could possibly beat Rafael Nadal on clay.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
    
}

	#thirdRow3{
	height: 100%;
    width: 100%;
    background-image: url("7/Alexander Albon on pole for the 2018 F2 Feature Race in Spain.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;  
    color:white;  
}


	#thirdRow4{
	height: 100%;
    width: 100%;
    background-image: url("1/Russia sends 'proof' to WADA refuting doping claims.jpg");
    background-size: 100% 100%;
    border-radius: 20px ;
    color:white;
    
}
	a{
	color:white;
	}

</style>

</head>

<body>



<font style = "font-size: 20px;"  >


<nav class="navbar navbar-fixed-top " data-spy="affix" data-offset-top="600" style = " background: rgba(28, 47, 74, 1); z-index: 1000; "  >	 <!-- Navbar Başlıyor -->
  <div class="container-fluid">
   
	<div>
		<ul class = "nav  navbar-nav ">
		
			<a href="../index.php" class="pull-left"> <img src="Logo.png" style = "margin-left: 40px;  margin-right: 240px;" width = "160" height="60"></a> 
			<li><a href ="../art_contents/art.php"> Art </a> </li>  
			<li><a href ="../science_contents/science.php"> Science </a> </li>  
			<li><a href ="../sport_contents/sport.php"> Sport </a> </li>
			<li><a href ="../cinema_contents/cinema.php"> Cinema </a> </li> 
			<li><a href ="../Tarot/tarot.php"> Tarot </a> </li>
			<li><a href ="../game_contents/game.php"> Entertainmet </a> </li> 
			
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
       
          																					<!-- Login Tespit Basliyor-->

        
        
         <?php 																				
		session_start();

	if($_SESSION["email"] != null){
	//echo "dolu";
	//echo $_SESSION["isim"];
	
	echo "<li id = 'kayitOl' >  <a href='../../okul_deneme/timeline.php'>"; 
	echo $_SESSION["isim"];
	echo"<img src = 'panda2.png'   width = '40' height='40' class = 'img-circle'> </a> </li> 
		 <li id = 'kayitOl' >  <a href='../Kayit/kayitOl.html'>  <img src = 'quit.png'   width = '30' height='30' class = 'img-circle'> </a>
				</li>
				
				" ;

	
	}else{
	
	echo '<li id = "kayitOl" ><a href="../Kayit/kayitOl.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         
        <li id = "girisYap"><a href="../Giris/giris.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li> ';
	
	
	}


	
		?>

        
        																					<!-- Login Tespit Bitiiyor-->

       
      </ul>
		
		
	</div>
  </div>
</nav>    																					    <!-- Navbar Bitiyor-->

</font>






<font color= "white">

<br><br><br>

<div id = 'firstRow'> 

<div class = 'row'>
	
	<div class = 'col-lg-4'> 
	
	<a href="../../okul_deneme/sablon.php?name=30" > 
	<div id = 'firstRow1' onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>Sixers brass indicates its interest in LeBron James in free agency</h1>
	</div>
	</a>
	 </div> 
	
	
	<div class = 'col-lg-4'> 
	
	<a href="../../okul_deneme/sablon.php?name=32" > 
	<div id = 'firstRow2' onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>Eastern Conference Finals pits Brad vs. Bron in a battle of wits</h1>
	</div>
	</a>
	 </div>
	 
	 
	 <div class = 'col-lg-4'> 
	
	<a href="../../okul_deneme/sablon.php?name=25" > 
	<div id = 'firstRow3' onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>ATHLETES NEED BREATHABLE AIR FOR PEAK PERFORMANCE</h1>
	</div>
	
	 </div>
	</a>
	
</div>

</div>



<br>




<div id = "secondRow"> 


 <div class = "row">
	
	<div class = "col-lg-6"> 
	
	<a href="../../okul_deneme/sablon.php?name=24" > 
	<div id = "secondRow1" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>PENNY OLEKSIAK, MOLLY HANNIS ADDED TO ATLANTA SWIM CLASSIC ENTRIES</h1>
	</div>
	</a>
	 </div> 
	
	
	<div class = "col-lg-6"> 
	
	<a href="../../okul_deneme/sablon.php?name=26" > 
	<div id = "secondRow2" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1>SYRKIN, KOUSTIK BREAK MEET RECORDS AT CIF-SS DIVISION 2 FINALS</h1>
	</div>
	
	 </div>
	 
	 </a>
	
	 </div>
	
	
</div>



<br>


<div id = "thirdRow"> 


 <div class = "row">
	
	<div class = "col-lg-3"> 
	
	<a href="../../okul_deneme/sablon.php?name=28" > 
	<div id = "thirdRow1" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br>
	<h3>Hughie Fury outclasses Sam Sexton to win British heavyweight title </h3>
	</div>
	</a>
	 </div> 
	
	
	<div class = "col-lg-3"> 
	
	<a href="../../okul_deneme/sablon.php?name=27" > 
	<div id = "thirdRow2" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br>
	<h3>Here are the players who could possibly beat Rafael Nadal on clay</h3>
	</div>
	</a>
	 </div>
	 
	 <div class = "col-lg-3"> 
	
	<a href="../../okul_deneme/sablon.php?name=29" > 
	<div id = "thirdRow3" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br><br>
	<h3>Alexander Albon on pole for the 2018 F2 Feature Race in Spain</h3>
	</div>
	</a>
	 </div> 
	
	
	<div class = "col-lg-3"> 
	
	<a href="../../okul_deneme/sablon.php?name=23" > 
	<div id = "thirdRow4" onmouseover="bigImg(this)" onmouseout="normalImg(this)"> 
	<br><br><br><br><br><br><br><br><br><br>
	<h3>Russia sends 'proof' to WADA refuting doping claims</h3>
	</div>
	
	 </div>
	 
	</a>
	 </div>
	
	
</div>










</div>

	
	
</div>


</div>

</div>


</font>








</body>

</html>



