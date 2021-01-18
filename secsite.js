
function share2() {
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


function share() {
var shareBtn = document.getElementById("sharebtn");
var shareFallback = document.getElementById("sharefallback");
if(shareBtn && shareFallback) {
	if(navigator.share){

	}else{
		shareFallback.style.display="block";
	}
}

}




