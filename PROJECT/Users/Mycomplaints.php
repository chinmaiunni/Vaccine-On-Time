	<?php

include('../Assets/connection/connection.php');
include('header.php');
?>


<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="200" border="1">
    <tr>
      <td>SLNo</td>
      <td>Date</td>
      <td>Title</td>
      <td>Content</td>
      <td>Center</td>
      <td>Reply</td>
      <td>Action</td>
    </tr>
    <tr>
         <?php
	$i=0;
	$sel="select * from tbl_complaint c inner join tbl_center h on c.center_id=h.center_id where user_id='".$_SESSION["uid"]."' and c.center_id!=''";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		
		?>
   <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['complaint_date']?></td>
      <td><?php echo $data['complaint_title']?></td>
      <td><?php echo $data['complaint_content']?></td>
      <td><?php echo $data['center_name']?></td>
      <td><?php echo $data['complaint_reply']?></td>
      <td><a href="PostComplaint.php?delID=<?php echo $data['complaint_id']?>">Delete</a> || <a href="PostComplaint.php?eid=<?php echo $data['complaint_id']?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints</title>
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

        .complaints-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 1000px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
            flex-grow: 1;
        }

        /* Heading for Complaints */
        .complaints-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b;
            padding-bottom: 10px;
        }

        .complaints-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .complaints-container th, .complaints-container td {
            padding: 12px;
            border: 1px solid #e0e0e0;
            text-align: left;
            font-size: 14px;
        }

        .complaints-container th {
            background-color: #00796b;
            color: #fff;
        }

        .complaints-container td a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .complaints-container td a:hover {
            color: #004d40; /* Darker teal on hover */
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

<div class="complaints-container">
    <h1 class="heading">Your Complaints</h1> <!-- Same heading style as Edit Profile -->

    <table>
        <tr>
            <th>SLNo</th>
            <th>Date</th>
            <th>Title</th>
            <th>Content</th>
            <th>Center</th>
            <th>Reply</th>
            <th>Action</th>
        </tr>
        <tr>
            <?php
                $i = 0;
                $sel = "select * from tbl_complaint c LEFT join tbl_center h on c.center_id=h.center_id where user_id='" . $_SESSION["uid"] . "' ";
                $row = $con->query($sel);
                while ($data = $row->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['complaint_date'] ?></td>
                <td><?php echo $data['complaint_title'] ?></td>
                <td><?php echo $data['complaint_content'] ?></td>
                <td><?php echo $data['center_name'] ?></td>
                <td><?php echo $data['complaint_reply'] ?></td>
                <td><a href="PostComplaint.php?delID=<?php echo $data['complaint_id'] ?>">Delete</a> || <a href="PostComplaint.php?eid=<?php echo $data['complaint_id'] ?>">Edit</a></td>
            </tr>
            <?php
                }
            ?>
    </table>
</div>


 <?php 
 include('footer.php');
  ?>


</body>
</html>
