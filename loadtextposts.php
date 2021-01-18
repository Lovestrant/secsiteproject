


<?php
        include('db.php');
        $postNewCount = $_POST['postNewCount'];
		$sql="SELECT * FROM secstories ORDER BY ID DESC LIMIT $postNewCount";
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

			//<button class='btn btn-primary' style=' margin-left: 0%;'>Like</button>
		
		?>
		
