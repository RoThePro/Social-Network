function disp_post(){
	var hr = new XMLHttpRequest();
	var profile_id = encodeURIComponent(document.getElementById("id").value);
	//alert(profile_id);

	hr.open("GET", "disp_post.php?id="+profile_id, true);
	hr.setRequestHeader("Content-type","application/json");
	hr.onreadystatechange = function(){
		if(hr.readyState==4 && hr.status == 200){
			var data = JSON.parse(hr.responseText);
			var results = document.getElementById("posts");
			results.innerHTML = "";
			for(var obj in data){
				results.innerHTML += "<div class='post'>" 
										+"<a href='../website/"+data[obj].username+"'>"+data[obj].fname+" "+data[obj].lname+"</a>"+"<br>"
										+ data[obj].content
								  + "</div>"
								  + "<br/>";
			}
			setTimeout('disp_post()',500);
		}
	}
	hr.send(null);
}
window.onload = function(){
	disp_post();
}