<!DOCTYPE html>
 <html>
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
                        <form action="searchengine1gamesandsports.php" method="POST" name="sec-search1">
                        <p  id="searchinput">
                        
                                <input class="form-control"   class="form-control" type="text" placeholder="Search SecSite" id="searchme" name="search1">
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
	
	
                    
 <div style="background-color:  rgb(63, 21, 50); margin-top: -10%;">
        
         <div id="postsclass1"  style="margin-top: 50%; margin-left: -25%;">
			<!--This is where the text posts appear-->
              
              <?php
                            include('db.php');
                            if(isset($_POST['searchbtn1'])) {

                               
                                if(!empty($_POST['search1'])){
                               
                                    $search = mysqli_real_escape_string($con, $_POST['search1']);
                                    $sql = "SELECT * FROM secstories WHERE category='gamesandsports' and textpost LIKE '%$search%'";
                                    $result = mysqli_query($con, $sql);
                                    $queryResult = mysqli_num_rows($result);
            
                                
            
                                    if($queryResult > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                            echo "
                                            <div style='height: auto; border-radius: 10px; margin-bottom= 0%;  margin-top: 18%; width: 80%;'>
                                            
                                                <div style='height: auto; width:120%;padding: 50px; border-radius: 10px; margin-left: 0%;'>".$row['textpost']."</div>
                                            </div>
                                        <div style='height:40px; width:100%; display:flex; margin-top: -8%; background-color:  rgb(63, 21, 50);'>
                                           
					<button class='btn btn-primary'  style='margin-left: 5%;'>comment</button>
					<button class='btn btn-primary'style=' margin-left: 50%;' id='sharebtn' data-title='Document'>share</button>

                     </div>
                                
                        
                                            ";
                                    
                                    }
                                }else {
                                    echo"<script>alert('No results matching your search.');</script>";
                                    echo "<script>location.replace('Gamesandsports1.php');</script>";
                                }
                            }else{
                                echo "<script>alert('Type something to search')</script>";
                                                 echo "<script>location.replace('Gamesandsports1.php');</script>";   
                                                }
                 
                          }
                            
                        ?>

</div>  
              </div>          

                


        </div>




     </body>
</html>