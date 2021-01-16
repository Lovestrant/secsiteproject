
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


function reqFullscreen(){

	function getFullScreenElement(){
	return document.FullscreenElement
	||document.webkitFullscreenElement
	||document.mozFullscreenElement
	||document.msFullscreenElement;
}

	function toggleFullscreen(){
		if(getFullScreenElement()){
			document.getElementById('secstories').requestFullscreen();
		}else{
			document.exitFullscreen().catch(console.log);
			
		}
	}

	document.getElementById('storiesFS').addEventListener('click', () => {
	
		document.getElementById('secstories').requestFullscreen().then((e) => {
			console.log(e);
			toggleFullscreen();
			
		});

	})

	
}


function reqFullscreen3(){

	
	function getFullScreenElement(){
		return document.FullscreenElement
		||document.webkitFullscreenElement
		||document.mozFullscreenElement
		||document.msFullscreenElement;
	}
	
		function toggleFullscreen(){
			if(getFullScreenElement()){
				document.getElementById('secvids').requestFullscreen();
			}else{
				document.exitFullscreen().catch(console.log);
				
			}
		}
	
		document.getElementById('vidsFs').addEventListener('click', () => {
		
			document.getElementById('secvids').requestFullscreen().then((e) => {
				console.log(e);
				toggleFullscreen();
				
			});
	
		})

			
		
	
}

function reqFullscreen2(){


		
	function getFullScreenElement(){
		return document.FullscreenElement
		||document.webkitFullscreenElement
		||document.mozFullscreenElement
		||document.msFullscreenElement;
	}
	
		function toggleFullscreen(){
			if(getFullScreenElement()){
				document.getElementById('secpics').requestFullscreen();
			}else{
				document.exitFullscreen().catch(console.log);
				
			}
		}
	
		document.getElementById('picsFs').addEventListener('click', () => {
		
			document.getElementById('secpics').requestFullscreen().then((e) => {
				console.log(e);
				toggleFullscreen();
				
			});
	
		})

}

function share(key) {
    const url = window.document.location.href;
    const title = window.document.title;

    button.addEventListener('click', () => {
        if(navigator.share) {
            navigator.share({
                title: '${title}',
                url: '${url}'
            }).then( () => {
                alert('thanks for sharing');
            }).catch(console.error);
            }
    });
}


function background(){
	
	document.getElementById("firstsidenav").style.backgroundColor="green";
}
function background2(){
	
	const a=0;
	var b=1;
	
	if(b>a){
		for(i=0;i>-1;i++){
		document.getElementById("secondsidenav").style.backgroundColor="green";
		
	}
	
}

function background3(){
	
	const a=0;
	var b=1;
	
	if(b>a){
		for(i=0;i>-1;i++){
		document.getElementById("thirdsidenav").style.backgroundColor="green";
	}
	}
	
}
}