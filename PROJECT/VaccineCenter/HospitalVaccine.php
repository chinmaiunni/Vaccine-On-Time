
<?php
session_start();
include('header.php');
include('../Assets/connection/connection.php');

if(isset($_POST["btn_submit"]))
{
    $Vaccine = intval($_POST["sel_vaccine"]);
    $Amount = floatval($_POST["txt_amount"]);
    $CenterID = intval($_SESSION['cid']);

    if ($Vaccine <= 0 || $Amount <= 0 || $CenterID <= 0) {
        echo "<script>alert('Please provide valid inputs.');</script>";
    } else {
     
        $insqry = "INSERT INTO tbl_hospitalvaccine (vaccine_id, hospitalvaccine_amount, center_id) VALUES ($Vaccine, $Amount, $CenterID)";
        if($con->query($insqry))
        {
            echo "<script>
                alert('Inserted successfully.');
                Window.location='HospitalVaccine.php';
            </script>";
        } else {
            echo "<script>alert('Error inserting data.');</script>";
        }
    }
}


if(isset($_GET["delID"]))
{
    $delID = intval($_GET["delID"]);
    if($delID > 0){
        $delQry = "DELETE FROM tbl_hospitalvaccine WHERE hospitalvaccine_id = $delID";
        if($con->query($delQry))
        {
            
            $delStockQry = "DELETE FROM tbl_stock WHERE hospitalvaccine_id = $delID";
            $con->query($delStockQry);

            echo "<script>
                alert('Deleted successfully.');
                window.location='HospitalVaccine.php';
            </script>";
        }
        else{
            echo "<script>alert('Error deleting data.');</script>";
        }
    } else {
        echo "<script>alert('Invalid ID.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital Vaccine Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        h2 {
            text-align: center;
            color: #008b8b;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #008b8b;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e7f3ff;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-top: 5px;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-color: #008b8b;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #006f6f;
        }

        .add-stock-link a {
            color: #007bff;
            text-decoration: none;
        }

        .add-stock-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="containers">
        <h2>Manage Hospital Vaccines</h2>
        <form id="form1" name="form1" method="post" action="">
            <table>
                <tr>
                    <td>Category</td>
                    <td>
                        <select name="sel_cat" id="sel_cat" onChange="getVaccine(this.value)" required>
                            <option value="">--SELECT--</option>
                            <?php
                            $sel = "SELECT * FROM tbl_category";
                            $row = $con->query($sel);
                            while($data = $row->fetch_assoc())
                            {
                                echo '<option value="'.$data['category_id'].'">'.htmlspecialchars($data['category_name']).'</option>';
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Vaccine</td>
                    <td>
                        <select name="sel_vaccine" id="sel_vaccine" required>
                            <option value="">--SELECT--</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>
                        <input type="number" name="txt_amount" id="txt_amount" min="1" step="0.01" required />
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
<br><br><br>
        <h2>Existing Hospital Vaccines</h2>
        <table>
            <tr>
                <th>SLNo</th>
                <th>Category</th>
                <th>Vaccine</th>
                <th>Amount</th>
                <th>Remining Stock</th>
                
                <th>Add Stock</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 0;
            $sel = "
                SELECT hv.hospitalvaccine_id, c.category_name, v.vaccine_name, hv.hospitalvaccine_amount, IFNULL(s.stock_quantity, 0) AS stock_quantity 
                FROM tbl_hospitalvaccine hv 
                INNER JOIN tbl_vaccine v ON hv.vaccine_id = v.vaccine_id 
                INNER JOIN tbl_category c ON v.category_id = c.category_id 
                LEFT JOIN tbl_stock s ON s.hospitalvaccine_id = hv.hospitalvaccine_id
                WHERE hv.center_id = " . intval($_SESSION['cid']) . "
            ";
            $row = $con->query($sel);
            if($row->num_rows > 0)
            {
                while($data = $row->fetch_assoc())
                {
                    $stock = "select sum(stock_quantity) as stock from tbl_stock where hospitalvaccine_id = '" . $data["hospitalvaccine_id"] . "'";
                    $result2 = $con->query($stock);
                    $row2=$result2->fetch_assoc();
                    
                    $stocka = "select COUNT(hospitalvaccine_id) as stock from tbl_booking where hospitalvaccine_id = '" . $data["hospitalvaccine_id"] . "'";
                    $result2a = $con->query($stocka);
                    $row2a=$result2a->fetch_assoc();
                    
                     $stock = $row2["stock"] - $row2a["stock"];
                
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data['category_name'] ?></td>
                        <td><?php echo $data['vaccine_name'] ?></td>
                        <td><?php echo $data['hospitalvaccine_amount'] ?></td>
                        <td><?php 
                        if($stock<=0)
                        {
                          echo "Out of stock";
                        }
                        else
                        {
                          echo $stock;
                        }
                        ?></td>
                        <td class="add-stock-link"><a href="Stock.php?HVID=<?php echo $data['hospitalvaccine_id'] ?>">Add Stock</a></td>
                        <td><a href="HospitalVaccine.php?delID=<?php echo $data['hospitalvaccine_id'] ?>" onclick="return confirm('Are you sure you want to delete this entry?');">Delete</a></td>
                    </tr>
                    <?php
                }
            }
            else
            {
                echo '<tr><td colspan="7" align="center">No hospital vaccines found.</td></tr>';
            }
            ?>
        </table>
    </div>

    <script src="../Assets/JQ/jQuery.js"></script>
    <script>
        function getVaccine(vid) {
            if(vid === ""){
                $("#sel_vaccine").html('<option value="">--SELECT--</option>');
                return;
            }
            $.ajax({
                url: "../Assets/AjaxPages/AjaxVaccine.php",
                method: "GET",
                data: {vid: vid},
                success: function (result) {
                    $("#sel_vaccine").html(result);
                },
                error: function () {
                    alert('Error fetching vaccines.');
                }
            });
        }
    </script>
</body>
</html>

<?php 

include('Footer.php');
?>