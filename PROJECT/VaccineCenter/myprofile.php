<?php
session_start();
include('../Assets/connection/connection.php');
include('header.php');
 $sel="select * from tbl_center c inner join tbl_place p on c.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where c.center_id='".$_SESSION['cid']."'";
$row=$con->query($sel);
$data=$row->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center Profile</title>
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

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }

        .info-label {
            font-weight: bold;
            color: #004d40; /* Darker teal for labels */
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
        <h1 class="heading">Center Profile</h1> <!-- Similar heading style as My Profile -->

        <img src="../Assets/File/Center/<?php echo $data['center_photo'] ?>" alt="Center Photo" />

        <table>
            <tr>
                <td class="info-label">Name</td>
                <td><?php echo $data['center_name'] ?></td>
            </tr>
            <tr>
                <td class="info-label">Email</td>
                <td><?php echo $data['center_email'] ?></td>
            </tr>
            <tr>
                <td class="info-label">Contact</td>
                <td><?php echo $data['center_contact'] ?></td>
            </tr>
            <tr>
                <td class="info-label">Address</td>
                <td><?php echo $data['center_address'] ?></td>
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

    
        <?php include('footer.php'); ?>
   
</body>
</html>
