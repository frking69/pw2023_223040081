<?php 
 include('partials/header.php')

?>
	
<div class="register_container">
		<div class="overlay"></div>
			

		<div class="tittleDiv">
			<h1 class="title">Register</h1>
			<span class="subTitle">Thenks for choosing us!</span>
		</div>


		<!-- formSection -->
		<form action="" method="">
			<div class="rows grid">
				<!-- User name -->
				<div class="row">
					<label for="username">User Name</label>
					<input type="text " id="username" name="UserName" placeholder="Enter User Name" required>
				</div>

                <!-- Email addres -->
				<div class="row">
					<label for="">Email Addres</label>
					<input type="email " id="email" name="email" placeholder="Enter User email" required>
				</div>

                <!-- Phone number -->
				<div class="row">
					<label for="phone">Phone Number</label>
					<input type="text " id="phone" name="phone" placeholder="Enter User phone number" required>
				</div>

				<!-- Password-->
				<div class="row">
					<label for="Password">Password</label>
					<input type="Password " id="Password " name="Password " placeholder="Enter User Password " required>
				</div>

				<!-- Submit Button -->
				<div class="row">
					
					<input type="submit" id="submitButton" name="submit" value="Login" required>
					<span class="registerLink">Have an account already? <a href="index.php">Login</a></span>
				</div>
			</div>
	</div>

<?php 
 include('partials/footer.php')

?>
