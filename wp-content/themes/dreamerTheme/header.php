<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>///cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/dreamerStyles.css">
<title>Dreamer Vacations: <?php echo($title); ?></title>
</head>
<body>



<div id="wrapperHead">


<header>

<figure class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo0.png" alt="logo" srcset="<?php echo get_template_directory_uri(); ?>/images/logo1.png 1x, <?php echo get_template_directory_uri(); ?>/images/logo2.png 2x, <?php echo get_template_directory_uri(); ?>/images/logo3.png 3x"></figure>
<div class="theTitles">
<h1>Dreamer Vacations</h1>
<h2>Let the Dreams Begin</h2>
</div>

<div class="phone"><a href="tel:+8015555555"><span>801-555-4321</span></a></div>

</header>


</div>


<div id="wrapperNav">

 


  <nav class="clearfix">
   
    <button id="hamburgerBtn">
      <span class="line top"></span>
      <span class="line middle"></span>
      <span class="line bottom"></span>
     </button>
    <?php wp_nav_menu(array('menu_id' => 'primaryNav'))?>
   <!--  <ul id="primaryNav" class="hide">
    <li><a href="index.php">HOME</a></li>
    <li><a href="cruises.php">CRUISES</a></li>
     <li onclick="toggleMenu2()"><a href="#">AGENTS</a>
    <ul id="secondaryNav" class="parent">
      <li><a href="#">TOP AGENTS</a></li>
      <li><a href="agentcoulson.php">AGENT COULSON</a></li>
      <li><a href="agentbourne.php">AGENT BOURNE</a></li>
      <li><a href="#">ADDITIONAL INFO</a></li>
    </ul>
    </li>
    <li><a href="book.php">BOOK</a></li>
     </ul>  -->
   
      <form method="get" action="/">
        <input class="sfield" type="search" name="s" placeholder="Search...">
       <button id="sbtn"><i class="fas fa-search"></i></button>
      
      </form>
  
    </nav> 


    
    
    </div>


    <main>

