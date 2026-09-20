<?php
include('../Assets/connection/connection.php');
include('Head.php');
if(isset($_POST["btn_submit"]))
{
	$District=$_POST["sel_dis"];
	$Place=$_POST["txt_place"];
	$PinCode=$_POST["txt_pincode"];
	$insqry="insert into tbl_place(place_name,place_pincode,district_id)values('".$Place."','".$PinCode."','".$District."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Place.php";
	</script>
    <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_place where place_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Place.php";
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
    <title>Place Management</title>
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
            width: 75%; /* Matched with District page */
            margin: 40px auto;
            padding: 20px;
            max-width: 900px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #333;
            text-align: center;
            font-weight: 700;
            text-transform: uppercase;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 8px;
            font-size: 1.2rem;
            font-weight: 500;
            color: #555;
        }

        select,
        input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            color: #333;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background: #f9f9f9;
        }

        select:focus,
        input[type="text"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
            outline: none;
            background: #fff;
        }

        .form-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 8px 16px; /* Reduced button size */
            border: none;
            border-radius: 6px;
            background-color: #008b8b;
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="reset"] {
            background-color: #ff4757;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"]:hover {
            background-color: #e84118;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
        }

        .table-responsive {
            overflow-x: auto;
            margin-top: 20px;
        }

        .place-table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .place-table thead {
            background-color: #008b8b;
            color: #fff;
        }

        .place-table th, .place-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 0.95rem;
        }

        .place-table th {
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 1rem;
        }

        .place-table tbody tr {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .place-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .place-table tbody tr:hover {
            background-color: #e7f3ff;
            transform: scale(1.01);
        }

        a {
            color: #008b8b;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.2s ease, text-decoration 0.2s ease;
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            .place-table th, .place-table td {
                font-size: 0.85rem;
                padding: 10px;
            }

            h2 {
                font-size: 1.5rem;
            }

            h3 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Place Information</h2>
        <form id="form1" name="form1" method="post" action="">
            <div class="form-group">
                <label for="sel_dis">District</label>
                <select name="sel_dis" id="sel_dis" required>
                    <option>--Select--</option>
                    <?php
                    $sel = "select * from tbl_district";
                    $row = $con->query($sel);
                    while ($data = $row->fetch_assoc()) {
                    ?>
                        <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="txt_place">Place</label>
                <input type="text" name="txt_place" id="txt_place" placeholder="Enter the place name..." required />
            </div>

            <div class="form-group">
                <label for="txt_pincode">Pincode</label>
                <input type="text" name="txt_pincode" id="txt_pincode" placeholder="Enter the pincode..." required />
            </div>

            <div class="form-buttons">
                <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
            </div>
        </form>
        <br><br><br><br>
        <h3>Place List</h3>
        <div class="table-responsive">
            <table class="place-table">
                <thead>
                    <tr>
                        <th>SNo</th>
                        <th>District</th>
                        <th>Place</th>
                        <th>Pincode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $sel = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
                    $row = $con->query($sel);
                    while ($data = $row->fetch_assoc()) {
                        $i++;
                    ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td><?php echo $data['district_name'] ?></td>
                            <td><?php echo $data['place_name'] ?></td>
                            <td><?php echo $data['place_pincode'] ?></td>
                            <td><a href="Place.php?delID=<?php echo $data['place_id'] ?>">Delete</a> | <a href="Place.php?eid=<?php echo $data['place_id'] ?>">Edit</a></td>
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
