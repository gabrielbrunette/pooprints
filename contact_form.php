



<?php include "includes/header.php";?>
<?php include "includes/nav.php";?>

<?php 
	
	if (isset($_POST['submit'])) {

		if (!$_POST['name']) {
			$error="<br>- Please enter your name";
		}
		if (!$_POST['email']) {
			$error.="<br>- Please enter your email";
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
			mail("info@pooprintscdn.com", "PooPrints Contact Message", "Name: ".$_POST['name']."Email: ".$_POST['email']."Message: ".$_POST['message']);

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



	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 js-fullheight slider-text">
		   			
						<br><br><h1>Contact Form</h1>

						<?php echo $result; ?>

						<p>Send a message via the form below</p>

						<form method="post" role="form">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
							</div> 
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email']; ?>">
							</div> 
							<div class="form-group">
								<textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?></textarea>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="check"> I am human
									</label>
								</div>
								<div align="center">
									<input type="submit" name="submit" class="btn btn-secondary" value="send message">
								</div>
							</div> 

							
						</form>
		
					
				</div>
				
			</div>
			
		</div>

	</section>

<?php include "includes/footer.php";?>