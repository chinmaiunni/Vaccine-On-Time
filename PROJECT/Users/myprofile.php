<?php

include('../Assets/connection/connection.php');
include('header.php');
 $sel="select * from tbl_newuser u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where u.user_id='".$_SESSION['uid']."'";
$row=$con->query($sel);
$data=$row->fetch_assoc();

?>
 <!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="414" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center"><img src="../Assets/File/User/<?php echo $data['user_photo']?>" width="150" height="150"/></div></td>
    </tr>
    <tr>
      <td width="225">Name</td>
      <td width="173"><?php echo $data['user_name'] ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $data['user_email'] ?></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><?php echo $data['user_contact'] ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $data['user_address'] ?></td>
    </tr>
    <tr>
      <td>District</td>
      <td><?php echo $data['district_name'] ?></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><?php echo $data['place_name'] ?></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><a href="Editprofile.php">Edit Profile</a> || <a href="Changepassword.php">Change Password</a></div></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
// include('footer.php');
?>  -->

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
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

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            /* font-weight: bold; */
        }

        

        .profile-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
        }

        .profile-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b; /* Optional: Adds underline */
            padding-bottom: 10px;
        }

        .profile-container img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 4px solid #00796b; /* Dark teal border */
            margin-bottom: 20px;
        }

        .profile-container h1 {
            font-size: 22px;
            color: #00796b; /* Dark teal */
            margin: 20px 0 10px;
        }

        .profile-container p {
            font-size: 14px;
            color: #555;
            margin: 5px 0;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-label {
            font-weight: bold;
            color: #004d40; /* Darker teal for labels */
            text-align: left;
            padding-left: 5ch; /* Moves label fields to the right */
        }

        .address-field {
            white-space: normal;
            word-wrap: break-word;
        }

        .action-buttons {
            margin-top: 20px;
        }

        .action-buttons a {
            text-decoration: none;
            color: #ffffff;
            background-color: #00796b;
            padding: 10px 20px;
            border-radius: 8px;
            margin: 0 10px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .action-buttons a:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            padding: 10px 20px;
        }

    </style>
</head>
<body>
    <div class="profile-container">
        <h1 class="heading">My Profile</h1> <!-- Moved heading inside the profile container -->

        <img src="../Assets/File/User/<?php echo $data['user_photo']?>" alt="User Photo" />
        <h1><?php echo $data['user_name'] ?></h1>
        <p><?php echo $data['user_email'] ?></p>

        <table>
            <tr>
                <td class="info-label">Contact</td>
                <td><?php echo $data['user_contact'] ?></td>
            </tr>
            <tr>
                <td class="info-label">Address</td>
                <td class="address-field"><?php echo nl2br($data['user_address']); ?></td>
            </tr>
            <tr>
                <td class="info-label">District</td>
                <td><?php echo $data['district_name'] ?></td>
            </tr>
            <tr>
                <td class="info-label">Place</td>
                <td><?php echo $data['place_name'] ?></td>
            </tr>
        </table>

        <div class="action-buttons">
            <a href="Editprofile.php">Edit Profile</a>
            <a href="Changepassword.php">Change Password</a>
        </div>
    </div>

   
<?php 
include('footer.php');
  ?>
 
</body>
</html>
