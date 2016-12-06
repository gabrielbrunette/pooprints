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
			mail("info@pooprintscdn.com", "PooPrints Contact Message", "Name: ".$_POST['first_name']." ".$_POST['last_name']. " Phone Number: ".$_POST['phone']." Email: ".$_POST['email']." Message: ".$_POST['message']);

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
     
	<div class="bg-image">
		<img src="images/main_img.png">
	</div>
<!--	

	<aside id="besocial-hero" class="js-fullheight">



		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_1.png);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<center><a href="contact.html"></a></center>
		   					<h2>We love our Dogs but...</h2>
		   					<p><a href="get_a_quote.php" class="btn btn-primary btn-lg">Get started</a></p>
		   					<center><img src="images/new_logo.png" alt="" style="width:300px" vspace="10">
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>The average  dog generates 276 lbs. of waste per year</h2><br>
		   					<h2>6.4 million Dogs in Canada</h2><br>
		   					<h2>1.7 billion lbs. of waste per year</h2>
		   					<p><a href="in-the-news.php" class="btn btn-primary btn-lg">In the news</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_10.png);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>It's in our Condo, Town-home and Apartment communities!</h2>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/shoe_shit.png);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Have community resident's complained?</h2>
		   					
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/slide_5.png);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>With over 1,700 communities representing hundreds of thousands of units, we have the experience you need</h2>
		   					<p><a href="get_a_quote.php" class="btn btn-primary btn-lg">Learn more</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(images/parking.png);">
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<center><img src="images/new_logo.png" alt="" style="width:300px"><br><br><br><br>
		   					<h2>Stop the mess Immediately!<br><br>Get PooPrints DNA protection for your Resident's!</h2>
		   					<p><a href="get_a_quote.php" class="btn btn-primary btn-lg">Learn more</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

-->

	<div id="besocial-services-section">
		<div class="container">
			<div class="row">
				<div class="text-center">
						<h2><b>Get the Facts!</b></h2>
				</div>
				<div class="col-md-10 col-md-offset-1">
				<div class="video-container">
					<iframe width="350" height="185.94" src="https://www.youtube.com/embed/rrmljHDrZXo" frameborder="0" allowfullscreen></iframe>
				</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- How it works section -->


	<div id="besocial-how-section" class="besocial-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">
					<h2>How It Works</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-dog"></i>
						<div class="desc">
							<h3>1. Collect DNA sample</h3>
							<img src="images/how_it_works_1.png" alt="" class="img-responsive">
							<p>Gentle cheek swab collect DNA sample</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class="icon-poo"></i>
						<div class="desc">
							<h3>2. Genetic Profile is Registered</h3>
							<img src="images/how_it_works_2.png" alt="" class="img-responsive">
							<p>Each dog's genetic profile is registered and uploaded securely to the DNA WORLD PET registry DATABASE.</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 animate-box">
					<div class="services">
					
						<div class="desc">
							<h3>3. PooPrints Waste sample</h3>
							<img src="images/how_it_works_3.png" alt="" class="img-responsive">
							<p>Use of the PooPrints Waste  Sample Collection Kit to collect a nickel-sized sample.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	
