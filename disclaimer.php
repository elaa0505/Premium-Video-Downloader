<html>

<?php
   require('config.php');
   ?>

   <style>
      body{
      margin:0 20px;
      }
   </style>
   <body>
       <h1 class="offline">Please Check Your Internet Connection...</h1>
      <h1>Disclaimer for <?php echo $domainSSL; ?></h1>
      <p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at contactvkr@yahoo.com.</p>
      <h2>Disclaimers for theofficialvkr</h2>
      <p>All the information on this website - <?php echo $domainSSL; ?> - is published in good faith and for general information purpose only Some of them are embeded through iframe. theofficialvkr does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (theofficialvkr), is strictly at your own risk. theofficialvkr will not be liable for any losses and/or damages in connection with the use of our website.</p>
      <p> theofficialvkr get Download link of video from the sites available on internet through iframe or curl. Please do not download any copyright videos which does not belongs to you.</p>
      <p>We Just Iframe the Site which show Live Videos on their websites. we does not stream or host any live videos or any copyright video on our site.</p>
      <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
      <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>
      <h2>Consent</h2>
      <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>
      <h2>Update</h2>
      <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
      

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
</html>
