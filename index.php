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
  <textarea name="" id="" cols="30" rows="10" id= "textarea1"></textarea>


  <script>
	
			$(document).ready(function () {
				$('#textarea1').emojioneArea({
					pickerposition: "bottom",
				
				})
			})
</script>
	
</body>
</html>