<div id="besocial-how2-section" class="besocial-light-grey-section">
<div class="container">
	<div class="col-md-4 animate-box">
					<div class="services">
						<i class=""></i>
						<div class="desc">
							<h3>4. Return the sample</h3>
							<img src="images/how_it_works_4.png" alt="" class="img-responsive">
							<p>Return the sample in its resealable container to BioPet Laboratories for PooPrints sample processing.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class=""></i>
						<div class="desc">
							<h3>5. Unique Genetic Profile</h3>
							<img src="images/how_it_works_5.png" alt="" class="img-responsive">
							<p>The unique genetic profile is generated and matched to the offending dog.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<i class=""></i>
						<div class="desc">
							<h3>6. Survey Results</h3>
							<img src="images/results.png" alt="" class="img-responsive">
							<p>92.5 % sastifaction</p>
						</div>
					</div>
				</div>

			</div>
	</div>




	

	<!-- Info Section
				<div> 
				<br>
				<center>
				<h2><b>PooPrints Tutorials</b></h2>


				</div>
				<div>
				<center><iframe width="350" height="185.94" style="border-width:0" src="https://www.youtube.com/embed/fT1ZGtOK5l4" frameborder="0" allowfullscreen></iframe></center>
				</div><br>
				<div>

				<center><iframe width="350" height="185.94" style="border-width:0" src="https://www.youtube.com/embed/bbmfJqhuMK0" frameborder="0" allowfullscreen></iframe></center>
				</div>
	-->
	
	<div id="besocial-how-section">
		<div class="container">
			<div class="row">	
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">
					<br><br><h2><b>Implementing PooPrints</b></h2><br><br>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Strategy</h3>
					<p>Each resident dog is registered in BioPet Laboratories’ patented DNA World Pet Registry by a simple cheek swab.</p>
					<p><a href="get-results.php" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Analysis</h3>
					<p>When un-scooped waste is found, a small sample is collected and submitted to our lab for analysis and comparison to the dogs in the database. Results are emailed to property management in two weeks.</p>
					<p><a href="get-results.php" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-4 text-center item-block animate-box">
					<h3>Reliable</h3>
					<p>A match is only reported when the canine and waste samples match on every available point with no discrepancies.</p>
					<p><a href="get-results.php" class="btn btn-primary btn-outline with-arrow">Learn more <i class="icon-arrow-right"></i></a></p>
				</div>

			</div>
		</div>
	</div>

<!--
	<div id="besocial-services-section" class="besocial-light-grey-section">
		<div class="container">

			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">
					
					<h2>Each resident dog is registered in BioPet Laboratories’ patented DNA World Pet Registry by a simple cheek swab.</h2>
					<h3>When un-scooped waste is found, a small sample is collected and submitted to our lab for analysis and comparison to the dogs in the database. Results are emailed to property management in two weeks.</h3>

					<p><a href="get_a_quote.php" class="btn btn-primary btn-lg">Learn more</a></p>

					<h3>A match is only reported when the canine and waste samples match on every available point with no discrepancies.</h3>

				
					<div>
						<h2><b>Get the Facts!</b></h2>
					</div>
					<div>
						<center>
							<iframe width="350" height="185.94" style="border-width:0" src="http://interactive.tegna-media.com/video/embed/embed.html?id=1797519&type=video&title=Doggie%20DNA%3A%20Cure%20for%20pooch%20pollution&site=51&playerid=6918249996581&dfpid=32805352&dfpposition=Video_prestream_external§ion=home"></iframe>
						</center>
					</div><br>
					<div>
						<center>
							<iframe width="350" height="185.94" src="https://www.youtube.com/embed/mxOpCf8FgpY" frameborder="0" allowfullscreen></iframe>
						</center>
					</div><br>
				
			</div>
		</div>
	</div>
	-->


