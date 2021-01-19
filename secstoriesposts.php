/*
include('db.php');


if (isset($_POST['btnsubmit'])){
    

        if(!empty($_POST['textarea1'])){
            $value = $_POST['textarea1'];
            $category = $_POST['category'];
            $sql = "INSERT INTO secstories(textpost, category) VALUES ('$value', '$category')";
            $query = mysqli_query($con,$sql);

            if($query) {
               echo "<script>alert('SecPost Success')</script>";
               echo "<script>location.replace('secstories.php');</script>";
           
           }
           else{
                echo "<script>alert('SecPosting Failed')</script>";
                echo "<script>location.replace('secstories.php');</script>";
            }
        }else{
            echo "<script>alert('Type something to SecPost')</script>";
            echo "<script>location.replace('secstories.php');</script>";
        }
}

?>

*/

<?php
include('db.php');



if (isset($_POST['btnsubmit'])) {

    if(!empty($_FILES['file']['name']) OR !empty($_POST['textarea1'])){
		$name = $_FILES['file']['name'];
		$tmp = $_FILES['file']['tmp_name'];
		$caption = $_POST['textarea1'];
		$category = $_POST['category'];
		
		
	
		
	
	
		move_uploaded_file($tmp,"files/".$name);

		
		$sql = "INSERT INTO secstories(name, textpost, category) VALUES ('$name','$textpost', '$category')";
		$res = mysqli_query($con,$sql);
		
	
		if($res ==1){
			echo "<script>alert('upload success')</script>";
		}
	
	}else{
		echo "<script>alert('Choose a doc file or type something to SecPost')</script>";
		echo "<script>location.replace('secstories.php');</script>";
	}
	
}

?>

