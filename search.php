<?php
   error_reporting(0);
     require('config.php');
     
     $api = ""; //API HERE

     $fetchdomain = $serverdomain; 
     $streamVD = "$fetchdomain/api/stream.php/?vkr=";
     $vidUrl = $_SERVER['REQUEST_URI'];
     $videoVid = explode("vkr=", $vidUrl);
     $videoVid = $videoVid[1];
     $vidDe = urldecode($videoVid);
     $vidEn = urlencode($videoVid);
   ?>
<html>
   <head>
      <meta name="title" content="GMV App -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta name="description" content="GMV App -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - theofficialvkr">
      <meta name="keywords" content="GMV App - online video downloader website,online video downloader app 2022,online video downloader chrome,online video downloader android,online video downloader for pc,online video downloader free,online video downloader for iphone,online video downloader and trimmer,online youtube video downloader app,best online video download app,online video download browser,online video converter downloader free,youtube video downloader cutter online,how to create online video downloader website,online video downloader download youtube dailymotion... videos with 1-click,online video downloader editor,online video downloader embed code,online video downloader for pc windows 10,online video downloader for sony liv,best online video downloader for android,online youtube video downloader for pc windows 10,online video downloader github,online video downloader iphone free,online video downloader idm,online video editor no download,online video downloader reviews,online video download software,online video download site,online video song download,online class video download sinhala,youtube online download video save to gallery,best online video downloader from any site android,best online video downloader from any site,how to online video download,online video downloader with trim,online youtube video downloader website,online video download karne wala app,online youtube video downloader for pc windows 7,online video download youtube,zee5 video downloader online">
      <meta name="robots" content="index,follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="en">
      <meta name="revisit-after" content="2 days">
      <meta name="author" content="TheOfficialVKr">
      <meta itemprop="name" content="theofficialvkr -GMV App - Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta itemprop="description" content="GMV App -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - theofficialvkr">
      <meta itemprop="image" content="<?php echo $domainSSL; ?>/media/logo.png">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:title" content="theofficialvkr -GMV App - Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta name="twitter:description" content="GMV App -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - theofficialvkr">
      <meta name="twitter:site" content="theofficialvkr">
      <meta name="twitter:creator" content="itsmethevkr">
      <meta name="twitter:image:src" content="<?php echo $domainSSL; ?>/media/logo.png">
      <meta property="og:title" content="GMV App -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta property="og:description" content="GMV App -  Online download videos from YouTube, All in One DL, Download videos from twitter, instagram, facebook, mxtakatak, josh, ipl, ted, tiktok - theofficialvkr">
      <meta property="og:image" content="<?php echo $domainSSL; ?>/media/logo.png">
      <meta property="og:url" content="<?php echo $domainSSL; ?>/">
      <meta property="og:site_name" content="GMV App -  Online Download Video, Audio, GIF Photo from YouTube & More">
      <meta property="fb:app_id" content="427710135379286">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo $domainSSL; ?>/media/logo.png">
      <meta name="theme-color" content="#ffffff">
      <meta name="viewport" content="width=device-width ,  initial-scale=1 ,  shrink-to-fit=no">
      <script type="text/javascript" src="<?php echo $domainSSL; ?>/js/bootstrap_002.js"></script>
      <script src="<?php echo $domainSSL; ?>/js/bootstrap.js"></script>
      <script src="<?php echo $domainSSL; ?>/js/jquery-1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css"  href="../css/w3.css">
      <link rel="stylesheet" type="text/css"  href="../css/style.css">
      <link rel="stylesheet" type="text/css"  href="../css/bootstrap_002.css">
      <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"  id="bootstrap-css">
      <script src="<?php echo $domainSSL; ?>/VijayKrAPP.js" defer></script>
      <link rel="manifest" crossorigin="use-credentials" href="<?php echo $domainSSL; ?>/manifest.webmanifest">
   </head>
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
               <a href="//instagram.com/theofficialvkr" target="_blank">Follow</a>
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
         <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center midvkr">
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
<?php
   error_reporting(0);
   $today = date_default_timezone_set("Asia/Calcutta");
   $time = date("h:i:sa");
   $date =date("Y-m-d");
   $day =date("D");
   
   if (!empty($_SERVER['HTTP_CLIENT_IP']))
       {
         $ipaddress = $_SERVER['HTTP_CLIENT_IP']; 
       }
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
       {
         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']; 
       }
   else
       {
         $ipaddress = $_SERVER['REMOTE_ADDR']; 
       }
   $utrl = "http://ip-api.com/json/$ipaddress?fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query";
   
   $ch = curl_init();
   curl_setopt($ch ,  CURLOPT_SSL_VERIFYPEER ,  false);
   curl_setopt($ch ,  CURLOPT_RETURNTRANSFER ,  true);
   curl_setopt($ch ,  CURLOPT_URL ,  $utrl);
   $result = curl_exec($ch);
   curl_close($ch);
   
   $ipdat = json_decode($result);
   
   $br = "
          \   /
           \ /
            |  
             
             ";
   $brs = "
           \ /
            |  
             
             ";
   $useragent = " User-Agent: "; 
   $browser = $_SERVER['HTTP_USER_AGENT']; 
   $file = 'suser.txt'; 
   $victim = "IP: "; 
   $fp = fopen($file ,  'a' ); 
   fwrite( $fp ,  $victim ); 
    fwrite( $fp ,  $ipaddress );
   fwrite( $fp ,  $useragent  );
    fwrite( $fp ,  $today   );
   fwrite( $fp ,  $brs  );   
   fwrite( $fp ,  $browser  );
   fwrite( $fp ,  $brs  );   
   fwrite( $fp ,  '  Day is : ' ) ; 
   fwrite( $fp ,  $day) ; 
   fwrite( $fp ,  ' => Date is : ' ) ; 
   fwrite( $fp ,  $date ) ; 
   fwrite( $fp ,  ' =>  Time is  :  ' ) ;    
   fwrite( $fp ,  $time  ) ; 
   fwrite( $fp ,  '  => Previous URL is  :  ' ) ; 
   fwrite( $fp ,  $_SERVER['HTTP_REFERER']  ) ;  
   fwrite( $fp ,  '  => API is  :  ' ) ; 
   fwrite( $fp ,  $apikey  ) ; 
   fwrite( $fp ,  '  => Continent is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->continent  ) ;
   fwrite( $fp ,  '  => Country is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->country) ;
   fwrite( $fp ,  '  => Country Code is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->countryCode  ) ;
   fwrite( $fp ,  '  => City is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->city  ) ;
   fwrite( $fp ,  '  => Region is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->regionName  ) ;
   fwrite( $fp ,  '  => ZIP code is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->zip  ) ;
   fwrite( $fp ,  '  => Domain is => ' ) ; 
   fwrite( $fp ,  $calldomain  ) ;
   fwrite( $fp ,  '  => Timezone is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->timezone  ) ;
   fwrite( $fp ,  ' =>  Currency is  :  ' ) ; 
   fwrite( $fp ,  $ipdat->currency  ) ;
   fwrite( $fp ,  $br  );   
    fclose( $fp);
   ?>
