
<?php

/*******************helper functions***********************/


function clean($string) {

	return htmlentities($string);

}

function redirect($location) {

	return header("Location: {$location}");

}

function set_message($message) {

	if(!empty($message)){

		$_SESSION['message'] = $message;

	} else {

		$message = "";

	}

}

function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];

		unset($_SESSION['message']);

	}
}


function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token;

}

function send_email($email, $subject, $msg, $headers){

return mail($email, $subject, $msg, $headers);


}

/*******************Validation functions***********************/

function email_exists($email) {

	$sql = "SELECT id FROM users WHERE email = '$email'";

	$result = query($sql);

	if(row_count($result) == 1) {
		
		return true;

	} else {

		return false;

	}
}



function validation_errors($error_message) {
	
	$error_message = <<<DELIMITER

				<div class="alert alert-danger alert-dismissible fade in" role="alert">
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
  				<strong> Warning! </strong> $error_message 
				</div>
DELIMITER;
return $error_message;
}


function validate_user_registration(){

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		$first_name           = clean($_POST['first_name']);
		$email                = clean($_POST['email']);

		if(register_user($first_name, $email)) {

			set_message("<p class='success text-center'> The PDF has been sent to the email address provided, make sure to review both your main folder and your spam folder");
			redirect("Seriously.php");

		} else {

			set_message("<p class='success text-center'> Please insert a valid name and email address");

			redirect("Seriously.php");

		}


	} //POST REQUEST

}  // FUNCTION 

/*******************Register User***********************/


function register_user($first_name, $email) {

	$first_name = escape($first_name);
	$email = escape($email);

		$sql = "INSERT INTO users(first_name, email, active)";
		$sql.= " VALUES('$first_name', '$email', 0)";
		$result = query($sql);
		confirm($result);

		$subject = "PDF Pooprints";
		$msg = " Thank you for your interest in our solution

		Here are the links to the PDF's you have requested

		Human Diseases Transmitted by Dog Poop” published by CPHA :
		
		http://pooprintscdn.com/pooprintscdn.com/downloads/Diseases%20associated%20to%20Dog%20waste%20-%20Resident's%20Should%20Know!.pdf

		The scoop on un-scooped Dog Poop” published by the CPHA

		http://pooprintscdn.com/pooprintscdn.com/downloads/The%20Scoop%20on%20Dog%20waste%20-%20Resident's%20Information.pdf


		";
		
		$headers = "From: noreply@pooprintscdn.com";

		send_email($email, $subject, $msg, $headers);

		return true;

	} 







?>
