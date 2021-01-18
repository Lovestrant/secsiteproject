<?php
        include('db.php');
        
        $postNewCount = $_POST['postNewCount'];

		$sql="SELECT * FROM pictures WHERE category='others' ORDER BY ID DESC LIMIT $postNewCount";
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