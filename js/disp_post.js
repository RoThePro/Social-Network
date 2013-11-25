var regular_data = [];
function disp_post(){
	var hr = new XMLHttpRequest();
	var profile_id = encodeURIComponent(document.getElementById("id").value);
	hr.open("GET", "disp_post.php?id="+profile_id, true);
	hr.setRequestHeader("Content-type","application/json");
	hr.onreadystatechange = function(){
		if(hr.readyState==4 && hr.status == 200){
			var data = JSON.parse(hr.responseText);
			var test = compare(regular_data,data);
			console.log(test);
			if(test){
				setTimeout('disp_post()',1000);
				return;
			}
			//console.log("Went through, you suck at programming!");
			regular_data=data.slice();
			var results = document.getElementById("posts");
			results.innerHTML = "";
			for(var obj in data){
				results.innerHTML += "<div class='post'>" 
										+"<a href='../website/"+data[obj].username+"'>"+data[obj].fname+" "+data[obj].lname+"</a>"+"<br>"
										+ data[obj].content
								  + "</div>"
								  + "<input type='text' id='comment_box' placeholder='Write a comment'>"
								  + "<input type='hidden' id='post_id' value='"+data[obj].id+"'>"
								  + "<button onclick='add_comment()'>Comment</button>"
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
function compare(array1, array2){
	var result = false;
	if(array1.length == array2.length){
		for(var obj in array1){
			if(JSON.stringify(array1[obj]) == JSON.stringify(array2[obj])){
				result = true;
			}else{
				result = false;
			}
		}
	}
	return result;
}