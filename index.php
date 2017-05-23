<?php
include_once 'common.php';
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<!--<title>Golden Balls</title>-->
	<title><?php echo $lang['PAGE_TITLE']; ?></title>
	<link rel="icon" href="images/signc.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="golden, balls, escape room, game, Krakow">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300" rel="stylesheet"> 	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/<?php echo $lang['LANG']; ?>.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	
<!--------------------NAVBAR-------------------------------------------	-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
     <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
           </button>
      <a class="navbar-brand" href="#"><img src="images/gbc.png" class="logo" alt=""/></a>
    </div>	
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="page-scroll" href="#section1"><?php echo $lang['MENU_HOME']; ?></a></li>
        <li><a class="page-scroll" href="#section2"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>
        <li><a class="page-scroll" href="#section9"><?php echo $lang['MENU_OUR_GAME']; ?></a></li>
        <li><a class="page-scroll" href="#section5"><?php echo $lang['MENU_PLAN']; ?></a></li>
        <li><a class="page-scroll" href="#section7"><?php echo $lang['MENU_BOOKING']; ?></a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			<b><?php echo $lang['MENU_LANGUAGE']; ?></b>
			<span class="caret"></span>
		  </a>
          <ul class="dropdown-menu">
            <li><a href="index.php?lang=pl"><b>PL</b></a></li>
			<li><a href="index.php?lang=en"><b>EN</b></a></li>
          </ul>
        </li>
      </ul>
   </div>
  </div>
<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
     <div class="row"></div>
   </div>
</nav>
<!---------------------------Section 1----------------------------------->

<div id="section1" class="container-fluid">
  <video autoplay loop muted id="bg-video"> 
      <source src="video/wideo3.mp4" type="video/mp4">
	  <source src="video/wideo3.webm" type="video/webm"> 
      <source src="video/wideo3.ogv" type="video/ogg">
  </video>
  <div class="container text-center">
     <img src="images/glowny6ad.png" class="glowny"/>
	 <h1><?php echo $lang['IMMERSIVE_HEADER']; ?></h1>

  </div>
</div>
<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
    <div class="row"></div>
</div>
<!---------------------------Section 2----------------------------------->
<!--------<div id="section2" class="container-fluid">
    <div class="col-md-12 section2">
      <h1><b><?php echo $lang['ABOUT_US_HEADER']; ?></b></h1>
	   <div class="row">
          <div class="col-md-3 col-md-offset-1 arguments">
		    <img src="images/gb6c.png" class="gbbig"/>
		  </div>	
        <div class="col-md-6 arguments2">
	      <ul style="list-style-type:none" class="pointers">
	        <li><img src="images/punktator.png" class="email2" alt=""/><?php echo $lang['ABOUT_US_1']; ?></li>
	        <li><img src="images/punktator.png" class="email2" alt=""/><?php echo $lang['ABOUT_US_2']; ?></li>
	        <li><img src="images/punktator.png" class="email2" alt=""/><?php echo $lang['ABOUT_US_3']; ?></li>
	        <li><img src="images/punktator.png" class="email2" alt=""/><?php echo $lang['ABOUT_US_4']; ?></li>
	        <li><img src="images/punktator.png" class="email2" alt=""/><?php echo $lang['ABOUT_US_5']; ?></li>
	     </ul>
		</div>
	  </div> 
    </div>
</div>

---------------Section 2 fix------------------------------->
<div id="section2" class="container-fluid">
   <div class="row">
		<h1><b><?php echo $lang['ABOUT_US_HEADER']; ?></b></h1>
	</div>
	<div class="row">
	<div class="col-md-5 subsection1">
	<img src="images/gb6c.png" class="img-responsive goldenlogo"/>
	</div>
	<div class="col-md-7 subsection2">
				<div class="list">
					<div class="line">
						<img src="images/punktator.png" class="point" />
                    <p><span><?php echo $lang['ABOUT_US_1']; ?></span></p>
                </div>
                
                <div class="line">
                     <img src="images/punktator.png" class="point" />
                    <p><span><?php echo $lang['ABOUT_US_2']; ?></span></p>
				</div>

                <div class="line">
                   <img src="images/punktator.png" class="point" />
                    <p><span><?php echo $lang['ABOUT_US_3']; ?></span></p>     
                </div>
				 <div class="line">
                   <img src="images/punktator.png" class="point" />
                    <p><span><?php echo $lang['ABOUT_US_4']; ?></span></p>     
                </div>
				 <div class="line">
                   <img src="images/punktator.png" class="point" />
                    <p><span><?php echo $lang['ABOUT_US_5']; ?></span></p>     
                </div>
	</div>
	</div>
</div>
</div>
<!-----------------------end of section2-------------------------------------->


<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
<div class="row"></div>
</div>
<!------------------ GOLDEN BALLS------------------------------>
<div id="section9" class="container-fluid">
   <h1><b>Golden balls</b></h1>
    <div class="col-md-12 section8">
       <div class="col-md-7 arguments9 col-sm-6"> 
	    	<?php echo $lang['GOLDEN_BALLS_DESCRIPTION']; ?>
	   </div>
	   <div class="row">
         <div class="col-md-4  arguments col-sm-6">
		    <img src="images/signc.png" class="ball"/>
		 </div>	 
	   </div> 
    </div>
</div>

<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
   <div class="row"></div>
</div>

<!---------------------------Section 3----------------------------------->
<div id="section3" class="container-fluid">
   <div class="row"></div>
