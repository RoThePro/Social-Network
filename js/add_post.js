function add_post(){
	var text = encodeURIComponent(document.getElementById('post').value);
	var hr = new XMLHttpRequest();
	hr.open("POST","add_post.php",true);
	hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var request = "post="+text;
	hr.send(request);
	document.getElementById('post').value = '';
}
function add_comment(id){
	var text = encodeURIComponent(document.getElementById('comment_box'+id).value);
	var id = id;
	var hr = new XMLHttpRequest();
	hr.open("POST","add_comment.php",true);
	hr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	var request = "comment="+text+"&id="+id;
	hr.send(request);
	document.getElementById('comment_box'+id).value = '';
	console.log("Sent!");
}
