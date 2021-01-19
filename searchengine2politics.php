
<!DOCTYPE html>
<html>
<head>
	<title>SecSite stories</title>
	<script src="secsite.js"></script>

	

	 
	

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
		<form action="searchengine2politics.php" method="POST" name="sec-search2">
		<p  id="searchinput">
		
				<input class="form-control"  type="text" placeholder="Search SecSite" id="searchme" name="search2">
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
		<a href="Others2.php">Others</a>
		
	  </div>	

<div id="secvideos" style="width: 1000px; margin-left: 20px;">



		<div id="postsclass3">
			<!--This is where the text posts appear-->
         <?php
            include('db.php');
            if(isset($_POST['searchbtn2'])) {
                if(!empty($_POST['search2'])){

                $search = mysqli_real_escape_string($con, $_POST['search2']);
                $sql = "SELECT * FROM pictures WHERE category='politics' and caption LIKE '%$search%'";
                $result = mysqli_query($con, $sql);
                $queryResult = mysqli_num_rows($result);

           

                if($queryResult > 0) {
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
                        </div>
                        
                        ";
        
                        
                        
                    }
                }else{
                    echo"<script>alert('No results matching your search.');</script>";
                    echo "<script>location.replace('Politics2.php');</script>";
                }
            }else{
                echo "<script>alert('Type something to search')</script>";
                                 echo "<script>location.replace('Politics2.php');</script>";   
                                }
            }
                

            ?>

	
		</div>
	
	

	

        </div>



    </div>





    </body>

</html>
