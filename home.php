<!DOCTYPE html>
<html>
<head>
	<title>STUDENT INFORMATION SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="js/home.js"></script>
</head>
<body>

	<!--.................................HEADER.............................................-->

	<div id="head" class="row" >
		<div class="col-sm-11"><h3>STUDENT INFORMATION SYSTEM</h3></div>
		<div id="headlg" class="button" class="col-sm-1"><button>LOGIN</button></div>
	</div>
<!--.....................login DIV....................................................... -->      
	<div id="login" class="row" style="display:none;">
			<form id="loginfrm" name="std" action="loginvalidation.php" method="POST" onsubmit="return val()">
				<input id="srn" name="srn" type="text" placeholder="SRN.NO"><br><br>
				<input id="spassword" name="password" type="password" placeholder="Password"><br>
				<button id="sl">Login</button>
			</form>
	</div>

</body>
</html>