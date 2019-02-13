<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Lobster+Two" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta charset = "utf-8" >

<style>

.nav > li > a:focus, 
.nav > li > a:hover 
{
    text-decoration: underline;
    background-color: #da291c;
    border-style: solid;
    border-radius: 20px ;
}

body{
font-family: 'Lobster Two', cursive;
background-image: url("tarotBack.jpg");
}


.kart{
width:45px;
height: 100px;

background-image: url("cardYeni.jpg");
border-radius: 5px;
position: absolute;
left: 700px;
top: 50%;
display: inline ;
}

.kart2{
width:50px;
height: 100px;
background-image: url("cardYeni.jpg");
border-radius: 5px;
position: absolute;
top: 20%;
display: inline ;
}


#fal{
width:350px;
height: 400px;
top: 42%;
left: 70%;
z-index: 100;
position: absolute;

}


.dot {
    height: 300px;
    width: 300px;
    background-image: url("tarotGif.gif");
    border-radius: 50%;
    display: inline-block;
    position: absolute;
    left: 38%;
    top: 50%;
}

#yazi{
	display: none;
    position: absolute;
    left: 38%;
    top: 30%;
    font-size: 44px;
    color: rgb(0, 0, 0);
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

#secilenKartlar{
width:1000px;
height: 800px;
opacity: 1;
border-radius: 5px;
position: absolute;
top: 30%;
display: none ;
}

#parsomen{
top: 38%;
position: absolute;
left: 50%;
 z-index: -1;
 opacity:0;
}


#next{
top: 90%;
position: absolute;
left: 48%;
z-index: 10;
display: inline ;
opacity: 0 ;
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
		 <li id = 'kayitOl' >  <a href='../sessionDestroy.php'>  <img src = 'quit.png'   width = '30' height='30' class = 'img-circle'> </a>
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
</nav>    																					  												  <!-- Navbar Bitiyor-->

</font>





<div id = "kartlar" >

</div>


<div id = "secilenKartlar"> 

</div>

<img src="parsomen.png" id = "parsomen"  height="502" width="702">
<img src="next.png" id = "next" onclick="next()" height="50" width="120">

<div id = "fal" >

 </div>



<span class="dot"  onclick="myFunction()" align= "center" ><br><br><br><br><br> <font color="white" size= 9> Click to see  your destiny... </font></span>


<p id = "yazi">	Please Select 11 Cards	</p>























<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.0/velocity.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/2/velocity.ui.min.js'></script>


<script>

var turn = 1 ;
var kartSayisi = 1 ; 																	// Select 11 cards yazisi ayarlari

function kartSec(element){


document.getElementById("yazi").innerHTML = "Please Select "+ kartSayisi + " Cards" ;
//$.Velocity.animate(document.getElementsByTagName("div"), { opacity: 0 }, 2000);


$("#yazi").velocity(
  { 
    opacity: 0
  },
  { 
    duration: 2000,
    //loop: 25 
    
  })
  .velocity("reverse");
  kartSayisi-- ;
  
  
  
  
  var elementId = element.id ;															//Kart duzeni ayarlari
 // document.getElementById(elementId).style.top =  "00px";														
  
 										
  																						
  $("#"+elementId).velocity( {
  boxShadowX: 0,
  boxShadowBlur: 100
}, 500); 

 $("#"+elementId).velocity({ 
  opacity: 0,
  //width: "*=2",
  //align: "center",
  //left:100,
  //top: 100
  
}, 500);
  				


kartAc();

  
  
 
  																						

}



