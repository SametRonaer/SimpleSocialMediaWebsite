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
    background-color: black;
   font-family: 'Domine', serif;
    
}



	 .navbar a {
    color: white;
}

  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 0px;
  }
  
 .container {
    position: absolute; /* Stay in place */
    z-index: 1000; /* Sit on top */
     padding: 0;
     margin: 0;
    left: 0;
    top: 0; 
}


.carousel-content {
  position: absolute;
  bottom: 10%;
  left: 10%;
  background: rgba(28, 47, 74, 0.5);
  color: white;
  border-radius: 10px ;
  
}
 
 #Art{
 	padding: 0;
     margin: 0;
    left: 0;
    top: 0; 
    height: 120% ;
 	background-image: url("artBack2.jpg");
 	background-attachment: fixed;
 	color: white;
 
 } 
 
 #science{
 	padding: 0;
     margin: 0;
    left: 0;
    top: 0; 
    height: 150% ;
 	background-image: url("science.jpg");
 	background-attachment: fixed;
 	color: white;
 }
 
 #News1{
  height: 70% ;
  width: 500px ;
 background: rgba(0,0,0, 0.7);
 margin-left: 60px;
 border-radius: 10px ;
 color: white;
 
 }
 
 
 .News2{
  height: 300px ;
  width: 300px ;
 background: rgba(0,0,0, 0.7);
 margin-left: 60px;
 border-radius: 10px ;
 color: white;
 }
 
 .News3{
  height: 300px ;
  width: 300px ;
 background: rgba(0,0,0, 0.7);
 margin-left: 60px;
 margin-right: 60px;
 border-radius: 10px ;
 color: white;
 
 }
 
 #News4{
  height: 600px ;
  width: 500px ;
 background: rgba(0,0,0, 0.7);
 margin-left: 60px;
 border-radius: 10px ;
 color: white;
 
 }
 
  
 #kayitOl , #girisYap{
    border-style: none;
    background-color: #da291c;
    height: 60px ;
    border-radius: 20px ;
   
   }
  
  #filmler{
   height: 1200px ;
  width: %100 ;
  background-image: url("cinema_contents/cinema2.jpg");
  background-attachment: fixed;
  color: white;
  }
  
   #CinemaNews1{
  height: 40% ;
  width: 37% ;
 background: rgba(0,0,0, 0.7);
 margin-left: 3%;
 border-radius: 10px ;
 color: white;
 }
 
 .CinemaNews2{
  height: 40%;
  width: 200% ;
 background: rgba(0,0,0, 0.7);
 margin-left: 60px;
 border-radius: 10px ;
 color: white;
 }
 
 video {
    width: 90%;
    height: auto;
}


 #spor{
   height: 130% ;
  width: %100 ;
  background-image: url("sport_contents/pool.jpg");
  background-attachment: fixed;
  color: white;
  }


 #game{
  height: 130% ;
  width: %100 ;
  background-image: url("game_contents/Games.png");
  background-attachment: fixed;
  color: white;
 }

a {
    color: white;
}
  
  </style>


</head>
<body>

<div class= "row page-header" style= "height:540px">							<!-- Slider ayarlari basliyor -->
	
	
	<div class="container" style="width:100%;">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner">
      
    <div class="item active">
      	
      <a href="../okul_deneme/sablon.php?name=45">  	 <img src="slider2.jpg" style="width:100%; height:600;">
         	<div class="carousel-content">
        		<h1>The first smallpox treatment is one step closer to FDA approval</h1>
      		</div>	 </a>
      	
      </div>

     
    
     <div class="item">
       <a href="../okul_deneme/sablon.php?name=15"> 
       <img src="slider1.png"  style="width:100%; height:600;">
        	 <div class="carousel-content">
        		<h1> Winston Churchill’s happy trees</h1>
      		</div>
      		 </a>
      </div> 
      
      
      
      <div class="item">
      <a href="../okul_deneme/sablon.php?name=30"> 
        <img src="slider3.jpg"  style="width:100%; height:600;">
        <div class="carousel-content">
        	<font color= "white">	<h1>Sixers brass indicates its interest in LeBron James in free agency</h1> </font>
      		</div>
         </a>
      </div>
      
      
      
    </div>
    
    
    
    

    
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	
	
	
	</div>



																									<!-- Slider ayarlari bitiyor -->















