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


<br><br>
		
<div class="row">
<div class="col-md-6 col-md-offset-3 besocial-heading animate-box">
<h1 class="text-center"><?php display_message(); ?></h1>
<h2>Why do we Need PooPrints?</h2><br>

There is no other solution that makes pet owners accountable for picking up after their dog<br><br>

<h3>Why now and not 10-15 years ago?</h3><br>

More multi-residential in a smaller geographic area<br><br>

More Pets in a higher concentrated area<br><br>

Does this not seem a little unnecessary and over the top?<br><br>

<b>1)</b> A recent informal survey in the city found there’s an average of seven dogs per floor in most condos

or about 280 pooches in typical 40-storey building. The average dog produces about 120 kilograms of

poop every year, multiply that by 280 and you can see why condo dwellers are getting tired of stepping

in it.<br><br>

<b>2)</b> Dog waste is toxic, and the viruses, bacteria and parasites found in dog waste can cause disease.

Children and other dogs are particularly susceptible to the diseases transmitted by dog poop.<br><br>


<a href="http://www.cpha.ca/en/programs/history/achievements/05-he/diseases.aspx" target="_blank">See “Human Diseases Transmitted by Dog Poop” published by CPHA</a>

<br><br>



<b>3)</b> Pet poop that is left in yards, fields, parks and on sidewalks eventually ends up in rivers, lakes and

other bodies of water. It is carried there by spring run-off and heavy rainfalls, either directly or via storm

sewers. Recent studies in the United States traced 20% to 30% of the bacteria in water samples from

urban watersheds to dog waste.<br><br>

<b>4)</b> Dog waste is high in nitrogen and phosphorus, which promote weed and algae growth in

lakes, ponds, and streams. This limits the sunlight available to aquatic plants, which in turn

reduces the oxygen in the water that is needed by fish and other organisms.<br><br>


<a href="http://www.cpha.ca/en/programs/history/achievements/05-he/poop.aspx" target="_blank">See “The scoop on un-scooped Dog Poop” published by the CPHA</a><br><br>

<div class="panel-body">
    <div class="row">
    	<div class="alert-placeholder">
                
        	<?php validate_user_registration(); ?>
    
        </div>
    	<center><h4>To receive the PDF by email</h4></center>
        <div class="col-lg-12">
            <form id="register-form" method="post" role="form">
                <div class="form-group">
                    <input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="Name" value="" required>
                </div>
            
                <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Downloadable PDF">
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div> 


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