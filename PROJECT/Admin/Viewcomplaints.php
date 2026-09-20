<?php
include('../Assets/connection/connection.php');
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View User Complaints</title>
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
      width: 85%;
      margin: 40px auto;
      padding: 20px;
      max-width: 900px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    h2 {
      margin-bottom: 20px;
      font-size: 1.8rem;
      color: #333;
      text-align: center;
      font-weight: 600;
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 20px;
    }

    .complaint-table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .complaint-table thead {
      background-color: #008b8b;
      color: #fff;
    }

    .complaint-table th, .complaint-table td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    .complaint-table th {
      font-weight: bold;
    }

    .complaint-table tr {
      transition: background-color 0.3s ease;
    }

    .complaint-table tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .complaint-table tr:hover {
      background-color: #e7f3ff;
    }

    .complaint-table td a {
      color: #007bff;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .complaint-table td a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>View User Complaints</h2>
    <div class="table-responsive">
      <table class="complaint-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>Date</th>
            <th>Title</th>
            <th>Content</th>
            <th>User</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_complaint c INNER JOIN tbl_newuser u ON c.user_id = u.user_id";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
              $i++;
              ?>
              <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['complaint_date'] ?></td>
                <td><?php echo $data['complaint_title'] ?></td>
                <td><?php echo $data['complaint_content'] ?></td>
                <td><?php echo $data['user_name'] ?></td>
                <td><a href="Reply.php?repliID=<?php echo $data['complaint_id'] ?>">Reply</a></td>
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
