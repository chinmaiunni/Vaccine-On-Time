<?php

include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_cpwd"]))
{
	$user="select * from tbl_newuser where user_id=".$_SESSION['uid'];
	$resuser=$con->query($user);
	$data=$resuser->fetch_assoc();
	
	$dbpass=$data['user_password'];
	$old=$_POST['txt_opwd'];
	$new=$_POST['txt_npwd'];
	$re=$_POST['txt_rpwd'];
	
	if($dbpass==$old)
	{
		if($new==$re)
		{
			$updQry="update tbl_newuser set user_password='".$new."' where user_id='".$_SESSION['uid']."'";
			if($con->query($updQry))
			{
			?>
			<script>
			alert("Password Changed")
			window.location="myprofile.php"
			</script>
			<?php
			}
			else
			{
				?>
			<script>
			alert("Error")
			</script>
			<?php
			}
			
		}
	
		else
		{
		?>
			<script>
			alert("Mis Match")
			</script>
			<?php
		}
	}
		
		else
		{
			?>
			<script>
			alert("Incorrect")
			
			</script>
			<?php
			
		}
	}
	
	

?>
<!-- <form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Old password</td>
      <td><label for="txt_pwd"></label>
      <input type="text" name="txt_opwd" id="txt_opwd" /></td>
    </tr>
    <tr>
      <td>New password</td>
      <td><label for="txt_npwd"></label>
      <input type="text" name="txt_npwd" id="txt_npwd" /></td>
    </tr>
    <tr>
      <td>Re-Type password</td>
      <td><label for="txt_rpwd"></label>
      <input type="text" name="txt_rpwd" id="txt_rpwd" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_cpwd" id="btn_cpwd" value="Change Password" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
// include('footer.php');
?> -->


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        }

        header, footer {
            background-color: #004d40; /* Dark teal for header and footer */
            color: white;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
        }

        .change-password-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            flex-grow: 1;
        }

        .change-password-container h1 {
            font-size: 22px;
            color: #00796b; /* Dark teal */
            margin-bottom: 20px;
        }

        .change-password-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .change-password-container td {
            padding: 10px;
            text-align: left;
        }

        .change-password-container label {
            font-weight: bold;
            color: #004d40; /* Dark teal */
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .change-password-container input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
        }

        .action-buttons {
            margin-top: 20px;
            text-align: center;
        }

        .action-buttons input[type="submit"] {
            text-decoration: none;
            color: #ffffff;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .action-buttons input[type="submit"]:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        footer {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 10px 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>Change Password</h1>
</header>

<div class="change-password-container">
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td><label for="txt_opwd">Old password</label></td>
                <td><input type="text" name="txt_opwd" id="txt_opwd" /></td>
            </tr>
            <tr>
                <td><label for="txt_npwd">New password</label></td>
                <td><input type="text" name="txt_npwd" id="txt_npwd" /></td>
            </tr>
            <tr>
                <td><label for="txt_rpwd">Re-Type password</label></td>
                <td><input type="text" name="txt_rpwd" id="txt_rpwd" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <div class="action-buttons">
                        <input type="submit" name="btn_cpwd" id="btn_cpwd" value="Change Password" />
                        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>

<footer>
    <p>Footer Content</p>
</footer>

</body>
</html>
<?php
// include('footer.php');
?> -->

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        }

        header, footer {
            background-color: #004d40; /* Dark teal for header and footer */
            color: white;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
        }

        footer {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 10px 20px;
        }

        .change-password-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            flex-grow: 1;
        }

        /* Heading for Change Password (Same style as My Profile and Edit Profile) */
        .change-password-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b; /* Optional: Adds underline */
            padding-bottom: 10px;
        }

        .change-password-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .change-password-container td {
            padding: 10px;
        }

        .change-password-container label {
            font-weight: bold;
            color: #004d40; /* Dark teal */
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .change-password-container input[type="text"],
        .change-password-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
        }

        .change-password-container input[type="submit"],
        .change-password-container input[type="reset"] {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 14px;
            font-weight: bold;
        }

        .change-password-container input[type="submit"] {
            background-color: #00796b; /* Teal color */
        }

        .change-password-container input[type="submit"]:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        .change-password-container input[type="reset"] {
            background-color: #e0e0e0; /* Light gray color */
            color: #00796b; /* Teal text color */
            margin-left: 10px; /* Space between buttons */
        }

        .change-password-container input[type="reset"]:hover {
            background-color: #b0bec5; /* Darker gray on hover */
        }

        .submit-buttons {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="change-password-container">
        <h1 class="heading">Change Password</h1> <!-- Same styled heading -->
        <form id="form1" name="form1" method="post" action="">
            <table>
                <tr>
                    <td><label for="txt_opwd">Old Password</label></td>
                    <td><input type="password" name="txt_opwd" id="txt_opwd" placeholder="Enter old password" /></td>
                </tr>
                <tr>
                    <td><label for="txt_npwd">New Password</label></td>
                    <td><input type="password" name="txt_npwd" id="txt_npwd" placeholder="Enter new password" /></td>
                </tr>
                <tr>
                    <td><label for="txt_rpwd">Re-Type Password</label></td>
                    <td><input type="password" name="txt_rpwd" id="txt_rpwd" placeholder="Re-enter new password" /></td>
                </tr>
                <tr>
                    <td colspan="2" class="submit-buttons">
                        <input type="submit" name="btn_cpwd" id="btn_cpwd" value="Change Password" />
                        <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    include('footer.php');
    ?>
</body>
</html>
