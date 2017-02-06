<?php

	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//notify user of missing field/s
	if (strpos($url,'error=empty')!==false){
		echo "Fill all fields to sign up.";
	}elseif (strpos($url,'error=username')!==false){
		echo "Username already exists. Please choose another.";
	}
	
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
          <h3>Free account</h3>
          <p>Create and track employee expenses for free.</p>
          <h3>Join Now</h3>
          <p>Joining now gives you access to all are tools for improving productivity.</p>
        </div>
		
        <div class="signup page-sidebar"><p class="alert alert-error" id="fill-all-fields" style="display:none"></p>

			   <form action="includes/signup.inc.php" class="gtm_signup_register_form" id="signup" method="post">
    				<div class="input-group">
    				  <input type="text" class="required" name="first" placeholder="First name" tabindex="1" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>    

    				  <input type="text" class="required" name="last" placeholder="Last name" tabindex="2" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>

    				  <input type="email" class="required" name="email" placeholder="Email" tabindex="3" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>

             			 <input type="text" class="required" name="uid" placeholder="Username" tabindex="4" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
	
    				  <input type="password" class="required" name="pwd" placeholder="Password" tabindex="5" style="margin-bottom: 5px"><sup class="required" title="Required"></sup>
    				  <br><br>
    				<input class="btn btn-alt full-width" href="confirm.php" disabled="disabled" tabindex="7" type="submit" value="Create Account" />
    				</div>
			   </form>
		</div>
      </div>
      <!--Red Popup Fill out all Fields-->
    </div><script src="//d2fjue5z6foteq.cloudfront.net/assets/315cc4a6724c52ae0b7b8f0104132a7094855698/main.js" type="text/javascript"></script>
  </body>
</html>
