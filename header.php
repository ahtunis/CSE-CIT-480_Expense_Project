    <?php>
    
    <div class="header-main">
        <a class="header-logo" href="index.php"></a>
        <div class="header-login">
       <?php
			if(isset($userarray))
			{
				echo ' <a class="btn btn-sm btn-alt" href="settings.php"> Hello, '.$userarray['firstName'].'</a>';
				
				echo '<a class="btn btn-sm btn-alt" href="../includes/logout.inc.php">Log Out</a>';
			}
			
			else
			{
				echo '<a class="btn btn-sm btn-alt" href="../login.php">Sign in</a>';
			}

       ?>	
        </div>
      </div>