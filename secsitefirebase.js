function upload() {

    
    var video = document.getElementById('secvidsupload').files[0];
    var post = document.getElementById('textarea3').value;
    var videoName = video.name;

        //path where video will be stored

        var videoRef = firebase.storage().ref('videos'+videoName);
        //upload image/files to selected storageref
        var uploadTask = videoRef.put(video);
        //getting the state of image upload
    
        uploadTask.on('state_changed', function(snapshot) {
            //task progress
    
            var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
            console.log((snapshot.bytesTransferred/snapshot.totalBytes)*100);
            document.querySelector(".myprogressBar2").value = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
    
    
        }, function(error){
            //handling error
            console.log(error.message);
        }, function(){
            //handling success
           
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadUrl){
            //get  url and upload to the database
            firebase.database().ref('videos').push().set({
                text: post,
                videoUrl: downloadUrl
            }, function(error){
                if(error){
                    alert('error while uploading');
                }else
                alert('Successfully uploaded');
                //now reset your form
    
                document.getElementById('post-form').reset();
    
                getdata();
               
                 }
                 );
            });
    
        });
        }
    
        window.onload = function() {
            this.getdata();
        
            
        }
    
     //  if(value.imageUrltype = "video"){

        function getdata() {
            firebase.database().ref('videos').once('value').then(function (snapshot) {
                //getting posts div
                var postsdiv = document.getElementById('postsclass3');
                //remove all remaining data in that div
                postsdiv.innerHTML = "";
                //getting data from firebase
                var data = snapshot.val();
                console.log(data);
                //displaying data to the  post div
                for (let [key, value] of Object.entries(data)) {
    
                    postsdiv.innerHTML ="<div class = 'col-sm-4 mt-2 mb-1'  style = ' width: auto; padding-bottom: 20%; background: rgb(63, 21, 50);'>" +
                    //"<div calss = 'card'>" +
                    //"<div calss = 'card' style = 'border: 10px solid green;'>" +
                    "<p class = 'card-body'<p class = 'card-text' style = 'color: white;'>" + value.text +"</p>" +
                        "<video width= '400' height = '300' controls> <source src = "+value.videoUrl+" type = 'video/mp4'></video>"+
                     
                        "<p style ='background-color: black; display: flex; margin-bottom: 0px; height: 60px; width: auto;' >"+
                  //"<button style='margin-right: 10px;' class = '' id = '" + key + "' onclick = 'delete_post(this.id)'>Delete</button>" +
                        "<button class = 'btn btn-primary' style='margin-right: 60px; margin-top: 10px;  id = 'onclick = 'like()''>like</button>" +
                        
                        "<button class = 'btn btn-primary'  style='margin-right: 70px; id = ' onclick = 'delete_post2(this.id)''>dislike</button>" +
                        "<button class = 'btn btn-primary' style='margin-right: 70px;  id =' onclick = 'delete_post1(this.id)''>comment</button>" +
                        "<button class = 'btn btn-primary' id = ' onclick = 'delete_post3(this.id)'>share</button>" +
                        "</p>"+
                        "<p id = 'videolikeshere'></p>"+
                        "</div></div>" + postsdiv.innerHTML;
                    }
           
                });
        

        }





        

                
function delete_post(key){
                    firebase.database().ref('videos/'+key).remove();
                    getdata();
                    
                    
                    }
/*
//function like(){
    //like button code
var likes = 1;
function like(key){
document.getElementById('videolikeshere').innerHTML = likes;
for(likes = 1; likes < 1; likes ++){
	likes = likes + 1;
}

}//}

//function dislike(){
    //dislike button code
var dislikes = 1;
function dislike(){
document.getElementById('showdislikes').innerHTML = dislikes;
likes = likes + 1;

}
*/
//}