<!-- IN THE NEWS SECTIONS-->

	<div id="besocial-pricing-section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<center><h2>In The News</h2></center>
					<div class="video-container">
						<iframe width="350" height="185.94" src="https://www.youtube.com/embed/7xVX6s0GaUA" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<br><br>
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">

				</div>
				
			</div>
			<div class="row">
				<div class="pricing">
					<div class="col-md-4 animate-box">
						<div class="price-box"><a href="http://www.torontosun.com/2016/09/07/a-big-pile-of-dna">
							<div class="price">TORONTO SUN<small></small></div>
								<center>
									<img src="images/1.jpg" alt="" class="img-responsive">
								</center>
							<br>
								<h2 class="pricing-plan">A big pile of DNA</h2>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box"><a href="http://www.metronews.ca/news/toronto/2016/09/06/poo-prints-canada-launches-in-toronto.html">
							<div class="price">TORONTO METRO<small></small></div>
								<center>
									<img src="images/2.jpg" alt="" class="img-responsive">
								</center>
							<br>
								<h2 class="pricing-plan">DNA testing for doggy doo doo</h2>
						</div>
					</div>

					<div class="col-md-4 animate-box">
						<div class="price-box"><a href="http://indie88.com/toronto-dog-poop-police-coming-to-the-rescue/">
							<div class="price">INDIE 88<small></small></div>
								<center>	
									<img src="images/3.jpg" alt="" class="img-responsive">
								</center>
							<br>
								<h2 class="pricing-plan">Dog poop police</h2>		
						</div>
					</div>
					
				</div>
			</div>
			
				
				<div class="col-md-12 text-center animate-box">
					<p><a href="in-the-news.php" class="btn btn-primary with-arrow">View More Articles <i class="icon-arrow-right"></i></a></p>
				</div>
			
		</div>
	</div>



	
	<!-- TESTIMONIALS -->


	<div id="besocial-testimony-section" class="besocial-light-grey-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">
					<h2>Testimonials</h2>
				
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-offset-0 to-animate">
					<div class="wrap-testimony animate-box">
						<div class="owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
								
									<blockquote>
										<p>"Since implementing them over one year ago, we have received such positive feed-back from our current residents as well as new prospects that tour our communities. The program was so easy to implement, even on a stabilized property, and the staff at Bio Pet Vet Labs was easy to work with to train the staff and answer any questions that they may have had."</p>
									</blockquote>
									<span>Michelle Mann, Regional Manager <a href="http://www.unitedresidentialproperties.com" class="twitter">URP Management, LLC</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
								
									<blockquote>
										<p>"We believe the PooPrints program has been a huge success for us. We no longer have dog waste complaints, our properties are clean and waste free, and our resident retention rate has increased. The testing process is easy, the BioPet staff is very helpful, and all DNA results are guaranteed 100%. On behalf of JJS Property Management, I would highly recommend the PooPrints program to any property owner looking to increase the overall quality of their pet friendly locations."</p>
									</blockquote>
									<span> <a href="http://www.jjsproperty.com" class="twitter">JJS Property Management, Inc.</a></span>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									
									<blockquote>
										<p>"We had 71 dogs in our community that we had to collect DNA samples from. PooPrints provided all the letters to send out; I just had to put in my community name! All the residents but three made their appointments and came in before the deadline. I sent the warning letter to the three apartments that we had not heard from and they responded promptly. We have had zero objections to this program thus far and countless compliments on how well it has worked. Our grounds are finally poop free and I haven’t even had to fine anyone yet for not picking up after their dog’s waste! This program was an answered prayer."</p>
									</blockquote>
									<span>Adam C., Property Manager <a href="http://www.legendsatoakgrove.com" class="twitter">Legends at Oak Grove</a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>


			<br><div class="col-md-12 text-center animate-box">
					<p><a href="testimonials.php" class="btn btn-primary with-arrow">View More Testimonials <i class="icon-arrow-right"></i></a></p>
				</div>
		</div>
	</div>

	<div id="besocial-testimony-section">
		<div class="container">
			<div class="row">
				<div class="text-center">
						<h2><b>DNA collection made easy</b></h2>
				</div>
				<div class="col-md-6">
					<br><div class="video-container">
						<iframe width="350" height="185.94" src="https://www.youtube.com/embed/3w3bDbAKwcM" frameborder="0" allowfullscreen></iframe><br>
					</div>
				</div>
				<div class="col-md-6">
					<br><div class="video-container">
						<iframe width="350" height="185.94" src="https://www.youtube.com/embed/IOCqxK4N2AY" frameborder="0" allowfullscreen></iframe><br>
					</div>
				</div>			
			</div>
		</div>
	</div>


<!--  Embedded video section
	<div id="besocial-services-section" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center besocial-heading animate-box">
					<h2><a href="http://www.wbir.com/news/local/poo-prints-a-way-to-end-dog-waste-nuisance/40757300">PooPrints: A way to end dog waste nuisance</a></h2>
					<p></p>
				</div>
			</div>
			<center><iframe width="640" height="360" style="border-width:0" src="http://interactive.tegna-media.com/video/embed/embed.html?id=1797519&type=video&title=Doggie%20DNA%3A%20Cure%20for%20pooch%20pollution&site=51&playerid=6918249996581&dfpid=32805352&dfpposition=Video_prestream_external§ion=home"></iframe></center>
				
			</div>
		</div>
	</div> -->


<div class="besocial-contact animate-box besocial-light-grey-section">
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
						<li><i class="icon-envelope"></i><a href="#">info@PooPrintscdn.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.PooPrintscdn.com</a></li>
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
			


	<div class="besocial-cta" style="background-image: url(images/slide_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<h3>What are you waiting for?</h3>
				<p><a href="get_a_quote.php" class="btn btn-primary btn-outline with-arrow">Get started now! <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>

<?php include "includes/footer.php";?>

