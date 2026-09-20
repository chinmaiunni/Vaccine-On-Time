<?php
session_start();

include('../Assets/connection/connection.php');
include('Head.php');
?>

<!-- <!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      <td>Slot Number</td>
      <td>Slot Time</td>
      <td>User</td>
    </tr>
    <?php
    $i = 0;
    $sel = "select * from tbl_booking b inner join tbl_slot s on s.slot_id= b.slot_id inner join tbl_center c on s.center_id=c.center_id inner join tbl_newuser u on b.user_id=u.user_id  where c.center_id='" . $_SESSION['cid'] . "' and booking_status>0";
    $row = $con->query($sel);
    while ($data = $row->fetch_assoc()) {
      $i++;
      ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $data['booking_date'] ?></td>
        <td><?php echo $data['booking_slot'] ?></td>
        <td><?php echo $data['slot_from'] ?> - <?php echo $data['slot_to'] ?></td>
        <td><?php echo $data['user_name'] ?></td>
        <td><?php
        if ($data['booking_status'] == 1) {

          echo "Payment Pending";
        } else if ($data['booking_status'] == 2) {
          echo "Payment Completed";
          ?>

            <?php
        }
        ?>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
</body>

</html> -->


<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Booking Table</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #e0f7fa;
            padding: 0;
            margin: 0;
        }

        /* Ensuring the header spans across the entire width */
        header {
            background-color: #fff;
            padding: 15px 0;
            text-align: center;
            width: 100%;
        }

        header img {
            vertical-align: middle;
        }

        header h1 {
            display: inline-block;
            vertical-align: middle;
            font-size: 28px;
            margin-left: 10px;
            color: #004d40;
        }

        /* Styling the table */
        table {
            width: 90%;
            margin: 30px auto;
            /* Adding some margin at the top and bottom */
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #004d40;
            color: white;
            text-transform: uppercase;
            font-weight: 600;
        }

        td {
            font-size: 14px;
            color: #555;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .status-pending {
            color: #388e3c;
            /* Orange for pending */
            font-weight: bold;
        }

        .status-completed {
            color: #f57c00;
            /* Green for completed */
            font-weight: bold;
        }

        .slot-time {
            font-style: italic;
            color: #00796b;
        }

        /* Ensuring the footer sticks to the bottom and doesn't attach to the table */
        footer {
            background-color: #004d40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 50px;
            box-shadow: 0px -2px 5px rgba(0, 0, 0, 0.1);
        }

        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }

            th,
            td {
                padding: 10px;
                font-size: 12px;
            }

            header h1 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>

    <!-- Table Section -->
    <table>
        <tr>
            <th>SLNo</th>
            <th>Date</th>
            <th>Slot Number</th>
            <th>Slot Time</th>
            <th>User</th>
            <th>Total Amount</th>
            <th>Margin</th>
            <th>Status</th>
        </tr>
        <?php
    $i = 0;
    $sel = "select * from tbl_booking b inner join tbl_slot s on s.slot_id= b.slot_id inner join tbl_center c on s.center_id=c.center_id inner join tbl_newuser u on b.user_id=u.user_id  where   booking_status>0";
    $row = $con->query($sel);
    while ($data = $row->fetch_assoc()) {
      $i++;
      ?>
        <tr>
            <td>
                <?php echo $i ?>
            </td>
            <td>
                <?php echo $data['booking_date'] ?>
            </td>
            <td>
                <?php echo $data['booking_slot'] ?>
            </td>
            <td class="slot-time">
                <?php echo $data['slot_from'] ?> -
                <?php echo $data['slot_to'] ?>
            </td>
            <td>
                <?php echo $data['user_name'] ?>
            </td>
            <td>
                <?php echo $data['booking_amount'] ?>
            </td>
            <td>
                <?php 
$booking_amount = $data['booking_amount'];
$percentage_amount = $booking_amount * 0.10;
echo $percentage_amount; 
?>
            </td>
            <td class="<?php echo ($data['booking_status'] == 1) ? 'status-pending' : 'status-completed'; ?>">
                <?php
          if ($data['booking_status'] == 1) {
            echo "Payment Completed";
          } else if ($data['booking_status'] == 2) {
            echo "booking cancelled";
          }
          ?>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <br><br><br>
    <?php include('Foot.php'); ?>
</body>

</html>