<font style = "font-size: 20px;"  >


<nav class="navbar " data-spy="affix" data-offset-top="600" style = " background: rgba(28, 47, 74, 1); z-index: 1000; "  >			 <!-- Navbar Başlıyor -->
  <div class="container-fluid">
   
	<div>
		<ul class = "nav  navbar-nav ">
		<a href="index.php" class="pull-left"> <img src="Logo.png" style = "margin-left: 40px;  margin-right: 240px;" width = "160" height="60"></a> 
			<li><a href ="art_contents/art.php"> Art </a> </li>  
			<li><a href ="science_contents/science.php"> Science </a> </li>  
			<li><a href ="sport_contents/sport.php"> Sport </a> </li>
			<li><a href ="cinema_contents/cinema.php"> Cinema </a> </li> 
			<li><a href ="Tarot/tarot.php"> Tarot </a> </li>
			<li><a href ="game_contents/game.php"> Entertainmet </a> </li> 
			
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
        
        
        															
        	
        																					<!-- Login Tespit Basliyor-->

        
        
         <?php 																				
		session_start();

	if($_SESSION["email"] != null){
	//echo "dolu";
	//echo $_SESSION["isim"];
	
	echo "<li id = 'kayitOl' >  <a href='../okul_deneme/timeline.php'>"; 
	echo $_SESSION["isim"];
	echo"<img src = 'panda2.png'   width = '40' height='40' class = 'img-circle'> </a> </li> 
		 <li id = 'kayitOl' >  <a href='sessionDestroy.php'>  <img src = 'quit.png'   width = '30' height='30' class = 'img-circle'> </a>
				</li>
				
				" ;

	
	}else{
	
	echo '<li id = "kayitOl" ><a href="Kayit/kayitOl.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         
        <li id = "girisYap"><a href="Giris/giris.html"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li> ';
	
	
	}


	
		?>

        
        																					<!-- Login Tespit Bitiiyor-->

        
        
      
      
      
      
      
        
      </ul>
		
		
	</div>
  </div>
</nav>    																					    <!-- Navbar Bitiyor-->

</font>



																									











<div id = "Art">
<br><br><br><br><br><br><br><br><br><br><br>
<font color= "white"   >
<div  class = "row">															<!-- Sanat kısmı başlıyor -->
	<div class = "col-lg-1">  </div>
	
	<a href="../okul_deneme/sablon.php?name=17"> 
	<div id= "News1" class = "col-lg-3" align= "center">
	 <br><br><br>
	 <img src="art_contents/4/Know That I Want to Make China Into a Better Country.png"  height="320" width="460">
	 
 	<h1>Know That I Want to Make China Into a Better Country</h1>
	 </a></div> 
	 
	 <div class = "col-lg-3">
	 
	 <a href="../okul_deneme/sablon.php?name=14" > 
	 	<div class = "News2" align= "center">	<br>
	 	<img src="art_contents/1/Art Make some noise.png"  height="200" width="280">
	 	<h4>Make some noise! Met reopens musical instrument galleries </h4>
	 	 
	 	 </div></a>  <br>
	 	
	  <a href="../okul_deneme/sablon.php?name=19" > 	
	 	<div class = "News2" align= "center"> <br>
	 	<img src="art_contents/6/Show me the money.png"  height="200" width="280">
	 	<h4>Show me the money </h4> </div>
	 	<br>
	 	</a>
 		 </div>
	
	
	
	 <div class = "col-lg-3"> 
	  <a href="../okul_deneme/sablon.php?name=21" > 
	 	<div class = "News3" align= "center"> <br>
	 	<img src="art_contents/8/Art Peter Frank on Miyoko.png"  height="200" width="280">
	 	<h4>Art Peter Frank on Miyoko </h4> </div>
	 	<br> </a>
	 	
	 	 <a href="../okul_deneme/sablon.php?name=16" > 
	 	<div class = "News3" align= "center"><br>
	 	 <img src="art_contents/3/A musical performance through AI eyes.png"  height="200" width="280">
	 	<h4> A musical performance through AI eyes</h4> </div>
	 	<br> </a>
	 
	  </div>
	 
	 	
	 
	</div>






</div>

</font>






















																							<!-- Vizyondakiler kısmı başlıyor -->

