<!DOCTYPE html>
 <html>
<html>
<head>
	<title>SecSite stories</title>
	<script src="secsite.js"></script>

	<!--Jquery links-->
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	<script src="js/emojionearea.min.js"></script>
	

	 
	

<!--bootstrap links-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="secsite.css">
<link rel="stylesheet" type="text/css" href="css/emojionearea.min.css">

</head>

<body>


	<!--bootstrap links-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>






<div class="container">
	<div id="samp">
		<h1 id="mainhearder">SecSite</h1>
		<form action="searchengine1gamesandsports.php" method="POST" name="sec-search1">
		<p  id="searchinput">
		
				<input  class="form-control" type="text" placeholder="Search SecSite" id="searchme" name="search1">
				<button class="btn btn-danger" type="submit" name="searchbtn1" id="btndanger">SecSearch</button>
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
		<a href="Loveandlife1.php">Love & Life</a>
		<a href="Politics1.php">Politics</a>
		<a href="Entertainment1.php">Entertainment</a>
		<a href="Gamesandsports1.php">Games & sports</a>
		<a href="Business1.php">Business</a>
		<a href="Others1.php">Others</a>
		
	  </div>
	
		

<div id="secstories" style="width: 1000px; margin-left: 50px;">

	<form id="textform" action="secstoriesposts.php" method="POST">
				<p>
					<h2 class="col-sm-12" id="secstoriesh" style="color:brown;">SecStories(Games & sports)</h2>
				
					
				</p>
				<dir id="alphadiv" style="width: 70%;  margin-left: 10%;background-color: black;">
               	<p><br>
				
                <textarea class="form-control" name="textarea1" id="textarea1" cols="70" rows= "1" placeholder="Share your story anonymously" style="width:70%;border-radius: 20px; margin-left: 10%;"></textarea>
			

                <p><label style="color:blue;">Choose category of your post.(OPTIONAL)</label></p>
				<p style="display:flex; width: auto;margin-left: 0%;">
			
				<input type="radio" id= "radio" name="category" value="loveandlife" style="height: 20px;">Love&Life<br>
				<input type="radio" id= "radio" name="category" value="Politics" style="height: 20px;">Politics<br>
                
                <input type="radio" id= "radio" name="category" value="Entertainment" style="height: 20px;">Entertainment<br>


                <input type="radio" id= "radio" name="category" value="Gamesandsports" style="height: 20px;">Games&sports<br>
				
				<input type="radio" id= "radio" name="category" value="Others" style="height: 20px;">Others
		
				<input type="radio" id= "radio" name="category" value="Business" style="height: 20px;">Business<br>
			
				</p>
				
					
					<button name="btnsubmit" type="submit" class="btn btn-primary" id="secpostbtn1">SecPost</button></p><br>
    </form>
	
	
	</dir>
	<h4 id="newlabel0" style=" margin-top: 0%;">New</h4>


	<!--Emoji javascript codes-->

<script>
	
	$(document).ready(function () {
		$('#textarea12').emojioneArea({
			pickerPosition: "bottom"
			
		
		
		})
	})
</script>
	
		<div id="postsclass1"  style="margin-top: -15%;">
			<!--This is where the text posts appear-->

			<?php
		include('db.php');
		$sql="SELECT * FROM secstories WHERE category='Gamesandsports' ORDER BY ID DESC LIMIT 5";
		$result= mysqli_query($con,$sql);
		$queryResults= mysqli_num_rows($result);
		
		if($queryResults >0) {
			while($row = mysqli_fetch_assoc($result)) {
				echo "
					<div style='height: auto; border-radius: 10px; margin-bottom= 0%;  margin-top: 18%; width: 80%;'>
					
						<div style='height: auto; width:100%;padding: 50px; border-radius: 10px; margin-left: 0%;'>".$row['textpost']."</div>
					</div>
				<div style='height:40px; width:100%; display:flex; margin-top: -8%; background-color:  rgb(63, 21, 50);'>
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
	
	
		<button class="btn btn-success" id= "morebtn1" style="	margin-left: 20%;
	position: fixed;
	top: 80%;
	right: 1%;
	height: auto;
	font-size: 20px;
	">Click here and <br>scroll down to <br>See more posts</button>
			<script>
			//Jquery code to load 5 posts at a time

			$(document).ready(function(){
				var postcount = 5;

			$("#morebtn1").click(function() {
				 postcount= postcount+ 5;
				$("#postsclass1").load("loadtextpostsgamesandsports.php", {
					postNewCount: postcount 

				});

			});

			});

</script>

	

</div>



</div>





</body>
</html>