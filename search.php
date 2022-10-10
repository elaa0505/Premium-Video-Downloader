<html>

<?php
   error_reporting(0);
     require('config.php');
     $api = "";                // API KEY
     $fetchdomain = $serverdomain; 
     $streamVD = "$fetchdomain/api/stream.php/?vkr=";
     $vidUrl = $_SERVER['REQUEST_URI'];
     $videoVid = explode("vkr=", $vidUrl);
     $videoVid = $videoVid[1];
     $vidDe = urldecode($videoVid);
     $vidEn = urlencode($videoVid);
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
   <body oncontextmenu="return false"> 
      <h1 class="offline">Please Check Your Internet Connection...</h1>
      <script>
         document.addEventListener("contextmenu", function (e){
             e.preventDefault();
         }, false);
          document.onkeydown = function(e) {
           if(event.keyCode == 123) {
              return false;
           }
           if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
              return false;
           }
           if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
              return false;
           }
           if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
              return false;
           }
           if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
              return false;
           }
         }
      </script>
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
                  <a href="<?php echo $domainSSL; ?>/">  <span class="webTitle"></span></a> 
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
         <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?php echo $domainSSL; ?>/media/Mt_Baker.mp4" type="video/mp4">
         </video>
         <!-- The header content -->
         <div class="container w-100">
            <div class="d-flex w-100 text-center align-items-center midvkr">
               <div class="w-100 text-white">
                  <h1 class="h1vkr"><span class="input"></span></h1>
                  <form method="get" action="<?php echo $domainSSL; ?>/download.php">
                     <input required placeholder="Video Name Or URL" type="text"  id="vkr" name="vkr">
                     <button type="submit" role="button" class="buttonvkr" id="btnID" onclick="show()">Download/Search</button>
                  </form>
               </div>
            </div>
         </div>
      </header>
      <section id="searchvkr">
         <?php
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|shorts|user)\/))([^\?&\"'>]+)/", $vidDe, $matches);
            if(!empty($matches[1])){
            $streamYT = "$fetchdomain/api/stream.php/?vkr=";
            }else{ $streamYT = ""; }
            $fetch = $fetchdomain.'/api/?vkr='.$vidEn; 
            function callAPI($fetchUrl,$apikey,$yourURL){
            $curl = curl_init($fetchUrl);
            curl_setopt($curl, CURLOPT_URL, $fetchUrl);
            curl_setopt($curl, CURLOPT_POST, 1); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, 
            
            array("APIKEY:$apikey","DOMAIN:$yourURL","Content-Type: application/json"));
            $resp = json_decode(curl_exec($curl));
            curl_close($curl);
              return $resp;
            }
            if(empty($api)){
               die();
            }
             if(!empty($vidDe)){
                  json_encode($jsonData = callAPI($fetch,$api,$domainSSL));
                   //collecting basic data 
                     $tthumb = $jsonData->data->thumb;
                     $error = $jsonData->data->error;
                     $search = $jsonData->data->search;
                    $ttthumb = explode("uri=", $tthumb);
                    $ttthumb = $ttthumb[1];
                        if(!empty ($ttthumb)){
                     $thumb = urldecode($ttthumb);
                     } elseif(!empty ($tthumb)){
                     $thumb = urldecode($tthumb);
                     }  else $thumb = "$domainSSL/media/logo.png";  
                     if(!empty($error)){
                         echo "
            <title>GMV App : All Video Downloader By Vijay Kumar</title>  $error ";
                       }
                       if(!empty($search)){
                     echo "<title class='pTitle'>GMV App : Search - $search - Videos Online</title>
                     <div class='grid-containervkr grid-container--fitvkr'>";
                     foreach(range('a','m') as $alpha){
                     $sId[$alpha] = $jsonData->data->$alpha->id;
                     $sTitle[$alpha] = $jsonData->data->$alpha->title;
                     $sThumb[$alpha] = $jsonData->data->$alpha->thumb;
                     } 
                    foreach(range('a','m') as $alphab){
                     if(!empty($search && $sTitle[$alphab])){
                     echo " <div class='grid-elementvkr'>
                           <img class='imgvkr' src='$sThumb[$alphab]'>
                           <h4 class='centervkr'>$sTitle[$alphab]</h4>
                           <a href='../download.php/?vkr=$sId[$alphab]' class='avkr'>Download Now</a>
                        </div>
                     ";}}
                     echo "</div>";
                     if(empty($title || $search)){
                     echo "$error";
                     }elseif(!empty($error)){
                     echo "
            <title>GMV App : All Video Downloader By Vijay Kumar</title>  
                     <div class='centervkr'>$error</div>
                     ";
                     echo "";
               }else echo '
            <title>GMV App : All Video Downloader By Vijay Kumar</title>  <h3 class="centervkr">'.$error.'</h3>';
              }
                     else echo '
            <title>GMV App : All Video Downloader By Vijay Kumar</title>  <h3 class="centervkr">Error</h3>';   
                     }
               if(empty($vidDe)){
               $thumb = "$domainSSL/media/logo.png";
               }
               ?>
      </section>
      <script>     
         var elements = document.querySelectorAll('.avkr');
         for(var i = 0; i < elements.length; i++){
         elements[i].addEventListener("click", ()=>{
         $('#loadingImage').show();
         }); 
         }
         
      </script>
      <!-- Page section example for content below the video header -->
      <section class="my-5">
         <div class="container">
            <div class="row">
               <div class="col-md-8 mx-auto">
                  <h1 class="h1vkr centerHvkr"><span class="ssite"></span></h1>
               </div>
            </div>
         </div>
      </section>
      <section>
         <center>
            <div class="gridvkr-container gridvkr-container--fit">
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FAEDED;"><img alt="Tiktok downloader" src="<?php echo $domainSSL; ?>/media/images/tiktok.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Tiktok</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F2F7;"><img alt="Facebook downloader" src="<?php echo $domainSSL; ?>/media/images/facebook.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Facebook</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FCEFF4;"><img alt="Instagram downloader" src="<?php echo $domainSSL; ?>/media/images/instagram.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Instagram</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F2F8FC;"><img alt="Twitter downloader" src="<?php echo $domainSSL; ?>/media/images/twitter.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Twitter</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFF4EE;"><img alt="Voot downloader" src="<?php echo $domainSSL; ?>/media/images/voot.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Voot</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FEF5EA;"><img alt="Ozee downloader" src="<?php echo $domainSSL; ?>/media/images/youtube.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">YouTube</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EFFAF7;"><img alt="Download Anime" src="<?php echo $domainSSL; ?>/media/images/9anime.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">9Anime</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EEEEEE;"><img alt="VidMe downloader" src="<?php echo $domainSSL; ?>/media/images/vidme.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">VidMe</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #edfcff;"><img alt="Dailymotion downloader" src="<?php echo $domainSSL; ?>/media/images/dailymotion.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Dailymotion</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FEF1EB;"><img alt="Soundcloud downloader" src="<?php echo $domainSSL; ?>/media/images/soundcloud.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Soundcloud</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EEEEEE;"><img alt="9GAG downloader" src="<?php echo $domainSSL; ?>/media/images/9gag.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">9GAG</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #e2f2f4;"><img alt="AudioBoom downloader" src="<?php echo $domainSSL; ?>/media/images/audio_boom.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">AudioBoom</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #e8e8e8;"><img alt="Funny Or Die downloader" src="<?php echo $domainSSL; ?>/media/images/funny_or_die.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Funny Or Die</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FDFAEC;"><img alt="Youtube downloader" src="<?php echo $domainSSL; ?>/media/images/imdb.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">IMDB</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F6EBEB;"><img alt="Liveleak downloader" src="<?php echo $domainSSL; ?>/media/images/liveleak.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Liveleak</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FDEEEE;"><img alt="Ted downloader" src="<?php echo $domainSSL; ?>/media/images/ted.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Ted</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F9FD;"><img alt="Vimeo downloader" src="<?php echo $domainSSL; ?>/media/images/vimeo.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Vimeo</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #ECF9F6;"><img alt="Vine downloader" src="<?php echo $domainSSL; ?>/media/images/vine.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Vine</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F3F6;"><img alt="VK downloader" src="<?php echo $domainSSL; ?>/media/images/vk.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">VK</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFFDEB;"><img alt="Sonyliv downloader" src="<?php echo $domainSSL; ?>/media/images/sonyliv.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Sonyliv</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #FFFAEB;"><img alt="TVF Play downloader" src="<?php echo $domainSSL; ?>/media/images/tvf.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">TVF Play</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #EEF9FD;"><img alt="Youku downloader" src="<?php echo $domainSSL; ?>/media/images/youku.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Youku</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/rutube.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Rutube</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/viu.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Viu</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/josh-app-icon.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Josh</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/MX-TakaTak_9.jpg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">MX Takatak</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/np-iplImg.png" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">IPLt20</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/tumblr.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Tumblr</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/likee.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Likee</small>
                  </a>
               </div>
               <div class="supported-site">
                  <a href="##">
                     <div class="icon-container" style="background: #F0F5FB;"><img alt="Rutube downloader" src="<?php echo $domainSSL; ?>/media/images/gaana.svg" style="height: auto; width: 98%;" /></div>
                     <small class="text-muted">Gana</small>
                  </a>
               </div>
            </div>
            <center> And 1000+ Other website too </center>
            <br />
         </center>
      </section>
      <footer>
         <h3>Copyright &copy; <?php echo  date("Y"); ?> <b>|</b> Designed by <a href="https://instagram.com/theofficialvkr"><span class="cW"></span></a></h3>
      </footer>
      <script>     
         var elements = document.getElementsByTagName("a");
         for(var i = 0; i < elements.length; i++){
         elements[i].addEventListener("click", ()=>{
         $('#loadingImage').show();
         }); 
         }
         
      </script>
      

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
        strings:["Supported Websites"],
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
</html>