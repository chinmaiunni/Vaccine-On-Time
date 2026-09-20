<?php
session_start();
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$Slot_From=$_POST["txt_slotfrom"];
	$Slot_To=$_POST["txt_slotto"];
	$Count=$_POST["txt_count"];
	$insqry="insert into tbl_slot(slot_from,slot_to,slot_count,center_id)values('".$Slot_From."','".$Slot_To."','".$Count."','".$_SESSION['cid']."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Slots.php";
	</script>
    <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_slot where slot_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Slots.php";
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
    <title>Slot Management</title>
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

        .slot-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 600px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
        }

        .slot-container h1 {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b;
            padding-bottom: 10px;
        }

        .slot-container form {
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-group label {
            flex-basis: 30%;
            text-align: left;
            font-weight: bold;
            color: #004d40;
        }

        .form-group input {
            flex-basis: 65%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .slot-container input[type="submit"] {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .slot-container input[type="submit"]:hover {
            background-color: #004d40;
        }

        .slot-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .slot-container td, th {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }

        .slot-container th {
            background-color: #00796b;
            color: white;
        }

        .slot-container a {
            color: #00796b; /* Teal color for links */
            text-decoration: none;
            font-weight: bold;
        }

        .slot-container a:hover {
            color: #004d40; /* Darker teal on hover */
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

    <div class="slot-container">
        <h1>Manage Slot</h1>
        <form id="form1" name="form1" method="post" action="">
            <div class="form-group">
                <label for="txt_slotfrom">Slot From:</label>
                <input type="time" name="txt_slotfrom" id="txt_slotfrom">
            </div>
            <div class="form-group">
                <label for="txt_slotto">Slot To:</label>
                <input type="time" name="txt_slotto" id="txt_slotto">
            </div>
            <div class="form-group">
                <label for="txt_count">Count:</label>
                <input type="text" name="txt_count" id="txt_count">
            </div>
            <input type="submit" name="btn_submit" id="btn_submit" value="Submit">
        </form>
<br><br>
        <table>
            <tr>
                <th>SL No</th>
                <th>From</th>
                <th>To</th>
                <th>Count</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 0;
            $sel = "select * from tbl_slot where center_id='" . $_SESSION['cid'] . "'";
            $row = $con->query($sel);
            while ($data = $row->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data['slot_from'] ?></td>
                    <td><?php echo $data['slot_to'] ?></td>
                    <td><?php echo $data['slot_count'] ?></td>
                    <td><a href="Slots.php?delID=<?php echo $data['slot_id'] ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <?php include('Footer.php'); ?>
</body>
</html>
