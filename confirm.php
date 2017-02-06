<?php
	session_start();
	include 'dbh.php';
	
	require("usersession.php");
?>	

<!DOCTYPE html>
<html>


<?php include 'htmlhead.html';?>
 
  <body class="signup"><noscript><iframe height="0" src="//www.googletagmanager.com/ns.html?id=GTM-JD26" style="display:none;visibility:hidden" width="0"></iframe></noscript>
    <div class="signup-page">
<?php include 'header.php'?>
      <div class="signup-content">
        <div class="benefits page-body">
          <?php  echo " <h3>Congratulations    " .$userarray['firstName']. " " .$userarray['lastName']." you're now registered!</h3>" ?> 
          <p>Please check your email and confirm your account.
          
        </p>
        </div>		
        <div class="signup page-sidebar"><p class="alert alert-error" id="fill-all-fields" style="display:none"></p>
          <img src="./images/check.png" alt="Success" style="width:256px;height:256px;">
		    </div>
      </div>
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
