<?php
include('../Assets/connection/connection.php');
include('header.php');

if(isset($_POST["btn_submit"]))

{
    $Stock=$_POST["txt_stockno"];
    $sel= "select *from tbl_stock where hospitalvaccine_id='".$_GET['HVID']."' ";
    $res=$con->query($sel);
    if($row=$res->fetch_assoc())
    {
        $CStock=$row['stock_quantity'];
        $newstock=$CStock+$Stock;
        
         $upd= "update tbl_stock set stock_quantity ='".$newstock."',stock_date=curdate() where hospitalvaccine_id=".$_GET['HVID'];
        if($con->query($upd))
        {
        ?>
        <script>
        alert('Stock Updated');
        window.location="HospitalVaccine.php";
        </script>
        <?php
        }
    }
    else 
    {
	
	$insqry="insert into tbl_stock(stock_quantity,stock_date,hospitalvaccine_id)values('".$Stock."',curdate(),'".$_GET['HVID']."')";
    if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
window.location="HospitalVaccine.php";
	</script>
    <?php
	}
}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_stock where stock_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Hospitalvaccine.php";
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
    <title>Stock Management</title>
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
            font-weight: bold;
        }

       

        .stock-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 600px;
            padding: 30px;
            margin: 20px auto;
            text-align: center;
        }

        .stock-container h1 {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b;
            padding-bottom: 10px;
        }

        .stock-container form {
            margin-bottom: 20px;
        }

        .stock-container table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .stock-container td {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }

        .stock-container th {
            padding: 10px;
            background-color: #00796b;
            color: white;
            text-align: left;
        }

        .stock-container input[type="text"] {
            padding: 10px;
            width: 90%;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        .stock-container input[type="submit"] {
            padding: 10px 20px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .stock-container input[type="submit"]:hover {
            background-color: #004d40;
        }

        .stock-container a {
            color: #00796b;
            text-decoration: none;
            font-weight: bold;
        }

        .stock-container a:hover {
            color: #004d40;
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
   
    <div class="stock-container">
        <h1>Manage Stock</h1>
        <form name="form1" method="post" action="">
            <label for="txt_stockno">Stock:</label><br>
            <input type="text" name="txt_stockno" id="txt_stockno"><br><br>
            <input type="submit" name="btn_submit" id="btn_submit" value="Submit">
        </form>
<br><br>
        <table>
            <tr>
                <th>Sl No</th>
                <th>Stock/Quantity</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 0;
            $sel = "select * from tbl_stock where hospitalvaccine_id='" . $_GET['HVID'] . "'";
            $row = $con->query($sel);
            while ($data = $row->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data['stock_quantity'] ?></td>
                    <td><?php echo $data['stock_date'] ?></td>
                    <td><a href="Stock.php?delID=<?php echo $data['stock_id'] ?>">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php include('Footer.php'); ?>
    
</body>
</html>
