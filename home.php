<?php
include 'core/init.php';
if(logged_in()===false){
    echo('You must login to see this profile. ');
    die('Reported unauthorized access');
}
include 'includes/uheader.php';
?>
        <div id="body">
            <?php           		
				if(isset($_GET['username'])===true && empty($_GET['username'])===false){
					$username = $_GET['username'];
					if(username_exists($username)){
						$user_id = user_id_from_username($username);
						$profile_data = user_data($user_id,'fname','lname','username','user_id');
					?>
					
					<?php 
					}else{
						die('No user exists');
					}					
				}else{
					header('Location: index.php');
					exit();
				}
			?>
			<div id="p_header">
				<img id="p_image" src="includes/images/profile.png" width="5.2%" height="9.2%">
				<h1><?php echo $profile_data['fname'].' '.$profile_data['lname']?> </h1>
			</div><br>
			<div id="post_container">		
				<div id="new_post">				
				<textarea id="post" placeholder="What's up?"></textarea><br>
				<script type="text/javascript" src="js/add_post.js"></script>					
				<button onclick="add_post()">Post</button>		
				<script type="text/javascript">
					var user_id = "<?php echo $user_data['user_id']?>";
					var profile_id = "<?php echo $profile_data['user_id']?>";
					if(user_id != profile_id){
						document.getElementById("new_post").style.visibility = "hidden";
					}
					
				</script>		
				</div>
				<input type="hidden" id="id" value="<?php echo $profile_data['user_id']?>">
				<br>
				<div id="posts"/>
			</div>
        </div>
    </body>
</html>


<?php include 'includes/footer.php'; ?>
