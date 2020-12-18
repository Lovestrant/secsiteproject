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
    
                    postsdiv.innerHTML = "<div class = 'col-sm-4 mt-2 mb-1'>" +
                        "<div calss = 'card'>" +
                       
                        "<video width= '320' height = '240' controls> <source src = "+value.videoUrl+" type = 'video/mp4'></video>"+
                        "<div class = 'card-body'<p class = 'card-text'>" + value.text + "</p>" +
                        "<button class = 'btn btn-danger' id = '" + key + "' onclick = 'delete_post(this.id)'>Delete</button>" +
                        "</div></div></div>" + postsdiv.innerHTML;
                    }
           
                });
        

        }





        
function imageupload(){

    var image = document.getElementById('secpicsupload').files[0];
    var post = document.getElementById('textarea2').value;
    var imageName = image.name;

        //path where image/files will be stored

        var imageRef = firebase.storage().ref('pictures/'+imageName);
        //upload image/files to selected storageref
        var uploadTask = imageRef.put(image);
        //getting the state of image upload
    
        uploadTask.on('state_changed', function(snapshot) {
            //task progress
    
            var progress = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
            console.log((snapshot.bytesTransferred/snapshot.totalBytes)*100);
            document.querySelector(".myprogressBar").value = (snapshot.bytesTransferred/snapshot.totalBytes)*100;
    
    
        }, function(error){
            //handling error
            console.log(error.message);
        }, function(){
            //handling success
           
            uploadTask.snapshot.ref.getDownloadURL().then(function(downloadUrl){
            //get  url and upload to the database
            firebase.database().ref('pictures/').push().set({
                text: post,
                imageUrl: downloadUrl
            }, function(error){
                if(error){
                    alert('error while uploading');
                }else
                alert('Successfully uploaded');
                //now reset your form
    
                document.getElementById('postpics-form').reset();
    
               
                getdata2();
                 }
                 );
            });
    
        });
        }
    
        window.onload = function() {
           
            this.getdata2();
            
        }
    
        function getdata2() {
            firebase.database().ref('pictures/').once('value').then(function (snapshot) {
                //getting posts div
                var postsdiv2 = document.getElementById('postsclass2');
                //remove all remaining data in that div
                postsdiv2.innerHTML = "";
                //getting data from firebase
                var data = snapshot.val();
                console.log(data);
                //displaying data to the  post div
                for (let [key, value] of Object.entries(data)) {
    
    
                    postsdiv2.innerHTML = "<div class = 'col-sm-4 mt-2 mb-1'>" +
                    "<div calss = 'card'>" +
                    "<img src = '" + value.imageUrl + "' style = 'height: 200px; width: 200px;'>" +
                    "<div class = 'card-body'<p class = 'card-text'>" + value.text + "</p>" +
                    "<button class = 'btn btn-danger' id = '" + key + "' onclick = 'delete_pics(this.id)'>Delete</button>" +
                    "</div></div></div>" + postsdiv2.innerHTML;
    
                    }
                  
                
            });
        }
        
        function delete_post(key){
            firebase.database().ref('videos/'+key).remove();
            getdata();
            
            
            }
            
            function delete_pics(key){
                firebase.database().ref('pictures/'+key).remove();
              
                getdata2();
                
                }
                