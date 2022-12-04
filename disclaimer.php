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
   <!-- ===============================================================main Section================================================================== -->     
      <section id="main">
    <div class="contentText">
    <h2>Disclaimer</h2>
    <h2>Disclaimer</h2>
    </div>
    <div id="explore">
    <button onclick="location.href='#service'"> Explore </button>
    </div>
      </section>
   <!-- ===============================================================Service Section================================================================== -->     
      <section id="service">
       <style>
       @import url("https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&display=swap");


:root {
  --light-grey: #eeeeee;
  --link-hover: #b53917;
  --orange: #e55934;
}


code {
  font-size: 16px;
  font-weight: 300;
}

.code-block {
  background: var(--light-grey);
  border-radius: 3px 0px 0px 3px;
  border-left: 5px solid var(--orange);
  padding: 20px;
  width: 100%;
  color: #000;
}

.code-block code {
  display: block;
  margin: 5px 0px;
}

code.id-1 {
  padding-left: 20px;
}

code.id-2 {
  padding-left: 40px;
}
 
 </style>
    <div class="code-block">
      <code>

      <h1>Disclaimer for <?php echo $myDomain; ?></h1>
      <p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at contactvkr@yahoo.com.</p>
      <h2>Disclaimers for VKrFork</h2>
      <p>All the information on this website - <?php echo $myDomain; ?> - is published in good faith and for general information purpose only Some of them are embeded through iframe. VKrFork does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (VKrFork), is strictly at your own risk. VKrFork will not be liable for any losses and/or damages in connection with the use of our website.</p>
      <p> VKrFork get Download link of video from the sites available on internet through iframe or curl. Please do not download any copyright videos which does not belongs to you.</p>
      <p>We Just Iframe the Site which show Live Videos on their websites. we does not stream or host any live videos or any copyright video on our site.</p>
      <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
      <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
      <h2>Consent</h2>
      <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
      <h2>Update</h2>
      <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
      



      </code>
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
   </body>
</html>
