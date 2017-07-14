<?php 

require_once("securePassGenerator.php");



?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="style.css" rel="stylesheet">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-8808111-6', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	
	

	<body>
		
		<div class="container">

	      <form class="form-signin">
	        <h2 class="form-signin-heading">Generate Password</h2>
	        <label for="inputEmail" class="sr-only">Your Password is: </label>
	        <input type="text" disabled value="<?php  display(index()); ?>" class="form-control" style="text-align: center; font-size: 25px;">
	        	       
	       <p>
	        <button class="btn btn-lg btn-primary btn-block" type="submit">Generate</button>
	        </p>
	      </form>

	     </div> <!-- /container -->


  	</body>
</html>

