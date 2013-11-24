function open_box(){
		var box_content = '<div id="overlay">\
							<div id="box_frame">\
								<div id="box">\
								<form action="login.php" method="post">\
									<input type="text" class="login" name="email" placeholder="Email"><br/>\
									<input type="password" class="login" name="password" placeholder="Password"><br>\
									<input type="submit" value="Login" class="submit">\
								</form>\
								</div>\
							</div>\
							</div>';
		document.getElementById('dynamic').innerHTML = box_content;
		$("body").click(function(e){
		    if(e.target.id !== "box" && e.target.className !== "login" && e.target.nodeName !== "FORM" && e.target.nodeName !== "INPUT"){
			     document.getElementById('dynamic').innerHTML = '';
			}
		});
	}
	function reset(){
		document.getElementById('dynamic').innerHTML = '';
	}