function kartAc(){																			//Kartlarin kaybolmasi

if(kartSayisi == 0){
  
 
 $("#kartlar").velocity(
  { 
    scale: 0
  },
  { 
    duration: 800,
    display: "none"
    
  });
  
  
  $("#yazi").velocity(
  { 
    scale: 0
  },
  { 
    duration: 400,
    display: "none"
    
  });
  
  
  
  
  $("#secilenKartlar").velocity(
  { 
    scale: 1
  },
  { 
    duration: 1000,
    display: "inline"
    
  });
  
  
  
  
  
  
  
   var adet2 = 92 ;
   var decks = "";
   
for (i = 80; i < adet2; i++) {
decks += "<div  class= 'kart2' id= "+i+" > "+i+"</div> <br>";
document.getElementById("secilenKartlar").innerHTML = decks;
  
  } 
  
 

  
  $("#80").velocity({  translateX: "+=100" , scale:1.3 },{duration: 100, });
  $("#81").velocity({  translateX: "+=180" , scale:1.3},{duration: 200, });
  $("#82").velocity({  translateX: "+=260" , scale:1.3},{duration: 300, });
  $("#83").velocity({  translateX: "+=260" ,  scale:1.3},{duration: 400, });
  $("#83").velocity({  translateY: "+=120"},{duration: 1000, });
  $("#84").velocity({  translateX: "+=260" , scale:1.3 },{duration: 500, });
  $("#84").velocity({  translateY: "-=120"},{duration: 1000, });
  $("#85").velocity({  translateX: "+=340" , scale:1.3},{duration: 600, });
  $("#86").velocity({  translateX: "+=420" , scale:1.3},{duration: 700, });
  $("#87").velocity({  translateX: "+=500" , scale:1.3},{duration: 800, });
  $("#88").velocity({  translateX: "+=500" , scale:1.3},{duration: 900, });
  $("#88").velocity({  translateY: "+=120"},{duration: 1000, });
  $("#89").velocity({  translateX: "+=500" , scale:1.3 },{duration: 1000, });
  $("#89").velocity({  translateY: "+=240"},{duration: 1000, });
  $("#90").velocity({  translateX: "+=500" , scale:1.3},{duration: 1100, });
  $("#90").velocity({  translateY: "-=120"},{duration: 1000, });
  $("#91").velocity({  translateX: "+=500" , scale:1.3},{duration: 1200, });
  
  $("#next").velocity(
  { 
    opacity: 1
  },
  { 
    duration: 10000,
    
  });
 
  }

$("#80").velocity({  translateX: "+=00"  },{duration: 5000, });
$("#80").velocity({  translateX: "+=630" , scale:1.3 },{duration: 1000, });
$("#80").velocity({  scale:4 },{duration: 1000, });
 setTimeout(function(){
    document.getElementById("80").style.backgroundImage = "url('sword44.png')";
    document.getElementById("80").style.backgroundSize = "50px 100px";
    document.getElementById("fal").innerHTML = "<h1>The Magician Tarot card typically appears in a Tarot reading at a time in your life when you have the creative power and energy to create a new life cycle for yourself. You have the ability to take the power of the Universe and manifest your desires.</h1>";}, 6000);
	

	
$("#87").velocity(
  { 
    scale: 0
  },
  { 
    duration: 400,
    display: "none"
    
  });

$("#parsomen").velocity(
  { 
    opacity: 1
  },
  { 
    duration: 10000,
    
  });

}
















/*$(".dot").velocity({                         												 // Dairenin renk ayarlari
  color: "#da291c", 
  backgroundColorGreen: 205 ,
  backgroundColorRed: 220 ,
  backgroundColorBlue: 110
}, { 
    duration: 1000,
    loop: 3 
    } ) 
.velocity("reverse");
*/



