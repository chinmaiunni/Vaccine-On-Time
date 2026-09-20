<?php

include('../Assets/connection/connection.php');
include('header.php');
 $sel="select * from tbl_newuser where user_id='".$_SESSION['uid']."'";
$row=$con->query($sel);
$data=$row->fetch_assoc();

if(isset($_POST['btn_edit']))
{
	$Name=$_POST['txt_name'];
	$Email=$_POST['txt_email'];
	$Contact=$_POST['txt_contact'];
	$Address=$_POST['txt_address'];
	$updQry="update tbl_newuser set user_name='".$Name."',user_email='".$Email."',user_contact='".$Contact."',user_address='".$Address."' where user_id='".$_SESSION['uid']."'";
	if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated")
	window.location="myprofile.php"
	</script>
    <?php
	}
	}
?>
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" value="<?php echo $data['user_name'] ?>"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" value="<?php echo $data['user_email'] ?>" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" value="<?php echo $data['user_contact'] ?>" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5"><?php echo $data['user_address'] ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_edit" id="btn_edit" value="Edit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
 <?php
// include('footer.php'); -->
?> -->

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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

        .edit-profile-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            flex-grow: 1;
        }

        /* Heading for Edit Profile */
        .edit-profile-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b; /* Optional: Adds underline */
            padding-bottom: 10px;
        }

        .edit-profile-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .edit-profile-container td {
            padding: 10px;
        }

        .edit-profile-container label {
            font-weight: bold;
            color: #004d40; /* Dark teal */
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .edit-profile-container input[type="text"],
        .edit-profile-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
        }

        .edit-profile-container textarea {
            resize: vertical;
        }

        .edit-profile-container .action-buttons {
            margin-top: 20px;
        }

        .edit-profile-container input[type="submit"] {
            text-decoration: none;
            color: #ffffff;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-profile-container input[type="submit"]:hover {
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
    
<div class="edit-profile-container">
    <h1 class="heading">Edit Profile</h1> <!-- Same heading style as My Profile -->

    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>
                    <label for="txt_name">Name</label>
                    <input type="text" name="txt_name" id="txt_name" value="<?php echo $data['user_name'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txt_email">Email</label>
                    <input type="text" name="txt_email" id="txt_email" value="<?php echo $data['user_email'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txt_contact">Contact</label>
                    <input type="text" name="txt_contact" id="txt_contact" value="<?php echo $data['user_contact'] ?>" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="txt_address">Address</label>
                    <textarea name="txt_address" id="txt_address" cols="45" rows="5"><?php echo $data['user_address'] ?></textarea>
                </td>
            </tr>
        </table>

        <div class="action-buttons">
            <input type="submit" name="btn_edit" id="btn_edit" value="Edit" />
        </div>
    </form>
</div>

  <?php
  include('footer.php'); 
   ?>


</body>
</html>
