<?php 
 include('partials/header.php')

?>
	
	<div class="form_container">
		<div class="overlay"></div>
			

		<div class="tittleDiv">
			<h1 class="title">Login</h1>
			<span class="subTitle">Welcome Back!</span>
		</div>


		<!-- formSection -->
		<form action="" method="POST">
			<div class="rows grid">
				<!-- User name -->
				<div class="row">
					<label for="username">User Name</label>
					<input type="text " id="username" name="userName" placeholder="Enter User Name" required>
				</div>

				<!-- Password-->
				<div class="row">
					<label for="Password">Password</label>
					<input type="Password " id="Password " name="Password" placeholder="Enter User Password " required>
				</div>

				<!-- Submit Button -->
				<div class="row">
					
					<input type="submit" id="submitButton" name="submit" value="Login" required>
					<span class="registerLink">Don't have an account? <a href="register.php">Register</a></span>
				</div>
			</div>
	</div>

<?php 
 include('partials/footer.php')

?>
<!-- login ke database -->
<?php 
	if(isset($_POST['submit']))
	{
		// ketika button di dkilik
		//echo "button clickied";


		//mendapatkan data dari formulir
		$username = $_POST['userName'];
		$password = $_POST['Password'];
		


		//sql save data into database
		$sql = "INSERT INTO tbl_admin SET
			userName = '$username',
			Password = 'password'
			
		
		";

		echo $sql;

	}
	

?>






