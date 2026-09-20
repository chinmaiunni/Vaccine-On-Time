







.
<!-- <?php
session_start();
include('../Assets/connection/connection.php');
if(isset($_POST["btn_login"]))
{
	$Email=$_POST['txt_email'];
	$Password=$_POST['txt_pwd'];
	
	$user="select * from tbl_newuser where user_email='".$Email."'and user_password='".$Password."'";
	$rowuser=$con->query($user);
	
	$admin="select * from tbl_admin where admin_email='".$Email."'and admin_password='".$Password."'";
	$rowadmin=$con->query($admin);
	
	$center="select * from tbl_center where center_email='".$Email."'and center_password='".$Password."'";
	$rowcenter=$con->query($center);
	
	if($datauser=$rowuser->fetch_assoc())
	{
		$_SESSION['uid']=$datauser['user_id'];
		$_SESSION['uname']=$datauser['user_name'];
		header('location:../Users/Homepage.php');
	}
	else if($dataadmin=$rowadmin->fetch_assoc())
	{
		$_SESSION['aid']=$dataadmin['admin_id'];
		$_SESSION['aname']=$dataadmin['admin_name'];
		header('location:../Admin/Homepage.php');
	}
	else if($datacenter=$rowcenter->fetch_assoc())
	{
		$_SESSION['cid']=$datacenter['center_id'];
		$_SESSION['cname']=$datacenter['center_name'];
		header('location:../VaccineCenter/Homepage.php');
	}
	
	else
	{
		?>
        <script>
		alert("Invalid");
		window.location="login.php";
		</script>
        <?php
		
	}
}
	?>  -->

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h3><u><center>Login</center></u></h3>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_pwd"></label>
      <input type="text" name="txt_pwd" id="txt_pwd" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_login" id="btn_login" value="Login" />
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="NewUser.php">New User</a>/<a href="NewCentre.php">New Centre</a></div></td>
    </tr>
  </table>
</form>
</body>
</html> -->

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; /* Updated font */
            background-color: #dceefb; /* Calm light blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 800px; /* Total width of the form and image combined */
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        .login-box {
            width: 50%; /* Half the width for the login form */
            padding: 40px;
            box-sizing: border-box;
        }
        .login-box h3 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600; /* Bold font for heading */
            font-size: 24px;
        }
        .login-box input[type="text"], .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: 'Poppins', sans-serif; /* Apply font to inputs */
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #007b83; /* Calming teal button */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px; /* Larger, bold font */
            font-weight: 600;
            cursor: pointer;
            font-family: 'Poppins', sans-serif; /* Apply font to button */
        }
        .login-box input[type="submit"]:hover {
            background-color: #005f61;
        }
        .login-box .extra-links {
            text-align: center;
            margin-top: 10px;
            font-size: 14px; /* Slightly smaller text */
        }
        .login-box .extra-links a {
            color: #007b83;
            text-decoration: none;
            font-weight: 500;
        }
        .login-box .extra-links a:hover {
            text-decoration: underline;
        }
        .side-image {
            width: 50%; /* Half the width for the image */
            background-image: url('../Assets/Templetes/Main/img/why book.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        /* Adding a semi-transparent overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .overlay p {
            color: white;
            font-size: 22px; /* Slightly larger text */
            font-weight: 500;
            text-align: center;
            padding: 20px;
            font-family: 'Poppins', sans-serif; /* Apply new font to text */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h3>Login</h3>
            <form id="form1" name="form1" method="post" action="">
                <input type="text" name="txt_email" id="txt_email" placeholder="Enter your email" />
                <input type="password" name="txt_pwd" id="txt_pwd" placeholder="Enter your password" />
                <input type="submit" name="btn_login" id="btn_login" value="Login" />
            </form>
            <div class="extra-links">
                <a href="ForgotPass.php">Forgot password?</a><br />
                <a href="NewUser.php">New User</a> / <a href="NewCentre.php">New Centre</a>
            </div>
        </div>
        <div class="side-image">
            <div class="overlay">
                <p><b>We are determined</b><br><b> for your future</b><br><b>Let's get connected.</b></p>
            </div>
        </div>
    </div>
</body>
</html>
