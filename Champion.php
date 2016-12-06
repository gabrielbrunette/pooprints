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

<!--	
<div class="besocial-about animate-box besocial-light-grey-section">
	<div class="col-md-6 col-md-offset-3 text-center besocial-heading">
		<h2>PooPrints Champion Program</h2>
		<br><p>Don’t be lured in by false promises of initial low prices only to have hidden fees later!<br><br>
				Does the vendor have their own physical laboratory and secure facility to perform accurate DNA tests?<br><br>
				Is the vendor a functioning corporation with years of experience and the ability to ensure that they will be in business tomorrow?<br><br>
				Does the vendor have a computer database designed to track, match, and catalog the dog DNA worldwide?<br><br>
				Does the vendor have references from their customers that can be verified?<br><br>
				A vendor is only as good as its ability to be in business for years to come. Be sure to ask for corporate structure and future management plans.</p>

		<p><a href="#" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
	</div>	
</div>

<div class="besocial-team besocial-light-grey-section">

-->
	

<br><br>
		
<div class="row">
	<div class="col-md-6 col-md-offset-3 besocial-heading animate-box">
		<h2>PooPrints Champion Program</h2><br>
		<b>It’s about creating a more attractive and healthier living environment for all of us!</b><br>

		Would you like to earn extra money as a PooPrints Champion in your community?

		It’s Simple to become a PooPrints Champion: Send us your contact information and the information of the building or multi-residential community that you feel have dog waste issues. We’ll forward you the information needed to introduce a PooPrints solution to meet their needs.

		<br><br>

		<h3>Compensation</h3><br>
		<p>We have several compensation packages depending on your level of involvement.</p>

		<h3>Types of communities suited for PooPrints Solutions:</h3><br>
		<p>
			Condominiums<br>
			Apartment buildings<br>
			Cooperatives<br> 
			Townhomes & Duplexes<br>
			Homeowner Associations<br>
			Public housing <br>
			Hotel Chains <br>
			Parks & Recreation – Private and Public <br>
			Dog parks – Private and public <br>
			Municipalities <br>
			Campgrounds and RV Parks <br>
		</p>

		<p><a href="apply.php" class="btn btn-primary btn-outline with-arrow">Apply <i class="icon-arrow-right"></i></a></p>


	</div>
	
</div>


<!--
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

-->				
	

	<!-- <div id="map" class="animate-box" data-animate-effect="fadeIn"></div> -->

<?php include "includes/footer.php";?>