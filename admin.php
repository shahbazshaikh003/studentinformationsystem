<!DOCTYPE html>
<html>
<head>
	<title>STUDENT INFORMATION SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style/admin.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body>
	<div  id="head" class="row">
		<div  class="col-sm-11" style="background-color: white;height:30px">
			<a class="col-sm-1" href="admin.php">Home</a>
			<a class="col-sm-2" href="">Student</a>
			<a class="col-sm-3" href="">Admin</a>
			<a class="col-sm-4" href="">Teacher</a>
		</div>
		<div class="col-sm-1" style="background-color: orange"><a href="home.php" style="text-decoration: none;font-size: 20px">Logout</a></div>
	</div>
<!--.............................STUDENT DIV....................................... -->
		<div id="adst" class="col-sm-6" style="display: none">
			<div id="buttons" class="col-sm-12">
				<button name="addstudent">Add Student</button>
				<button name="showrecord">Show Record</button>
				<button name="updaterecord">Update Record</button>
			</div>
						<!--..................ADD STUDENT..................-->			
			<div name ="studentreg" class="col-sm-12" style="display: none;">
					<input class="form-group" type="text" name="first name" placeholder="firstname">
					<input type="text" name="" placeholder="middlename">
					<input type="text" name="" placeholder="lastname">
					<input type="text" name="dob" placeholder="DOB yyyy-mm-dd" >
					<input type="text" name="branch" placeholder="Branch">
					<input type="textarea" name="address" placeholder="Address">
					<input type="text" name="srn" placeholder="srn">
					<input type="text" name="student" placeholder="student" value="student">
					<input type="text" name="username" placeholder="username">
					<input type="email" name="email" placeholder="email"><br>
					<button>Register</button>
			</div>

			<!--.......................Show RECORD..................-->

			<div name ="showrecord" class="col-sm-12" style="display: none">
					<input class="form-group" type="text" name="first name" placeholder="firstname">
					<input type="text" name="" placeholder="middlename">
					<input type="text" name="" placeholder="lastname">
					<input type="text" name="dob" placeholder="DOB yyyy-mm-dd" >
					<input type="text" name="branch" placeholder="Branch">
					<input type="textarea" name="address" placeholder="Address">
					<input type="text" name="srn" placeholder="srn">
					<input type="text" name="student" placeholder="student" value="student">
					<input type="text" name="username" placeholder="username">
					<input type="email" name="email" placeholder="email"><br>
					<button>Exit</button>
			</div>


			<!--...........................UPDATE RECORD.................-->

			<div name ="studentreg" class="col-sm-12" style="display: none;">
					<input class="form-group" type="text" name="first name" placeholder="firstname">
					<input type="text" name="" placeholder="middlename">
					<input type="text" name="" placeholder="lastname">
					<input type="text" name="dob" placeholder="DOB yyyy-mm-dd" >
					<input type="text" name="branch" placeholder="Branch">
					<input type="textarea" name="address" placeholder="Address">
					<input type="text" name="srn" placeholder="srn">
					<input type="text" name="student" placeholder="student" value="student">
					<input type="text" name="username" placeholder="username">
					<input type="email" name="email" placeholder="email"><br>
					<button>Update</button>
			</div>
		</div>





<!--.............................College DIV....................................... -->
	<div id="adad" class="col-sm-6" style="">
		<div class="col-sm-12" style="background-color:white;height:30px">
			<button>Add Admin</button>
			<button>List Admin</button>
		</div>	
		<!-- ......................Add Admin.........................-->  	
			<div style="display: none">
				<form class="form-group">
				<input type="text" name="srn" placeholder="srn"><br>
				<input type="text" name="adminname" placeholder="username"><br>
				<input type="password" name="adpassword" placeholder="password"><br>
				<button>Register</button>
				</form>
			</div>
	 <!-- ................................List Admin...........................-->
			<div>
					<table>

					</table>
					
			</div>
	</div>
<!--.............................Teacher DIV....................................... -->
	<div></div>





</body>
</html>