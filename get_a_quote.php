<?php include "includes/header.php";?>
<?php include "includes/nav.php";?>


<?php 
	
	if (isset($_POST['submit'])) {

		if (!$_POST['first_name']) {
			$error="<br>- Please enter your name";
		}
		if (!$_POST['email']) {
			$error.="<br>- Please enter your email";
		}
		if (!$_POST['phone']) {
			$error.="<br>- Please enter your phone number";
		}
		if (!$_POST['message']) {
			$error.="<br>- Please enter a message";
		}
		if (!isset($_POST['check'])) {
			$error.="<br>- Please confirm you are human";
		}
		if ($error) {
			$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error.</strong> Please correct the following: '.$error.'</div>';
		} else {
			mail("garry@pooprintscdn.com", "PooPrints Contact Message", "Name: ".$_POST['name']. " Phone Number: ".$_POST['phone']." Email: ".$_POST['email']." Number Of Dogs: ".$_POST['number_of_dogs']." Name Of Community: ".$_POST['name_of_comunity']." City: ".$_POST['city']." Message: ".$_POST['message']);

			{
				$result='<div class="alert alert-success" role="alert">Thank you, we will be in touch shortly!</div>';
			}
		}
	}
	else
	{
    	// Form has not been submitted
	}



?>

	

	<aside id="besocial-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Learn More</h2>
		   				
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div class="besocial-contact animate-box">
		<div class="container">
			<div class="row">
				
				<div class="col-md-8 col-md-push-2 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<?php echo $result; ?>
					<div class="row">
						<div class="col-md-6">
						<form method="post" role="form">
							<div class="form-group">
								<input class="form-control" placeholder="First & Last Name*" name="first_name" type="text" maxlength="50" size="30" value="<?php echo $_POST['first_name']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Number of Dogs in Your Community" name="number_of_dogs" type="text" value="<?php echo $_POST['number_of_dogs']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Name of Complex or Community *" name="name_of_comunity" type="text" value="<?php echo $_POST['name_of_comunity']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Town or City You're Located In *" name="city" type="text" value="<?php echo $_POST['city']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email*" name="email" type="text" value="<?php echo $_POST['email']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Phone Number*" name="phone" type="text" value="<?php echo $_POST['phone']; ?>">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="message" name="comments" maxlength="1000" cols="25" rows="6"><?php echo $_POST['message']; ?></textarea>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="check"> I am human
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Learn more" class="btn btn-primary" type="submit" name="submit">
							</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
					
	

	<!-- <div id="map" class="animate-box" data-animate-effect="fadeIn"></div> -->

<?php include "includes/footer.php";?>

