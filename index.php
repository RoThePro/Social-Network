<?php
include "core/init.php";
include "includes/header.php";
if(logged_in()){
	$username = $user_data['username'];
	header("Location: ../website/$username");
}
?>
<div id="dynamic"></div>
   <div id="container">
	   <div id="image">
	   	<a href="index.php"><img src="Home logo.png" height="502.5" width="525"></a>   	
	   </div>
   	   <div id="buttons"><!-- Isn't this really cool? -->
	   <a href="javascript:open_box()"><button class="button">Sign in</button></a><br>
	   <a href="#"><button class="button">Signup</button></a>
	   </div>
   </div>
                
                
<?php
include "includes/footer.php";
?>