<div id = "filmler">

	<br><br>
	 <font color= "white" size = 24  >
	 <div align = "center" >Movies in Theaters </div> </font>
	 
	<br><br>
   
  <div id="myCarousel2" class="carousel slide" data-ride="carousel" >
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

   
    <div class="carousel-inner">
      
      <div class="item active">
      	
      	
      	
        	 <table align ="center"  style="width:80%">

 			 <tr>
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                    		<img src="cinema_contents/avengers.jpg" style="width:250; height:320; margin-left: 10px;">	
                     		
                        </a>
                 	</td>
                 
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                    		<img src="cinema_contents/lodgers.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/crooked.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                 	
                 	<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/rampage.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                 	
                 	<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/AlteredPerception.jpg" style="width:250; height:320; margin-left: 40px; margin-right: 40px;">	
                        </a>
                 	</td>
                 	
                 	
                
  				</tr>
	   </table>
        	 
     
     
      	
      </div>

     
    
      <div class="item">
       	
       	 <table align ="center"  style="width:80%">

 			 <tr>
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                    		<img src="cinema_contents/Chappaquiddick.jpg" style="width:250; height:320; margin-left: 10px;">	
                     		
                        </a>
                 	</td>
                 
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                    		<img src="cinema_contents/Black Panther.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                
    				<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/ready player one.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                 	
                 	<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/Le Fidele.jpg" style="width:250; height:320; margin-left: 40px;">	
                        </a>
                 	</td>
                 	
                 	<td>
                    	<a href = "../okul_deneme/sablon.php?name=1">
                     		<img src="cinema_contents/Les gardiennes.jpg" style="width:250; height:320; margin-left: 40px; margin-right: 40px;">	
                        </a>
                 	</td>
                 	
                 	
                
  				</tr>
	   </table>
        	 
      </div>
      
      
      
      
      
    </div>

   
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <br><br>
  
  																								<!-- Vizyondakiler kısmı bitiyor -->
  
  
  
  
  
  
  
  
  
  
  
  
  																							<!-- Sinema Haberleri kısmı başlıyor -->
      <div class = "cinemaNews">
      <br><br>
    
      <font color= "white"   >

	<div  class = "row">															
	 
	  <a href="../okul_deneme/sablon.php?name=1" > 
	<div id= "cinemaNews1" class = "col-lg-3">
	
	 <img src="cinema_contents/11/uma thurman.jpg"  height="320" width="460">
 		<h1>Would Uma Thurman Ever Work With Quentin Tarantino Again? Here's What She Said</h1>
	 </div> 
	  	</a>
    <div class = "col-lg-3">
	 <a href="../okul_deneme/sablon.php?name=8" > 
	 	<div class = "cinemaNews2">
	 	<br><br>
	 		 <video align= "center"  width="420" height="240" autoplay muted>
  				<source src="cinema_contents/10/IMDbs Top 10 Movies of 2017.mp4" type="video/mp4"> 
			</video>
		<br>
		<h1>Click to see IMDbs Top 10 Movies of 2017</h1>
		
	 	 </div> 
	 	 </a>
	 	
	 
 	 </div>
	
	
	 
	  </div>
	  	
	  	
	</div>


	</div>

	</font>																						<!-- Sinema Haberleri kısmı bitiyor -->
      
      
      
      	
	</div>















<div id = "science" >																			<!-- Bilim kısmı basliyor -->

	<br><br><br><br><br><br><br><br><br><br>
   
 
<font color= "white">

<div  class = "row">															
	<div class = "col-lg-1">  </div>
	<a href="../okul_deneme/sablon.php?name=42" > 
	<div id= "News4" class = "col-lg-3">
	 <br> <br><br>
	 <img src="science_contents/1/NASA gets ready to launch the first lander to investigate Mars’ insides.jpg"  height="320" width="460">
	
 <h1>NASA gets ready to launch the first lander to investigate Mars’ insides</h1>
	 </div> 
	 </a>
	 <div class = "col-lg-3">
	 <a href="../okul_deneme/sablon.php?name=43" > 
	 	<div class = "News2"  align= "center">  
	 	<br>
	 	<img src="science_contents/2/Adapting to life in the north .jpg"  height="200" width="280">
	 	<h4> Adapting to life in the north may have been a real headache. </h4>
	 	</div> <br>
	 	</a>
	 	<a href="../okul_deneme/sablon.php?name=46" > 
	 	<div class = "News2" align= "center">
	 	<br>
	 	<img src="science_contents/4/Time crystals created in two new types of materials.jpg"  height="200" width="280">
	 	<h4> Time crystals created in two new types of materials </h4>
	 	
	 	 </div>
	 
 	 </div>
	</a>
	
	
	 <div class = "col-lg-3" > 
	 <a href="../okul_deneme/sablon.php?name=49" > 
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="science_contents/9/Footprints prove humans hunted giant sloths during the Ice Age.png"  height="200" width="280">
	 	<h4> Footprints prove humans hunted giant sloths during the Ice Age</h4>
	 	 </div> <br>
	 	 </a>
	 	 <a href="../okul_deneme/sablon.php?name=44" > 
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="science_contents/3/This plastic can be recycled over and over and over again.jpg"  height="200" width="280">
	 	<h4>This plastic can be recycled over and over and over again. </h4>
	 	 </div>
	 
	  </div>
	 </a>
	 	
	 
	</div>

