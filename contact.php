<html>

<?php
   require('config.php'); 
   ?>
   
   <script>
      window.onload = codeAddress;
        setTimeout(codeAddress, 3000);
         function codeAddress(){
                document.getElementById('loadingImage')
                 .style.display = "none";
            }
      function show() {
      var btnV = document.getElementById('btnID');
            document.getElementById('loadingImage')
                 .style.display = "block"; 
                 
      }
   </script>
   <body>
       <h1 class="offline">Please Check Your Internet Connection...</h1>
      <div id="loadingImage">
         <div class="loadding">
            <div class="loadingVK">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               <span></span>
            </div>
         </div>
      </div>
      <header>
         <div class="navv">
            <input type="checkbox" id="navv-check">
            <div class="navv-header">
               <div class="navv-title">
                  <a href="<?php echo $domainSSL; ?>/">  <span class="webTitle"></span> </a> 
               </div>
            </div>
            <div class="navv-btn">
               <label for="navv-check">
               <span></span>
               <span></span>
               <span></span>
               </label>
            </div>
            <div class="navv-links">
               <a href="https://instagram.com/theofficialvkr" target="_blank">Follow</a>
               <a href="https://videodlall.blogspot.com/p/videodownloader.html" target="_blank">Download App</a>
               <a href="<?php echo $domainSSL; ?>/contact.php" target="_blank">Contact us</a>
               <a href="https://github.com/theofficialvkr/premium-video-downloader" target="_blank">Code</a>
               <a href="mailto:contactvkr@yahoo.com" target="_blank">Mail us</a>
            </div>
         </div>
         <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
         <div class="overlay"></div>
         <!-- The HTML5 video element that will create the background video on the header -->
         <video plays-inline autoplay muted loop>
            <source src="<?php echo $domainSSL; ?>/media/Mt_Baker.mp4" type="video/mp4">
         </video>
         <!-- The header content -->
         <div class="container w-100">
            <div class="d-flex w-100 text-center align-items-center midvkr">
               <div class="w-100 text-white">
                  <h1 class="h1vkr"> <span class="input"></span></h1>
               </div>
            </div>
         </div>
      </header>
      <script>     
         var elements = document.querySelectorAll('.avkr');
         for(var i = 0; i < elements.length; i++){
         elements[i].addEventListener("click", ()=>{
         $('#loadingImage').show();
         }); 
         }
         
      </script>
      <!-- Page section example for content below the video header -->
      <section>
         <div class="container">
            <div class="row">
               <div class="col-md-8 mx-auto">
                  <h1 class="h1vkr centerHvkr"><span class="ssite"></span></h1>
                  <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                     <div class="form-wrap">
                        <label class="form-label" for="contact-name">Name<span class="req-symbol">*</span></label>
                        <input class="form-input vkr" id="contact-name" type="text" name="name" data-constraints="@Required" required>
                     </div>
                     <div class="form-wrap">
                        <label class="form-label" for="contact-phone">Phone<span class="req-symbol">*</span></label>
                        <input class="form-input vkr" id="contact-phone" type="phone" name="phone" data-constraints="@Required @PhoneNumber" required>
                     </div>
                     <div class="form-wrap">
                        <label class="form-label" for="contact-email">E-Mail<span class="req-symbol">*</span></label>
                        <input class="form-input vkr" id="contact-email" type="email" name="email" data-constraints="@Required @Email" required>
                     </div>
                     <div class="form-wrap">
                        <label class="form-label label-textarea" for="contact-message">Message<span class="req-symbol">*</span></label>
                        <textarea id="contact-message" style="height:120px;" name="message" data-constraints="@Required" class="form-input vkr" required></textarea>
                     </div>
                     <!--Google captcha-->
                     <div class="form-wrap text-left form-validation-left">
                        <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                     </div>
                     <div class="form-button group-sm text-center text-lg-left">
                        <button   role="button" class="buttonvkr" id="btnID" type="submit">Send</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <footer>
         <h3>Copyright &copy; <?php echo  date("Y"); ?> <b>|</b> Designed by <a href="https://instagram.com/theofficialvkr"><span class="Cw"></span></a></h3>
      </footer>
      

<script>
      let offlineMsg = document.querySelector(".offline");
      function _showOfflineMessage(){
         offlineMsg.style ="display:grid";
      }
      function _hideOfflineMessage(){
         offlineMsg.style ="display:none";
      }
      window.addEventListener("offline", _showOfflineMessage, false);
      window.addEventListener("online", _hideOfflineMessage, false);
   </script>

   </body>
   <script src="bat/core.min.js"></script>
   <script src="bat/script.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
   <script>
      var typed = new Typed(".input", {
        strings:["Welcome", "here you can", "Download Video From Any Site", "Watch Live Cricket", "Watch IPL", "Watch One Day World CUP", "Watch T20 World Cup", "And Many More"],
        typeSpeed: 60,
        backSpeed: 50,
        loop:true
      });
        var typedT = new Typed(".webTitle", {
        strings:["GMV App", "Videos Downloader", "Watch Sports", "And More"],
        typeSpeed: 150,
        backSpeed: 60,
fadeOut: true,smartBackspace: false,
        loop:true
      });
          var typedP = new Typed(".pTitle", {
        strings:["Welcome to Website of GMV App","here you can", "Download Video From Any Site", "And", "Watch Sports", "And More"],
        typeSpeed: 150,
        backSpeed: 60,
fadeOut: true,smartBackspace: false,
        loop:true
      });
        var typedS = new Typed(".ssite", {
        strings:["Contact us"],
        typeSpeed: 150,
        backSpeed: 60,
fadeOut: true,smartBackspace: false,
        loop:true
      });
        var typedCw = new Typed(".cW", {
        strings:["GMV App"],
        typeSpeed: 150,
        backSpeed: 60,
fadeOut: true,smartBackspace: false,
        loop:true
      });
   </script>
   <script>     
      var elements = document.getElementsByTagName("a");
      for(var i = 0; i < elements.length; i++){
      elements[i].addEventListener("click", ()=>{
      $('#loadingImage').show();
      }); 
      }
      
   </script>
</html>
