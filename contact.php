<?php include "includes/header.php";?>
<?php include "includes/nav.php";?>

<?php 
	
	if (isset($_POST['submit'])) {

		if (!$_POST['first_name']) {
			$error="<br>- Please enter your first name";
		}
		if (!$_POST['last_name']) {
			$error="<br>- Please enter your last name";
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
			mail("gabrielbrunettesavard@hotmail.com", "PooPrints Contact Message", "Name: ".$_POST['first_name']." ".$_POST['last_name']. " Phone Number: ".$_POST['phone']." Email: ".$_POST['email']." Message: ".$_POST['message']);

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


	<div class="besocial-contact animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-md-push-2 animate-box">
					<h2>Contact Details</h2>
					<p>PooPrints, established in 2008, is the first company to offer this service to commercial properties on a widespread basis at affordable rates.</p><br><br>

				</div>
				<div class="col-md-3">
					<h3>Contact Info.</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>PooPrints Canada P.O BOX 40009 Queens Quay,<br> Toronto, ON<br>M5V 0A4</li>
						<li><i class="icon-phone"></i>Direct: 647-202-9877</li>
						<li><i class="icon-phone"></i>Toll Free: 844-477-8877</li>

						<!--

PooPrints Canada
P.O BOX 40009 Queens Quay
Toronto, ON
M5V 0A4
info@PooPrintscdn.com



						<form action="MAILTO:someone@example.com" method="post" enctype="text/plain">
						Name:<br>
						<input type="text" name="name" value="your name"><br>
						E-mail:<br>
						<input type="text" name="mail" value="your email"><br>
						Comment:<br>
						<input type="text" name="comment" value="your comment" size="50"><br><br>
						<input type="submit" value="Send">
						<input type="reset" value="Reset">
						</form>




						 -->
						<li><i class="icon-envelope"></i><a href="mailto:info@PooPrintscdn.com">info@PooPrintscdn.com</a></li>
						<li><i class="icon-globe"></i><a href="index.php">www.PooPrintscdn.com</a></li>
					</ul>
				</div>
				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				<?php echo $result; ?>
					<div class="row">
						<div class="col-md-6">
						<form method="post" role="form">
							<div class="form-group">
								<input class="form-control" placeholder="First Name*" name="first_name" type="text" maxlength="50" size="30" value="<?php echo $_POST['first_name']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Last Name*" name="last_name" type="text" maxlength="50" size="30" value="<?php echo $_POST['last_name']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Email*" name="email" type="text" maxlength="80" size="30" value="<?php echo $_POST['email']; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" placeholder="Phone Number*" name="phone" type="text" maxlength="30" size="30" value="<?php echo $_POST['phone']; ?>">
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
								<input value="Send Message" class="btn btn-primary" type="submit" name="submit">
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

