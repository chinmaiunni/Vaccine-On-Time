<?php

include("../Assets/Connection/Connection.php");
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';

if (isset($_POST["btn_pay"])) {
	$booking = "SELECT MAX(booking_id) as id ,user_id FROM tbl_booking WHERE booking_status=0 AND user_id=" . $_SESSION['uid'];
	$result = $con->query($booking);
	$data = $result->fetch_assoc();
	$id = $data['id'];

	 $a = "UPDATE tbl_booking SET booking_status=1 WHERE booking_id=". $_GET['booking_id'];
	if ($con->query($a)) {
		// Fetch user and center details for the email
		$s = "SELECT * FROM tbl_newuser WHERE user_id=" . $_SESSION['uid'];
		$res = $con->query($s);
		$d = $res->fetch_assoc();

		$selCenter = "
		SELECT *
		FROM tbl_hospitalvaccine AS hv 
		INNER JOIN tbl_center AS c ON hv.center_id = c.center_id 
		WHERE hv.hospitalvaccine_id = " . $_SESSION['hid'];
		$res=$con->query($selCenter);
		$centerData=$res->fetch_assoc();

		$userEmail = $d['user_email'];
		$userName = $d['user_name']; // Assuming user_name field exists
		$centerName = $centerData['center_name']; // Assuming hospitalvaccine_name field exists

		// Send confirmation email
		$mail = new PHPMailer();

		$smtpConfig = require __DIR__ . '/../Assets/connection/smtp.local.php';
    $mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = $smtpConfig['username'];
		$mail->Password = $smtpConfig['password'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;

		$mail->setFrom($smtpConfig['from']);
		$mail->addAddress($userEmail);

		$mail->isHTML(true);
		$mail->Subject = "Vaccine Slot Booking Confirmation";

		// Formal email content
		$mail->Body = "
            Dear " . $userName . ",<br><br>
            Your vaccine slot has been successfully booked at <strong>" . $centerName . "</strong>.<br><br>
            <strong>Booking Details:</strong><br>
            Slot Number: " . $_SESSION['slot_number'] . "<br>
            Date: " . $_SESSION['fordate'] . "<br>
            Amount: $" . $_SESSION['amount'] . "<br><br>
            Thank you for choosing our service.<br><br>
            Best Regards,<br>
            Vaccine On Time";

		// Send the email
		if ($mail->send()) {
			echo "<script>alert('Confirmation email has been sent.');</script>";
		} else {
			echo "<script>alert('Slot booked, but email failed to send.');</script>";
		}

		// Redirect to success page
		echo "<script>window.location='Success.html';</script>";
	} else {
		echo "<script>alert('Failed to update booking status.')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			background-color: #f5f5f5;
			font-family: Arial, Helvetica, sans-serif;
		}

		.wrapper {
			background-color: #fff;
			width: 500px;
			padding: 25px;
			margin: 25px auto 0;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
		}

		.wrapper h2 {
			background-color: #fcfcfc;
			color: #7ed321;
			font-size: 24px;
			padding: 10px;
			margin-bottom: 20px;
			text-align: center;
			border: 1px dotted #333;
		}

		h4 {
			padding-bottom: 5px;
			color: #7ed321;
		}

		.input-group {
			margin-bottom: 8px;
			width: 100%;
			position: relative;
			display: flex;
			flex-direction: row;
			padding: 5px 0;
		}

		.input-box {
			width: 100%;
			margin-right: 12px;
			position: relative;
		}

		.input-box:last-child {
			margin-right: 0;
		}

		.name {
			padding: 14px 10px 14px 50px;
			width: 100%;
			background-color: #fcfcfc;
			border: 1px solid #00000033;
			outline: none;
			letter-spacing: 1px;
			transition: 0.3s;
			border-radius: 3px;
			color: #333;
		}

		.name:focus,
		.dob:focus {
			-webkit-box-shadow: 0 0 2px 1px #7ed32180;
			-moz-box-shadow: 0 0 2px 1px #7ed32180;
			box-shadow: 0 0 2px 1px #7ed32180;
			border: 1px solid #7ed321;
		}

		.input-box .icon {
			width: 48px;
			display: flex;
			justify-content: center;
			position: absolute;
			padding: 15px;
			top: 0px;
			left: 0px;
			bottom: 0px;
			color: #333;
			background-color: #f1f1f1;
			border-radius: 2px 0 0 2px;
			transition: 0.3s;
			font-size: 20px;
			pointer-events: none;
			border: 1px solid #000000033;
			border-right: none;
		}


		.name:focus+.icon {
			background-color: #7ed321;
			color: #fff;
			border-right: 1px solid #7ed321;
			border-right: none;
			transition: 1s;
		}

		.radio:checked+label {
			background-color: #7ed321;
			color: #fcfcfc;
			border-right: 1px solid #7ed321;
			border-right: none;
			transition: 1s;
		}

		.dob {
			width: 30%;
			padding: 14px;
			text-align: center;
			background-color: #fcfcfc;
			transition: 0.3s;
			outline: none;
			border: 1px solid #c0bfbf;
			border-radius: 3px;
		}

		.radio {
			display: none;
		}

		.input-box label {
			width: 50%;
			padding: 13px;
			background-color: #fcfcfc;
			display: inline-block;
			float: left;
			text-align: center;
			border: 1px solid #c0bfbf;
		}

		.input-box label:first-of-type {
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px;
			border-right: none;
		}

		.input-box label:last-of-type {
			border-top-left-radius: 3px;
			border-bottom-left-radius: 3px;
		}

		.radio:checked {
			background-color: green;
			color: #fff;
		}

		input[type=submit] {
			width: 100%;
			background: transparent;
			border: none;
			background: #7ed321;
			color: #fff;
			padding: 15px;
			border-radius: 4px;
			font-size: 16px;
			transition: all 0.35s ease;
		}

		input[type=submit]:hover {
			cursor: pointer;
			background: #5eb105;
		}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<title>PSST - Payement Gateway</title>
</head>

<body>
	<div class="wrapper">
		<h2>Payment Gateway</h2>
		<form method="POST">
			<h4>Account</h4>
			<div class="input-group">
				<div class="input-box">
					<input class="name" type="text" name="txtname" id="txtname" placeholder="First Name" required
						autocomplete="off">

					<i class="fa fa-user icon" aria-hidden="true"></i>
				</div>

			</div>


			<div class="input-group">
				<div class="input-box">
					<h4>Payment Details</h4>
					<input type="radio" required name="rdbpay" id="cc" checked class="radio">
					<label for="cc">
						<span><i class="fa fa-cc-visa" aria-hidden="true"></i>Credit Card</span>
					</label>
					<input type="radio" required name="rdbpay" id="dc" class="radio">
					<label for="dc">
						<span><i class="fa fa-cc-visa" aria-hidden="true"></i>Debit Card</span>
					</label>
				</div>
			</div>
			<div class="input-group">
				<div class="input-box">
					<input class="name" type="tel" id="txtcardno" name="txtcardno" required
						data-mask="0000 0000 0000 0000" placeholder="Card Number">
					<i class="fa fa-credit-card icon" aria-hidden="true"></i>
				</div>
			</div>
			<div class="input-group">
				<div class="input-box">
					<input class="name" type="text" name="txtcvc" id="txtcvc" data-mask="000" placeholder="CVC"
						required>
					<i class="fa fa-user icon" aria-hidden="true"></i>
				</div>
				<div class="input-box">
					<input class="name" type="text" name="txtdate" id="txtdate" data-mask="00 / 00"
						placeholder="EXP DATE" required>
					<i class="fa fa-calendar icon" aria-hidden="true"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<input type="submit" name="btn_pay" value="PAY NOW">
				</div>
			</div>
		</form>
	</div>

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js'></script>

</html>