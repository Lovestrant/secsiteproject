
function Post(){
	createtext();
	createopinions();
}

 function createtext(){

 	var demo = document.getElementById("demo");
	var textbox = document.getElementById("textbox");
	var button = document.getElementById("button");
	//var display = document.getElementById("display");

	button.addEventListener("click", function()
	{ 
	var newMessage = document.createElement("p");
	newMessage.innerHTML = textbox.value;
	demo.appendChild(newMessage);
	textbox.value = "";
	var group = document.getElementById('demo');
})
 }

 function createopinions(){
 	var gr = document.getElementById("display");
 	var opinions = document.getElementById("opinions");
 	//var dislikes = document.getElementById("dislikes");
 	//var comments = document.getElementById("comments");
 	//var share = document.getElementById("share");

 	button.addEventListener("click", function(){
 		var newdiv = document.createElement("p");
 		newdiv.innerHTML = gr;
 		newdiv.appendChild(gr);
 		var render = document.getElementById("opinions");
 	})
 }

 














function showpassword(){
	var state = false;
	if (state) {
		document.getElementById("password").setAttribute("type", "password");
		state = false;

	}else{
		document.getElementById("password").setAttribute("type", "text");
		state = true;
	}

}

function showpassword2(){
	var state = false;
	if (state) {
		document.getElementById("password2").setAttribute("type", "password");
		state = false;

	}else{
		document.getElementById("password2").setAttribute("type", "text");
		state = true;
	}

}

//like button code
var likes = 1;
function like(){
document.getElementById('showlikes').innerHTML = likes;
for(likes = 1; likes < 1; likes ++){
	likes = likes + 1;
}
	
}

//dislike button code
var dislikes = 1;
function dislike(){
document.getElementById('showdislikes').innerHTML = dislikes;
likes = likes + 1;

}
