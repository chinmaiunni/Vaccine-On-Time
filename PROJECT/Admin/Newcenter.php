<?php

include('../Assets/connection/connection.php');
include('Head.php');

if(isset($_GET["acID"]))
{
	$upQry="update tbl_center set center_status='1' where center_id='".$_GET["acID"]."'";
    if($con->query($upQry))
	{
				?>
                <script>
				alert('Accepted');
				window.location="Newcenter.php";
				</script>
                <?php
	}
}

if(isset($_GET["rejID"]))
{
	$upQry="update tbl_center set center_status='2' where center_id='".$_GET["rejID"]."'";
    if($con->query($upQry))
	{
				?>
                <script>
				alert('Rejected');
				window.location="Newcenter.php";
				</script>
                <?php
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VaccineOnTime::CenterList</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(to right, #ece9e6, #ffffff);
      color: #333;
    }

    .container {
      width: 100%; /* Increased to 90% for better visibility */
      max-width: 900px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h3 {
      margin: 20px 0;
      font-size: 1.5rem;
      color: #333;
      text-align: center;
      font-weight: 600;
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 20px;
    }

    .center-table {
      width: 100%;
      min-width: 800px; /* Set a minimum width for the table */
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .center-table thead {
      background-color: #008b8b;
      color: #fff;
    }

    .center-table th, .center-table td {
      padding: 10px; /* Reduced padding for smaller size */
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .center-table th {
      font-weight: bold;
    }

    .center-table tr {
      transition: background-color 0.3s ease;
    }

    .center-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .center-table tr:hover {
      background-color: #e7f3ff;
    }

    .center-table td a {
      color: #007bff;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .center-table td a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Center List (New)</h3>
    <div class="table-responsive">
      <table class="center-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>District</th>
            <th>Place</th>
            <th>Pincode</th>
            <th>Center</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Photo</th>
            <th>Proof</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_center c INNER JOIN tbl_place p ON c.place_id = p.place_id INNER JOIN tbl_district d ON p.district_id = d.district_id WHERE c.center_status = '0'";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
              $i++;
              ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['district_name'] ?></td>
                <td><?php echo $data['place_name'] ?></td>
                <td><?php echo $data['place_pincode'] ?></td>
                <td><?php echo $data['center_name'] ?></td>
                <td><?php echo $data['center_contact'] ?></td>
                <td><?php echo $data['center_address'] ?></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_photo'] ?>" width="50" height="50" /></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_proof'] ?>" width="50" height="50" /></td>
                <td><a href="Newcenter.php?acID=<?php echo $data['center_id'] ?>">Accept</a>/<a href="Newcenter.php?rejID=<?php echo $data['center_id'] ?>">Reject</a></td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
<br>
    <h3>Center List (Accepted)</h3>
    <div class="table-responsive">
      <table class="center-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>District</th>
            <th>Place</th>
            <th>Pincode</th>
            <th>Center</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Photo</th>
            <th>Proof</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_center c INNER JOIN tbl_place p ON c.place_id = p.place_id INNER JOIN tbl_district d ON p.district_id = d.district_id WHERE c.center_status = '1'";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
              $i++;
              ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['district_name'] ?></td>
                <td><?php echo $data['place_name'] ?></td>
                <td><?php echo $data['place_pincode'] ?></td>
                <td><?php echo $data['center_name'] ?></td>
                <td><?php echo $data['center_contact'] ?></td>
                <td><?php echo $data['center_address'] ?></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_photo'] ?>" width="50" height="50" /></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_proof'] ?>" width="50" height="50" /></td>
                <td><a href="Newcenter.php?rejID=<?php echo $data['center_id'] ?>">Reject</a></td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
<br>
    <h3>Center List (Rejected)</h3>
    <div class="table-responsive">
      <table class="center-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>District</th>
            <th>Place</th>
            <th>Pincode</th>
            <th>Center</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Photo</th>
            <th>Proof</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_center c INNER JOIN tbl_place p ON c.place_id = p.place_id INNER JOIN tbl_district d ON p.district_id = d.district_id WHERE c.center_status = '2'";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
              $i++;
              ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['district_name'] ?></td>
                <td><?php echo $data['place_name'] ?></td>
                <td><?php echo $data['place_pincode'] ?></td>
                <td><?php echo $data['center_name'] ?></td>
                <td><?php echo $data['center_contact'] ?></td>
                <td><?php echo $data['center_address'] ?></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_photo'] ?>" width="50" height="50" /></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_proof'] ?>" width="50" height="50" /></td>
                <td><a href="Newcenter.php?acID=<?php echo $data['center_id'] ?>">Accept</a></td>
              </tr>
              <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php include('Foot.php'); ?>
</body>
</html>
