
<?php include "includes/header.php";?>
<?php include "includes/nav.php";?>

<aside id="besocial-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(images/slide_2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner">
		   					<h2>Get in touch. Don't be shy.</h2>
		   				
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
					
				<div class="col-md-10 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<div class="row">
						<div class="col-md-6">
						<form name="contactform" method="post" action="send_form_email.php">
							<div class="form-group">
								<input for="first_name" class="form-control" placeholder="First Name*" name="first_name" type="text" maxlength="50" size="30">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input for="last_name" class="form-control" placeholder="Last Name*" name="last_name" type="text" maxlength="50" size="30">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input for="email" class="form-control" placeholder="Email*" name="Email" type="text" maxlength="80" size="30">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input for="telephone" class="form-control" placeholder="Phone Number*" name="telephone" type="text" maxlength="30" size="30">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea for="comments" class="form-control" id="" cols="30" rows="7" placeholder="Message" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Submit" class="btn btn-primary">
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

<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">

<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">  
 
 </td>
 
</tr>
 
</table>
 
</form>
</div>

<?php include "includes/footer.php";?>
