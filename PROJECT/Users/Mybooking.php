<?php
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_GET['cid']))
{
    $up="Update tbl_booking set booking_status='2' where booking_id=".$_GET['cid'];
    if($con->query($up))
    {
        ?>
        <script>
            alert('Booking Cancelled');
            window.location="MyBooking.php";
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
    <title>My Booking</title>
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

        .containers {
            width: 90%;
            max-width: 1000px; /* Increased max-width for better column spacing */
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
            border-radius: 12px; /* Keep curved edge for heading region */
        }

        .table-responsive {
            overflow-x: auto;
            margin-top: 20px;
        }

        .booking-table {
            width: 100%;
            min-width: 850px;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .booking-table thead {
            background-color: #008b8b;
            color: #fff;
        }

        .booking-table th,
        .booking-table td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .booking-table th {
            font-weight: bold;
        }

        .booking-table tr {
            transition: background-color 0.3s ease;
        }

        .booking-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .booking-table tr:hover {
            background-color: #e7f3ff;
        }

        .booking-table td a {
            color: #007bff;
            font-weight: 500;
            transition: color 0.2s ease;
            display: inline-block;
            margin-top: 5px; /* Space above links */
        }

        .booking-table td a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        /* Adjust column widths */
        .booking-table th.slot-time, .booking-table td.slot-time {
            width: 160px; /* Adjust width as needed for Slot Time column */
        }

        .booking-table th.date, .booking-table td.date {
            width: 140px; /* Width adjustment for Date column */
        }

        .status-text {
            display: block; /* Separate line for payment status text */
            margin-bottom: 5px; /* Space below Payment Completed */
        }
    </style>
</head>

<body>
    <div class="containers">
        <h3>Your Booking Details</h3>
        <div class="table-responsive">
            <table class="booking-table">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th class="date">Date</th> <!-- Added class for Date column width adjustment -->
                        <th>Slot Number</th>
                        <th>Appointment</th>
                        <th class="slot-time">Slot Time</th> <!-- Added class for Slot Time column width adjustment -->
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sel = "SELECT * FROM tbl_booking b 
                            INNER JOIN tbl_hospitalvaccine h ON h.hospitalvaccine_id = b.hospitalvaccine_id 
                            INNER JOIN tbl_slot s ON b.slot_id = s.slot_id 
                            WHERE b.user_id = '" . $_SESSION['uid'] . "' AND booking_status > 0";
                    $res = $con->query($sel);
                    $i = 0;
                    $curdate=date('Y-m-d');
                    while ($row = $res->fetch_assoc()) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td class="date"><?php echo htmlspecialchars($row['booking_date']); ?></td> <!-- Apply date class -->
                            <td><?php echo htmlspecialchars($row['booking_slot']); ?></td>
                            <td><?php echo htmlspecialchars($row['booking_fordate']); ?></td>
                            <td class="slot-time"><?php echo htmlspecialchars($row['slot_from']) . ' - ' . htmlspecialchars($row['slot_to']); ?></td> <!-- Apply slot-time class -->
                            <td>
                                <?php
                                if ($row['booking_status'] == 0) {
                                    echo "Payment Pending";
                                } else if ($row['booking_status'] == 1) {
                                    echo "<span class='status-text'>Payment Completed</span>"; // Display "Payment Completed" on separate line
                                    if($row['booking_fordate'] >= $curdate)
                                    {

                                   
                                    ?>
                                    <a href="Mybooking.php?cid=<?php echo $row['booking_id']?>">Cancel Booking</a>
                                    <?php
                                    }
                                    ?>
                                    <a href="PostComplaint.php?PCID=<?php echo htmlspecialchars($row['center_id']); ?>">Complaint</a>
                                <?php
                                } else if ($row['booking_status'] == 2) {
                                    echo "Cancelled";
                                } else {
                                    echo "Booking Cancelled. Amount Will Refund in 2 Working Days.";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
