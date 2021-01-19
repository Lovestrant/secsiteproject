
<?php
include('db.php');



if (isset($_POST['upload'])) {
	if(!empty($_FILES['file']['name'])){
		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$caption = $_POST['textarea3'];
		$category = $_POST['category'];
		
		
	
		
	
	
		move_uploaded_file($tmp,"audios/".$name);

		
		$sql = "INSERT INTO audios(name, caption, category) VALUES ('$name','$caption', '$category')";
		$res = mysqli_query($con,$sql);
		
	
		if($res ==1){
			echo "<script>alert('upload success')</script>";
		}
	
	}else{
		echo "<script>alert('Choose an audio  file to SecPost')</script>";
		echo "<script>location.replace('Gamesandsports4.php');</script>";
	}
	
}

?>






<!DOCTYPE html>
 <html>
<html>
<head>
	<title>SecSite audios</title>
	<script src="secsite.js"></script>

	

	 
	    	<!--Jquery links-->
	
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!--bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="secsite.css">
</head>

<body>


	<!--bootstrap links-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>






<div class="container">
	<div class="page-hearder" id="samp">
		<h1 id="mainhearder">SecSite</h1>
		<form action="searchengine4gamesandsports.php" method="POST" name="sec-search4">
		<p  id="searchinput">
		
				<input class="form-control" type="text" placeholder="Search SecSite" id="searchme" name="search4">
				<button class="btn btn-danger" type="submit" name="searchbtn3" id="btndanger">SecSearch</button>
		</p>
		
		</form>
	
		
	</div>
	

	<div  class="sidenav">
		<a href="secstories.php">SecStories</a>
		
		<a  href="secpictures.php">SecPics</a>
		<a  href="secvideos.php">SecVids</a>
		<a  href="secaudios.php">SecAudios</a>
		
	  </div>
	  <div class="sidenav2">
		<a href="Loveandlife4.php">Love & Life</a>
		<a href="Politics4.php">Politics</a>
		<a href="Entertainment4.php">Entertainment</a>
		<a href="Gamesandsports4.php">Games & sports</a>
		<a href="Business4.php">Business</a>
		<a href="Others4.php">Others</a>
		
	  </div>
		

<div id="secvideos" style="width: 1000px; margin-left: 50px;">


                    <p>
                        <h2 class="col-sm-12" id="secvidsh" style="color:brown;">SecAudios(Games & sports)</h2>
                    
                        
                    </p>
			<dir id="alphadiv" style="width: 70%;  margin-left: 10%;background-color: black;">

                                        
                 <form method ="POST" action="secaudios.php"  enctype="multipart/form-data" id="uploadForm3">		
			<p style="display: flex; text-align: centre; margin-bottom: 0%;">
			
			<label  class="form-label" for="secvidsupload"  id="labels"> Attach audio here</label>
                    <input type="file" name="file" style="width: auto;" id="inpFile" accept="audio/*">	
			</p>

                    <progress class="progress-bar" id="progressBar" name="progressBar" min = "0"; max="100" value="0"></progress><br>
                    <textarea type="text" class="form-control"  name="textarea3" id="textarea3" cols="50" rows= "1" placeholder="Caption your audio" style="width:90%;border-radius: 20px; margin-left: 5%;"></textarea><br>
				
					<p><label style="color:blue;">Choose category of your post.(OPTIONAL)</label></p>
								
					<p style="display:flex; width: auto;margin-left: 0%;">
			
			<input type="radio" id= "radio" name="category" value="loveandlife" style="height: 20px;">Love&Life<br>
			<input type="radio" id= "radio" name="category" value="Politics" style="height: 20px;">Politics<br>
			
			<input type="radio" id= "radio" name="category" value="Entertainment" style="height: 20px;">Entertainment<br>


			<input type="radio" id= "radio" name="category" value="Gamesandsports" style="height: 20px;">Games&sports<br>
			
			<input type="radio" id= "radio" name="category" value="Others" style="height: 20px;">Others
	
			<input type="radio" id= "radio" name="category" value="Business" style="height: 20px;">Business<br>
		
			</p>
		
                    <button  type="submit" name="upload"  class="btn btn-primary"id="secpostbtn2" onclick="uploadFile()">SecPost</button>

                </form>
                                    
             </dir>

	<h4 id="newlabel0">New</h4>
	<!--This is where the text posts appear-->
<div id="postsclass3" style="margin-top: -15%;margin-left: 5%; text-align: centre;">
		

	<?php
		include('db.php');
		$sql="SELECT * FROM audios WHERE category='gamesandsports' ORDER BY ID DESC LIMIT 2";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
		
				
				echo "
				<div style='height:auto;margin-top:20%;width:90%;margin-left:5%;'>
				<div  style='height: auto;width: 100%; border-radius: 10px;text-align: left; margin-left:0%; padding:10px; '>".$row['caption']."</div>
		
				<video style='width: 100%; height: 50px; margin-top:-12%;' controls>
				<source src='audios/".$row['name']."' type= 'video/mp4'>
				
			
				
				</div>
				<div style='height:40px; width:100%; display:flex; margin-top: -10%; background-color:  rgb(63, 21, 50);'>
				<button class='btn btn-primary'  style='margin-left: 2%;'>comment</button>
				<button class='btn btn-primary'style=' margin-left: 40%;' >share</button>
				</div>
		
			
				";
			
			
			}
		}
		else {
		echo "<script>alert('No record yet.')</script>";
			}
		
	?>


	
</div>
<button class="btn btn-success" id= "morebtn" style="margin-bottom: 10%; margin-left: 20%;font-size: 30px;">See more posts</button>
			<script>
			//Jquery code to load 2 posts at a time

			$(document).ready(function(){
				var postcount = 2;

			$("#morebtn").click(function() {
				 postcount= postcount+ 2;
				$("#postsclass3").load("loadaudiopostsgamesandsports.php", {
					postNewCount: postcount 

				});

			});

			});

</script>


</div>



</div>
<script>
function _(el){
	return document.getElementById(el);
}

function uploadFile(){
	var file= _("inpFile").files[0];

	var formdata = new FormData();
	formdata.append("inpFile", file);
	var ajax= new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);

	ajax.open("POST", "secvideos.php");
	ajax.send(formdata);
}

function progressHandler(event){
var percent=(event.loaded / event.total) *100;

_("progressBar").value = Math.round(percent) ;
}
function completeHandler(event){

_("progressBar").value = 0;

}
</script>



</body>
</html>