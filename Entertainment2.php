


<?php
include('db.php');
$msg = "";


if (isset($_POST['upload'])) {
	if(!empty($_FILES['image']['name']))
	{
		//path to the images storage
$target= "pictures/".basename($_FILES['image']['name']);

//getting data from the form
$image = $_FILES['image']['name'];
$caption = $_POST['textarea2'];
$category = $_POST['category'];
	
	$sql = "INSERT INTO pictures(name, caption, category) VALUES ('$image','$caption', '$category')";
	$query = mysqli_query($con, $sql);
	
if(move_uploaded_file($_FILES['image']['tmp_name'], $target) && $query) {
	echo "<script>alert('Secposting success')</script>";
	echo "<script>location.replace('secpictures.php');</script>";
} else{
	echo "<script>alert('Secposting Failed')</script>";
	echo "<script>location.replace('secpictures.php');</script>";
}

}else{
	echo "<script>alert('Choose a picture file to SecPost')</script>";
	echo "<script>location.replace('secpictures.php');</script>";
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
		<form action="searchengine2entertainment.php" name="sec-search2" method="POST">
		<p  id="searchinput">
		
				<input class="form-control" type="text" placeholder="Search SecSite" id="searchme" name="search2">
				<button class="btn btn-danger" type="submit" name="searchbtn2" id="btndanger">SecSearch</button>
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
		<a href="Loveandlife2.php">Love & Life</a>
		<a href="Politics2.php">Politics</a>
		<a href="Entertainment2.php">Entertainment</a>
		<a href="Gamesandsports2.php">Games & sports</a>
		<a href="Business2.php">Business</a>
		<a href="Others2.php">Others</a>
		
	  </div>
		

<div id="secvideos" style="width: 1000px; margin-left: 50px;">


                    <p>
                        <h2 class="col-sm-12" id="secpicsh" style="color:brown;">SecPics(Entertainment)</h2>
                  
                    </p>
					<dir id="alphadiv" style="width: 70%;  margin-left: 10%;background-color: black;">

<form method ="POST" action="secpictures.php"  enctype="multipart/form-data">

<p style="display: flex; text-align: left; margin-bottom: 0%;">	
<label class="form-label" for="secpicsupload" id="labels"style="width: auto; margin-left: 10%;"> Attach pictures here</label><br>
	
				
					<input id="secpicsupload" type="file" name="image" accept="image/*" style="width: auto;" style="background-color: red;border-radius: 20px;"><br>
		</p>	
			
			<progress class="progress-bar" id="progressBar" min = "0"; max="100" value="0"></progress><br>
		
				<textarea class="form-control" name="textarea2" id="textarea2" cols="50" rows= "1" placeholder="Caption your pictures" style="width:90%;border-radius: 20px; margin-left: 5%;"></textarea>
				<br>
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

		<div id="postsclass2" style="margin-top: -10%;margin-left: -10%;">
			<!--This is where the text posts appear-->


			
		<?php
		include('db.php');
		$sql="SELECT * FROM pictures WHERE category='Entertainment' ORDER BY ID DESC LIMIT 3";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "
			
				<div  style='height: auto; width:80%;padding: 10px; border-radius-top: 0px; margin-top: 20%;'>
				<p>".$row['caption']."</p>
				</div>
				
			
				 <div  style='height: 80%; width:80%;padding: 10px; border-radius: 2px; margin-top: -12%;'>
				<img src='pictures/".$row['name']."' style = 'width: 100%; height:auto;'>

			</div>
				
				
				<div style='height:40px; width:100%; display:flex; margin-top: -10%; background-color:  rgb(63, 21, 50);'>
					
				<button class='btn btn-primary'  style='margin-left: 5%;'>comment</button>
				<button class='btn btn-primary'style=' margin-left: 50%;' >share</button>
				</div>
				
				";

				
				
			}
		}else{
			echo"<script>alert('No record yet')</script>";
		}

		
		?>

		</div>
	
	

	

</div>
<button class="btn btn-success" id= "morebtn" style="margin-bottom: 10%; margin-left: 20%;font-size: 30px;">See more posts</button>
			<script>
			//Jquery code to load 3 posts at a time

			$(document).ready(function(){
				var postcount = 3;

			$("#morebtn").click(function() {
				 postcount= postcount+ 3;
				$("#postsclass2").load("loadpicturepostsentertainment.php", {
					postNewCount: postcount 

				});

			});

			});

</script>


</div>

<script>
		function _(el){
			return document.getElementById(el);
		}

		function uploadFile(){
			var file= _("secpicsupload").files[0];

			var formdata = new FormData();
			formdata.append("secpicsupload", file);
			var ajax= new XMLHttpRequest();
			ajax.upload.addEventListener("progress", progressHandler, false);
			ajax.addEventListener("load", completeHandler, false);

			ajax.open("POST", "Entertainment2.php");
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