function next(){

//alert(turn);
var a =  'sword.jpg';

switch (turn) {
    case 1:
     $("#81").velocity({  translateX: "+=550" , scale:4 },{duration: 1000, });  
     
     setTimeout(function(){
    document.getElementById("81").style.backgroundImage = "url('sword44.png')";
   // document.getElementById("81").style.backgroundImage = "url('logo.png')";
    document.getElementById("81").style.backgroundSize = "50px 100px";
    document.getElementById("fal").innerHTML = "<h2>The High Priestess represents wisdom, serenity, knowledge and understanding. She is often described as the guardian of the unconscious. She sits in front of the thin veil of awareness, which is all that separates us from our inner selves. The High Priestess knows the secret of how to access these realms. She represents spiritual enlightenment and inner illumination, divine knowledge and wisdom</h2>";
  // document.getElementById("80").style.display = "none";
		}, 2000);
        break;
    
    case 2:
    $("#82").velocity({  translateX: "+=470" , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("82").style.backgroundImage = "url('sword44.png')";
    document.getElementById("fal").innerHTML = "<h2>The Empress shows a deep connection with our femininity. Femininity translates in many ways – beauty, sensuality, fertility, creative expression, nurturing – and is necessary in creating balance in both men and women. The Empress calls on you to connect with your feminine energy. Create beauty in your life. Get in touch with your sensuality through taste, touch, sound, smell and sight.</h2>";
	//document.getElementById("81").style.display = "none";	
	document.getElementById("82").style.backgroundSize = "50px 100px";
		}, 2000);
    	 break;
	
	case 3:
    $("#83").velocity({  translateX: "+=470" , translateY: "-=120" , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("83").style.backgroundImage = "url('sword45.png')";
    document.getElementById("fal").innerHTML = "<h1>Similarly, the Empress indicates that the Universal energy is about to intervene in your life. It may be just enough to give you a glimpse of a miracle or it may be even more. You may or may not know whom or what brings such good fortune but the care and nurturing that will result come as no accident. </h1>";
	document.getElementById("83").style.backgroundSize = "50px 100px";	
		}, 2000);
    	 break;
	
	case 4:
    $("#84").velocity({  translateX: "+=470" , translateY: "+=120" , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("84").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h1>The Death card is probably the most feared and misunderstood of all the cards in the Tarot deck. Just the mention of the card’s name has people shaking in their boots! In general, people tend to take the meaning of this card far too literally and fear that the indication is for the death of either themselves or others. Relax! The card of Death can be one of the most fruitful and positive cards in the deck.</h1>";
		}, 2000);
    	 break;
    
    case 5:
    $("#85").velocity({  translateX: "+=390"  , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("85").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h2>Take a trip to your favourite natural setting, be it a forest, beach, mountain or lake and simply sit for a couple of minutes, hours or even days to breathe in the energy that surrounds you while marvelling in the beauty of the earth. The Empress highlights that you are grounded in the material plane (a stabilising influence), yet you can reach into higher planes of consciousness through your connection with nature. You have the potential to connect between the Earth and the Universe.</h2>";
		}, 2000);
    	 break;
   
    case 6:
    $("#86").velocity({  translateX: "+=310" ,  scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("86").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h2>How many times have you sat safely within the narrow confines of your life, comfortable in your current thoughts, beliefs and expectations? Then, out of the blue, something ‘shocking’ happens that completely destroys your picture of peace and harmony. It blows your mind or throws you for a loop. There is a sudden realisation that your comfort was based on an inadequate foundation of false thought, belief and action. This is a humbling, frightening but necessary experience.</h2>";
		}, 2000);
    	 break; 
	
	case 8:
    $("#89").velocity({  translateX: "+=230" ,  translateY: "-=240" ,  scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("89").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h3>When you see the Tower in a reading, you may feel afraid, shaken and insecure. It is a time of great turmoil and destruction as you seek to understand how you could have been so wrong, so naive, or so blind about a particularly situation. And now, what will you do and how will you manage in the face of this shocking truth? You may be experiencing sleepless nights, depression, grief, anger and confrontation. These are normal reactions to major changes in your outer and inner worlds.</h3>";
		}, 2000);
    	 break; 
   
    case 7:
    $("#88").velocity({  translateX: "+=230" , translateY: "-=120" , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("88").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h3>The Tower also represents the inner and outer structures that you have built. These structures represent your personal defences, defences that create a more socially acceptable ‘you’ by hiding your true, inner thoughts and feelings. It is like laughing politely when your boss tells a joke, or, on a deeper level, disguising your sexual feelings, particularly if you feel that they are socially inappropriate. In times of great pressure and stress, these structures will be tested and are at risk of shattering, finally revealing your true inner self to those around you. So, you need to be very careful how much of yourself you attempt to hide, knowing that one day, all will be revealed.</h3>";
		}, 2000);
    	 break;
    
     case 10:
    $("#91").velocity({  translateX: "+=230" ,  scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("91").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h2>Justice often refers to legal matters of all kinds. The courts are where judgments are made and decisions rendered. The legal system is the official arena in which the principles of Justice (fairness, impartiality and the quest for Truth) are explored. If you see the Justice card in a reading where there are legal matters at hand, expect the outcome to be just and fair.</h2>";
		}, 2000);
    	 break;
    
    case 9:
    $("#90").velocity({  translateX: "+=230" , translateY: "+=120" , scale:4 },{duration: 1000, });
    setTimeout(function(){
    document.getElementById("90").style.backgroundImage = "url('sword.jpg')";
    document.getElementById("fal").innerHTML = "<h2>The High Priestess represents wisdom, serenity, knowledge and understanding. She is often described as the guardian of the unconscious. She sits in front of the thin veil of awareness, which is all that separates us from our inner selves. The High Priestess knows the secret of how to access these realms. She represents spiritual enlightenment and inner illumination, divine knowledge and wisdom</h2>";
		}, 2000);
    	 break;	  
}



turn++;
}

