</div>

<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
  <div class="row"></div>
</div> 

<!---------------------------Section 4----------------------------------->
<div id="section4" class="container-fluid">
   <div class="row">
      <div class="use">
      <h1><b><?php echo $lang['CHALLENGES_HEADER']; ?></b></h1>
   </div>
</div>
  
<div class="row">
  <div class="col-md-3 cztery"> 
	 <img src="images/mental2c.png" class="me"/>
	 <h2><?php echo $lang['CHALLENGES_MENTAL']; ?></h2> 
</div>

<div class="col-md-3 cztery" >
    <img src="images/physical2c.png"class="ph"/>
	  <h2><?php echo $lang['CHALLENGES_PHYSICAL']; ?></h2>
</div>

<div class="col-md-3 cztery"> 
	 <img src="images/knowledge2c.png"class="kn"/>
	 <h2><?php echo $lang['CHALLENGES_KNOWLEDGE']; ?></h2>
</div>

<div class="col-md-3 cztery">
	  <img src="images/memory2c.png"class="mem"/>
	  <h2><?php echo $lang['CHALLENGES_MEMORY']; ?></h2> 
     </div>
   </div>
</div>
<!----------------------------Botoom LINE---------------------------------------->  
<div class="sectionplus" class="container-fluid">
  <div class="row"></div>
</div>
<!---------------------------Section 5----------------------------------->
 <div id="section5" class="container-fluid">
   <div class="row">
      <div class="use">
      <h1><b></br><?php echo $lang['TO_WIN_GAME_HEADER']; ?></b></h1></br></div>
   </div>
   <div class="use">
	    <div class="schematy">
        </div>
   </div>
</div>

<!---------------------------Bottom LINE----------------------------------->
<div class="sectionplus" class="container-fluid">
   <div class="row"></div>
</div>
<!----------------------------------------Section 6-------------------------------------------------------->

<div id="section6" class="container-fluid">
	<div class="row">
		<h1><?php echo $lang['WE_ARE_DIFF_HEADER']; ?></h1>
	</div> 

		<div class="col-md-3 col-sm-6">
				  <div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-1"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_MISSION']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
				<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-2"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_PRESSURE']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
				<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-3"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_OBJECTIVE']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
				<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-4"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_HINTS']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
			  <div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-5"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_ART']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-6"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_PRIZES']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-7"></div>
			            <div class="ch-info-back">
				          <h3><?php echo $lang['WE_ARE_DIFF_LEARN']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>
		<div class="col-md-3 col-sm-6">
				<div class="ch-item">				
		           <div class="ch-info">
			         <div class="ch-info-front ch-img-8"></div>
			            <div class="ch-info-back">
				           <h3><?php echo $lang['WE_ARE_DIFF_IMMERSIVE']; ?></h3>
			            </div>	
		            </div>
				</div>
		</div>     
</div>
<!---------------------------Bottom LINE----------------------------------->
<div class="sectionplus" class="container-fluid">
   <div class="row"></div>
</div>
<!-------------------Section 7: BOOKING---------------------------------->
<div id="section7" class="container-fluid">
    <div class="row">
      <div class="booking"><h1><?php echo $lang['BOOK_HEADER']; ?></h1>
      </div>
    </div>
    <div class="container">
	  <div class="row">
		 <div class="button1"><a href="#">
			 <button><b><?php echo $lang['BOOK_BUTTON_LABEL']; ?></b></button></a>
		  </div> 
	  </div>
	</div>
</div>
<!---------------------------Bottom LINE----------------------------------->
<div class="sectionplus" class="container-fluid">
   <div class="row"></div>
</div>
<!------------------------FOOTER------------------------------------------->
 <div id="section10" class="container-fluid">
   <div class="row">
		<div class="col-md-4 footer-left">
		
			 <h1><b> Contact us</b></h1> 
				<div class="contact">
					<div class="box">
						<img src="images/locationc.png" class="location" alt=""/>
                    <p><span><?php echo $lang['CONTACT_US_ADDRESS']; ?></span></p>
                </div>
                
                <div class="box2">
                     <img src="images/phonec.png" class="phone" alt=""/>
                    <p><span>+48 941- 363-7250</span></p>
				</div>

                <div class="box2">
                    <img src="images/messagec.png" class="email" alt=""/>
                    <p><span>mail@mail.com</span></p>     
                </div>
			</div>
		</div>
		<div class="col-md-4 footer-center">
				<div class="logobox">
					<img src="images/gb2c.png" class="logo2" alt=""/>
				</div>	
		</div>
		<div class="col-md-4 col-sm-hidden footer-right">
			<div class="rightbox">
						<div class="click">
							<a href="#section1"><b><?php echo $lang['MENU_HOME']; ?></b></a>
						</div>
						<div class="click">
							<a href="#section2"><?php echo $lang['MENU_ABOUT_US']; ?></a>
						</div>
						<div class="click">
							<a href="#section4"><?php echo $lang['MENU_OUR_GAME']; ?></a>
						</div>
						<div class="click">
							<a href="#section5"><?php echo $lang['MENU_PLAN']; ?></a>
						</div>
						<div class="click">
							<a href="#section5"><?php echo $lang['MENU_BOOKING']; ?></a>
						</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	     <div class="down">
	      <b> Golden balls &copy 2017 All rights reserved. </b>
	     </div>
       </div>
	
</div>


	
	
</body>
