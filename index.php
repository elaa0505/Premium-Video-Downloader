<?php error_reporting(0); require('config.php'); require('head.php'); ?>
   <title>VKrFork -  Just Testing My Coding Skill</title>
   </head>
   <!-- ===============================================================Head End================================================================== -->
   <body>
   <!-- ===============================================================NavBar================================================================== -->      
      <nav class="navbar">
         <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
               <span class="line line1"></span>
               <span class="line line2"></span>
               <span class="line line3"></span>
            </div>
            <ul class="menu-items">
               <li><a href="#main">Home</a></li>
               <li><a href="#service">Service</a></li>
               <li><a href="#contact">Contact</a></li>
            </ul>
            <img onclick="location.href='<?php echo $myDomain; ?>'" src="<?php echo $myDomain; ?>/images/logo-transparent.png" class="logo" alt="VKrFork Logo">
         </div>
      </nav>

   <!-- ===============================================================Main Section================================================================== -->     
      <section id="main">
    <div class="contentText">
    	<form id="dlform" method="GET" enctype="get" action="<?php echo $myDomain; ?>/download.php">
    	<input placeholder="Video name Or URL" id="dlinput" type="text" name="vkr" required>
    	<input id="dlbutton" type="submit" value="Search">
    	</form>
    </div>
      </section>

   <!-- ===============================================================Footer Section================================================================== -->     
      <footer id="footer" class="footer" >
         <div class="waves">
         <style>.wave {position: absolute;top: -70px;left: 0;width: 100%;height: 70px;background: url('<?php echo $myDomain; ?>/images/wave.png');background-size: 1000px 100px;}</style>
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
         </div>
         <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="#main">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="#service">Service</a></li>
            <li class="menu__item"><a class="menu__link" href="#contact">Contact us</a></li>
         </ul>
         <p style="oppacity: 0.75;">Made with <span style="color: red;">🤍</span> by Vijay Kumar</p>
      </footer>
       <!-- Scripts -->
      
   </body>
</html>
