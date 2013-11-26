var regular_data = [];
var regular_comment = [];
function disp_post(){
	var hr = new XMLHttpRequest();
	var profile_id = encodeURIComponent(document.getElementById("id").value);
	hr.open("GET", "disp_post.php?id="+profile_id, true);
	hr.setRequestHeader("Content-type","application/json");
	hr.onreadystatechange = function(){
		if(hr.readyState==4 && hr.status == 200){
			var data = JSON.parse(hr.responseText);
			var test = compare(regular_data,data);
			//console.log(test);
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
								  + "<br/>"
								  + "<input type='text' id='comment_box"+data[obj].id+"' placeholder='Write a comment'>"
								  + "<button onclick='add_comment("+data[obj].id+")'>Comment</button>"
								  + "<div id='comments"+data[obj].id+"'/>"
								  + "</div>"
								  + "<br/>";
				disp_comment(data[obj].id);
			}
			setTimeout('disp_post()',500);
		}
	}
	hr.send(null);
}
function disp_comment(postid){
	var hr = new XMLHttpRequest();
	var profile_id = encodeURIComponent(document.getElementById("id").value);
	hr.open("GET", "disp_comment.php?post_id="+postid, true);
	hr.setRequestHeader("Content-type","application/json");
	hr.onreadystatechange = function(){
		if(hr.readyState==4 && hr.status == 200){
			var data = JSON.parse(hr.responseText);
			console.log(data);
			if(data.length==0){
				return;
			}
			var results = document.getElementById("comments"+postid);
			results.innerHTML = "";
			for(var obj in data){
				results.innerHTML += "<div class='comment'>" 
										+"<a href='../website/"+data[obj].username+"'>"+data[obj].fname+" "+data[obj].lname+"</a>"+"<br>"
										+data[obj].content
										+"</div>";
			}
			setTimeout('disp_comment('+postid+')',500);
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