<br><br>


<div  class = "row">															
	
	<div  class = "col-lg-1">
	 </div> 
	
	<div  class = "col-lg-3">
	 <a href="../okul_deneme/sablon.php?name=48" > 
	 <div class = "News2" align= "center">
	 <br>
	 	<img src="science_contents/8/Synthetic opioids involved in more deaths than  prescription  opioids.jpg"  height="200" width="280">
	 	<h4>Synthetic opioids involved in more deaths than  prescription  opioids. </h4>
	  </div>
	 </div> 
	 
	 </a>
	 <div class = "col-lg-3">
	 <a href="../okul_deneme/sablon.php?name=47" > 
	 	<div class = "News2" align= "center">
	 	<br>
	 	<img src="science_contents/7/This ancient fowl bit like a dinosaur and pecked like a bird.jpg"  height="200" width="280">
	 	<h4>This ancient fowl bit like a dinosaur and pecked like a bird</h4>
	 	 </div> 
 	 </div>
	</a>
	 <div class = "col-lg-3"> 
	 <a href="../okul_deneme/sablon.php?name=46" > 
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="science_contents/6/An enzyme involved in cancer and aging gets a close-up.png"  height="200" width="280">
	 	<h4> An enzyme involved in cancer and aging gets a close-up </h4>
	 	 </div> 
	  </div>
	 
	
	 	
	 
	</div>


</a>

</div>

</font>








</div>																						<!-- Bilim kısmı bitiyor -->



 
 
 
 
 
 
 
 
 
 
 
 
 
 
 


<div id = "spor">																		  <!-- Spor kısmı basliyor -->

<br><br><br><br>

<font color= "white">

<div  class = "row">															
	<div class = "col-lg-1">  </div>
	
	<a href="../okul_deneme/sablon.php?name=30" > 
	<div id= "News4" class = "col-lg-3">
	 <br> <br><br>
	 <img src="sport_contents/8/Sixers brass indicates its interest in LeBron James in free agency.jpg"  height="320" width="460">
	
 <h1>Sixers brass indicates its interest in LeBron James in free agency</h1>
	 </div> 
	 </a>
	 <div class = "col-lg-3">
	 
	 <a href="../okul_deneme/sablon.php?name=23" > 
	 	<div class = "News2"  align= "center">  
	 	<br>
	 	<img src="sport_contents/1/Russia sends 'proof' to WADA refuting doping claims.jpg"  height="200" width="280">
	 	<h4> Russia sends 'proof' to WADA refuting doping claims </h4>
	 	</div> <br>
	 	</a>
	 	<a href="../okul_deneme/sablon.php?name=24" > 
	 	<div class = "News2" align= "center">
	 	<br>
	 	<img src="sport_contents/2/PENNY OLEKSIAK, MOLLY HANNIS ADDED TO ATLANTA SWIM CLASSIC ENTRIES.jpg"  height="200" width="280">
	 	<h4> Penny Oleksiak, Molly Hannis Added To Atlanta Swim Classic Entries </h4>
	 	
	 	 </div>
	 
 	 </div>
	</a>
	
	
	 <div class = "col-lg-3" > 
	 
	 <a href="../okul_deneme/sablon.php?name=25" > 
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="sport_contents/3/ATHLETES NEED BREATHABLE AIR FOR PEAK PERFORMANCE.jpg"  height="200" width="280">
	 	<h4> ATHLETES NEED BREATHABLE AIR FOR PEAK PERFORMANCE </h4>
	 	 </div> <br>
	 </a>	 
	 	<a href="../okul_deneme/sablon.php?name=28" >  
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="sport_contents/5/Hughie Fury outclasses Sam Sexton to win British heavyweight title .jpg"  height="200" width="280">
	 	<h4>Hughie Fury outclasses Sam Sexton to win British heavyweight title  </h4>
	 	 </div>
	 
	  </div>
	 
	 	</a>
	 
	</div>

