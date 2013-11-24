function add_post(){
	var text = encodeURIComponent(document.getElementById('post').value);
	var hr = new XMLHttpRequest();
	hr.open("POST","add_post.php",true);
	hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var request = "post="+text;
	hr.send(request);
	document.getElementById('post').value = '';
}
