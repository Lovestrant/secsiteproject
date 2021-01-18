
<?php
include('db.php');



if (isset($_POST['upload'])) {
	if(!empty($_FILES['file']['name'])){
		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$caption = $_POST['textarea3'];
		$category = $_POST['category'];
		//$caption = $_POST['textarea'];
		
	
		
	
	
		move_uploaded_file($tmp,"videos/".$name);
	
		
		$sql = "INSERT INTO videos(name, caption, category) VALUES ('$name','$caption', '$category')";
		$res = mysqli_query($con,$sql);
		
	
		if($res ==1){
			echo "<script>alert('upload success')</script>";
		}
	
	}else{
		echo "<script>alert('Choose a video or audio file to SecPost')</script>";
		echo "<script>location.replace('secvideos.php');</script>";
	}
	
}

?>






<!DOCTYPE html>
 <html>
<html>
<head>
	<title>SecSite stories</title>
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
	<div id="samp">
		<h1 id="mainhearder">SecSite</h1>
		<form action="searchengine3business.php" method="POST" name="sec-search3">
		<p  id="searchinput">
		
				<input class="form-control" type="text" placeholder="Search SecSite" id="searchme" name="search3">
				<button class="btn btn-danger" type="submit" name="searchbtn3" id="btndanger">SecSearch</button>
		</p>
		
		</form>
	
		
	</div>
	

	<div  class="sidenav">
		<a href="secstories.php">SecStories</a>
		
		<a  href="secpictures.php">SecPics</a>
		<a  href="secvideos.php">SecVids</a>
		
	  </div>
	  <div class="sidenav2">
		<a href="Loveandlife3.php">Love & Life</a>
		<a href="Politics3.php">Politics</a>
		<a href="Entertainment3.php">Entertainment</a>
		<a href="Gamesandsports3.php">Games & sports</a>
		<a href="Business3.php">Business</a>
		<a href="Others3.php">Others</a>
		
	  </div>
		

<div id="secvideos" style="width: 1000px; margin-left: 50px;">


                    <p>
                        <h2 class="col-sm-12" id="secvidsh" style="color:brown;">SecVids(Business)</h2>
                    
                        
                    </p>
        <dir id="alphadiv" style="width: 60%;  padding: 10px;">

                                        
                 <form method ="POST" action="secvideos.php"  enctype="multipart/form-data">		
			<p style="display: flex; text-align: centre; margin-bottom: 0%;">
			
			<label  class="form-label" for="secvidsupload"  id="labels"> Attach videos/audios here</label>
                    <input type="file" name="file" style="width: auto;" accept="video/*, audio/*">	
			</p>

                    <progress class="progress-bar" id="progressBar" min = "0"; max="100" value="0"></progress><br>
                    <textarea type="text" class="form-control"  name="textarea3" id="textarea3" cols="50" rows= "2" placeholder="Caption your video/audio"></textarea><br>
				
					<p><label style="color:blue;">Choose category of your post.(OPTIONAL)</label></p>
				<p style="display:flex;">
			
				<input type="radio" name="category" value="loveandlife" style="height: 20px;">Love&Life<br>
				<input type="radio" name="category" value="Politics" style="height: 20px;">Politics<br>
				<input type="radio" name="category" value="Entertainment" style="height: 20px;">Entertainment<br>
				<input type="radio" name="category" value="Gamesandsports" style="height: 20px;">Games&sports<br>
				
				<input type="radio" name="category" value="Others" style="height: 20px;">Others
				</p>
				<p style="margin-top: -20px;">
				<input type="radio" name="category" value="Business" style="height: 20px; width:20px; text-align: left;">Business<br>
			
				</p>
                    <button  type="submit" name="upload"  class="btn btn-primary"id="secpostbtn2" onclick="uploadFile()">SecPost</button>

                </form>
                                    
             </dir>

	<h4 id="newlabel0">New</h4>
	<!--This is where the text posts appear-->
<div id="postsclass3" style="margin-top: -15%;margin-left: 0%; text-align: centre;">
		

	<?php
		include('db.php');
		$sql="SELECT * FROM videos WHERE category='Business' ORDER BY ID DESC LIMIT 2";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "
				<div style='height:auto; margin-top:20%;'>
				<div  style='height: auto;width: auto; border-radius: 10px;text-align: left; margin-left:0%; padding:10px;'>".$row['caption']."</div>
		
				<video style='width: 100%; height: auto; margin-top:-12%;' controls>
				<source src='videos/".$row['name']."' type= 'video/mp4'>
				
			
				
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
				$("#postsclass3").load("loadvideopostsbusiness.php", {
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

			ajax.open("POST", "Business3.php");
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