<br><br>


<div  class = "row">															
	
	<div  class = "col-lg-1">
	 </div> 
	
	<div  class = "col-lg-3">
	 
	 <a href="../okul_deneme/sablon.php?name=27" > 
	 <div class = "News2" align= "center">
	 <br>
	 	<img src="sport_contents/6/Here are the players who could possibly beat Rafael Nadal on clay.jpg"  height="200" width="280">
	 	<h4>Here are the players who could possibly beat Rafael Nadal on clay</h4>
	  </div>
	 </div> 
	 </a>
	 
	 <div class = "col-lg-3">
	 
	 <a href="../okul_deneme/sablon.php?name=32" > 
	 	<div class = "News2" align= "center">
	 	<br>
	 	<img src="sport_contents/10/Eastern Conference Finals pits Brad vs. Bron in a battle of wits.jpg"  height="200" width="280">
	 	<h4>Eastern Conference Finals pits Brad vs. Bron in a battle of wits</h4>
	 	 </div> 
 	 </div>
	
	 <div class = "col-lg-3"> 
	 </a>
	 <a href="../okul_deneme/sablon.php?name=29" > 
	 	<div class = "News3" align= "center">
	 	<br>
	 	<img src="sport_contents/7/Alexander Albon on pole for the 2018 F2 Feature Race in Spain.jpg"  height="200" width="280">
	 	<h4> Alexander Albon on pole for the 2018 F2 Feature Race in Spain </h4>
	 	 </div> 
	  </div>
	 
	
	 </a>	
	 
	</div>




</div>

</font>





</div>
																						  <!-- Spor kısmı bitiyor -->












<div id = "game" >

<br><br><br><br><br><br><br><br><br><br><br>
<font color= "white"   >
<div  class = "row">															<!-- Sanat kısmı başlıyor -->
	<div class = "col-lg-1">  </div>
	
	<a href="../okul_deneme/sablon.php?name=1" > 
	<div id= "News1" class = "col-lg-3" align= "center">
	 <br><br><br>
	 <img src="game_contents/3/Sims4 review.jpg"  height="320" width="460">
	 
 <h1>Sims4 review</h1>
	 </div> 
	 </a>	
	 <div class = "col-lg-3">
	 
	 <a href="../okul_deneme/sablon.php?name=35" > 
	 	<div class = "News2" align= "center">	<br>
	 	<img src="game_contents/1/The Elder Scrolls V- Skyrim is the big, bold, and beautiful.jpg"  height="200" width="280">
	 	<h4>The Elder Scrolls V- Skyrim is the big, bold, and beautiful.jpg </h4>
	 	 
	 	 </div> <br>
	 	</a>	
	 	
	 <a href="../okul_deneme/sablon.php?name=34" > 
	 	<div class = "News2" align= "center"> <br>
	 	<img src="game_contents/2/God of War review.jpg"  height="200" width="280">
	 	<h4> God of War review </h4> </div>
	 	<br>
	 	
 		 </div>
	
	</a>	
	
	 <div class = "col-lg-3"> 
	 
	 <a href="../okul_deneme/sablon.php?name=36" > 
	 	<div class = "News3" align= "center"> <br>
	 	<img src="game_contents/4/Some tricks for Persona5.jpg"  height="200" width="280">
	 	<h4> Some tricks for Persona5 </h4> </div>
	 	<br>
	 </a>		
	 <a href="../okul_deneme/sablon.php?name=37" > 
	 	<div class = "News3" align= "center"><br>
	 	 <img src="game_contents/5/Summary of Marvel vs Capcom Infinite.png"  height="200" width="280">
	 	<h4>Summary of Marvel vs Capcom Infinite</h4> </div>
	 	<br>
	 
	  </div>
	 </a>	
	 	
	 
	</div>








</font>


</div>






    


















</body>
</html>