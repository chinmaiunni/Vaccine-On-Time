<?php
session_start();
include("../Assets/connection/connection.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';

function generateOTP($length = 6) {
    $digits = '0123456789';
    $otp = '';
    for ($i = 0; $i < $length; $i++) {
        $otp .= $digits[rand(0, strlen($digits) - 1)];
    }
    return $otp;
}

function otpEmail($email,$otp){
    $mail = new PHPMailer(true);

    $smtpConfig = require __DIR__ . '/../Assets/connection/smtp.local.php';
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $smtpConfig['username'];
    $mail->Password = $smtpConfig['password'];
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom($smtpConfig['from']);
  
    $mail->addAddress($email);
  
    $mail->isHTML(true);
    $message = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #fff;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .footer {
            font-size: 12px;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Your OTP Code
        </div>
        <p>Hello,</p>
        <p>Here is your One-Time Password (OTP) for verification:</p>
        <h2 style="font-size: 36px; color: #333;">' . $otp . '</h2>
        <p>This OTP is valid for the next 5 minutes. Please use it to complete your verification process.</p>
        <p>If you did not request this OTP, please ignore this email or contact support if you have concerns.</p>
        <p>Best regards,<br>Company Name</p>
        <div class="footer">
            This is an automated message. Please do not reply.
        </div>
    </div>
</body>
</html>
';
    $mail->Subject = "Reset your password";  //Your Subject goes here
    $mail->Body = $message; //Mail Body goes here
  if($mail->send())
  {
    ?>
<script>
    alert("Email Send")
    window.location="OTPValidator.php";
</script>
    <?php
  }
  else
  {
    ?>
<script>
    alert("Email Failed")
</script>
    <?php
  }
}

if(isset($_POST['btn_submit'])){
    $email=$_POST['txt_email'];
    $selUser="select * from tbl_newuser where user_email='".$email."'";	
	$selSeller="select * from tbl_center where center_email='".$email."'";
	
	
	$resUser=$con->query($selUser);
    $resSeller=$con->query($selSeller);
	
	
    $otp = generateOTP();
    $_SESSION['otp'] = $otp;
    if($userData=$resUser->fetch_assoc())
	{
		$_SESSION['ruid'] = $userData['user_id'];
		otpEmail($email,$otp);
	}
	else if($sellerData=$resSeller->fetch_assoc())
	{
		$_SESSION['rsid'] = $sellerData['center_id'];
		otpEmail($email,$otp);
	}
	
	
	else{
	?>
    	<script>
		alert("Account Doesn't Exists")
		</script>
    <?php	
	}

}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border='1'>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txt_email" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Reset" name="btn_submit"></td>
                
            </tr>
        </table>
    </form>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovative Teal Form</title>
    <style>
        :root {
            --primary-color: #00796b;
            --secondary-color: #4db6ac;
            --accent-color: #e0f2f1;
            --text-color: #333;
        }
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
        }
        .input-group {
            position: relative;
            margin-bottom: 30px;
        }
        .input-group input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: var(--text-color);
            border: none;
            border-bottom: 2px solid var(--secondary-color);
            outline: none;
            background: transparent;
            transition: 0.3s;
        }
        .input-group label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: var(--text-color);
            pointer-events: none;
            transition: 0.3s ease all;
        }
        .input-group input:focus ~ label,
        .input-group input:valid ~ label {
            top: -20px;
            font-size: 12px;
            color: var(--primary-color);
        }
        .input-group .highlight {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 2px;
            width: 0;
            background: var(--primary-color);
            transition: 0.3s ease all;
        }
        .input-group input:focus ~ .highlight {
            width: 100%;
        }
        .submit-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: block;
            width: 100%;
            margin-top: 20px;
        }
        .submit-btn:hover {
            background: var(--secondary-color);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transform: translateY(-2px);
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating-shape {
            position: absolute;
            opacity: 0.7;
            animation: float 6s ease-in-out infinite;
        }
        .shape1 { top: 10%; left: 10%; width: 50px; height: 50px; background: var(--accent-color); border-radius: 50%; }
        .shape2 { top: 20%; right: 10%; width: 70px; height: 70px; background: var(--secondary-color); border-radius: 25%; transform: rotate(45deg); }
        .shape3 { bottom: 10%; left: 20%; width: 60px; height: 60px; background: var(--primary-color); clip-path: polygon(50% 0%, 0% 100%, 100% 100%); }
    </style>
</head>
<body>
    <div class="floating-shape shape1"></div>
    <div class="floating-shape shape2"></div>
    <div class="floating-shape shape3"></div>
    <div class="form-container">
        <h2>Reset Password</h2>
        <form action="" method="post">
            <div class="input-group">
                <input type="text" name="txt_email" required>
                <span class="highlight"></span>
                <label>Email</label>
            </div>
            <button type="submit" class="submit-btn" name="btn_submit">Reset</button>
        </form>
    </div>
</body>
</html> -->

<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Reset</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa; /* Light teal background */
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }

        .email-reset-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            text-align: center;
        }

        /* Heading for Reset Email (Same style as Reset Password) */
        .email-reset-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b; /* Optional: Adds underline */
            padding-bottom: 10px;
        }

        .email-reset-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .email-reset-container td {
            padding: 10px;
        }

        .email-reset-container label {
            font-weight: bold;
            color: #004d40; /* Dark teal */
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .email-reset-container input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
        }

        .email-reset-container input[type="submit"] {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 14px;
            font-weight: bold;
            background-color: #00796b; /* Teal color */
        }

        .email-reset-container input[type="submit"]:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        .submit-buttons {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-reset-container">
        <h1 class="heading">Reset Email</h1> <!-- Same styled heading -->
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="txt_email">Email</label></td>
                    <td><input type="text" name="txt_email" id="txt_email" placeholder="Enter your email" /></td>
                </tr>
                <tr>
                    <td colspan="2" class="submit-buttons">
                        <input type="submit" value="Reset" name="btn_submit" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
