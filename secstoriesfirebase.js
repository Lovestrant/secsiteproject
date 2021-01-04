function textupload() {
   

    var button = document.getElementById('secpostbtn1');
    button.addEventListener('click', function() {
        //getting the text message from the user
        var textmessage = document.getElementById('textarea1').value;

        if(textmessage == "") {
          alert('Type something to post');
       }else{

            //make the objects
            var data = {
                textmessage: textmessage
            }
            //save the message to the firebase
            var database = firebase.database();
            var ref = database.ref("secstories");

            //pushing the objects to the reference
            ref.push(data);

            document.getElementById('textarea1').reset();


    
        }
        //getting data from the firebase

        ref.on("value", function(snapshot) {
            snapshot.foreach(function(childSnapshot) {
                var data = childSnapshot.val();
                console.log(data);

                var postdiv1 = document.getElementById('postsclass1');
                postdiv1.innerHTML = "";
                postdiv1 = data;
                //displaying data into the div

              //  postdiv1 = data;

            })
        })

    })
    

}