function myFunction() {										//Kartlarin olusturulup dagitilmasi 
document.getElementById("yazi").style.display = "inline-block";
var adet = 79 ;
var decks = "";
for (i = 0; i < adet; i++) {
decks += "<div onclick='kartSec(this)' class= 'kart' id= "+i+" > "+i+"</div> <br>";
document.getElementById("kartlar").innerHTML = decks;
}

var $points = [];
for (i = 0; i < adet; i++) {
$points[i] = $("#"+i); 
}



  
  var mySequence = [];
  var oran1 = 6;
  var oran2 = 6;
  var oran3 = 6;
  var oran4 = 6;
  var oran5 = 6;
  var oran6 = 6;
  var oran7 = 6;
  var oran8 = 6;
  var oran9 = 6;
  var oran10 = 6;
for (i = 0; i < adet; i++){

	

	if((i<10) || (i == 10)){
	mySequence [i] = { e: $points[i], p: { translateX: "+="+(oran1*42) ,translateY: "+="+(oran1*20)  } , options: { sequenceQueue: true ,  duration: 70 }};
	oran1++;
	}
	
	if((i>10) || (i == 20)){
	mySequence [i] = { e: $points[i], p: { translateX: "-="+(oran2*42) ,translateY: "-="+(oran2*20)  } , options: { sequenceQueue: true ,  duration: 70 }};
	oran2++;
	}
	
	if((i>20) || (i == 30)){
	mySequence [i] = { e: $points[i], p: { translateX: "+="+(oran3*42) ,translateY: "-="+(oran3*20)  } , options: { sequenceQueue: true ,  duration: 70}};
	oran3++;
	}
	
	if((i>30) || (i == 40)){
	mySequence [i] = { e: $points[i], p: { translateX: "-="+(oran4*42) ,translateY: "+="+(oran4*20)  } , options: { sequenceQueue: true ,  duration: 70 }};
	oran4++;
	}

	if((i>40) || (i == 50)){
	mySequence [i] = { e: $points[i], p: { translateX: "-="+(oran5*42) } , options: { sequenceQueue: true ,  duration: 70 }};
	oran5++;
	}
	
	if((i>50) || (i == 60)){
	mySequence [i] = { e: $points[i], p: { translateX: "+="+(oran6*42)  } , options: { sequenceQueue: true ,  duration: 70 }};
	oran6++;
	}
	
	if((i>60) || (i == 64)){
	mySequence [i] = { e: $points[i], p: { translateY: "+=" +(oran7*40) , translateX: "+="+(oran7*42) } , options: { sequenceQueue: false }};
	oran7 ++;
	}
	
	if((i>64) || (i == 68)){
	mySequence [i] = { e: $points[i], p: { translateY: "+=" +(oran8*40) , translateX: "-="+(oran8*42) } , options: { sequenceQueue: false }};
	oran8 ++;
	}
	
	if((i>68) || (i == 73)){
	mySequence [i] = { e: $points[i], p: { translateY: "-=" +(oran9*40) , translateX: "+="+(oran9*42) } , options: { sequenceQueue: false }};
	oran9 ++;
	}
	
	if((i>73) || (i == 78)){
	mySequence [i] = { e: $points[i], p: { translateY: "-=" +(oran10*40) , translateX: "-="+(oran10*42) } , options: { sequenceQueue: false }};
	oran10 ++;
	}
	

}



$.Velocity.RunSequence(mySequence);







																											//Dairenin kaybolmasi
$(".dot").velocity(
  { 
    scale: 0
  },
  { 
    duration: 800,
    display: "none"
    
  });












}
</script>





















</body>
</html>