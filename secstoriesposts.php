<?php
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
