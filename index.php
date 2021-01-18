<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/emojionearea.min.css">

    	<!--Jquery links-->
	
	<script
		src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
	
	<script src="js/emojionearea.min.js"></script>
	
</head>
<body>
<div class="col-sm-1">
<div name="textarea12" id="textarea1" cols="30" rows="10" id= "textarea1" style="width: 50%;"></div>


  <script>
	
			$(document).ready(function () {
				$('#textarea1').emojioneArea({
					pickerPosition: "bottom",
					width: "0%"
				
				})
			})
</script>
	
</div>
  
</body>
</html>