<?php
        include('db.php');
        
        $postNewCount = $_POST['postNewCount'];
		$sql="SELECT * FROM videos WHERE category='Gamesandsports' ORDER BY ID DESC LIMIT $postNewCount";
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
