<?php
include('../Assets/connection/connection.php');
include('Head.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$district=$_POST["txt_district"];
	if($id==""){
	$insqry="insert into tbl_district(district_name)values('".$district."')";
     if($con->query($insqry))
	{
	?>
    <script>
    alert("Inserted")
	window.location="District.php"
	</script>
    <?php
	}
	}
	else{
		$updQry="update tbl_district set district_name='".$district."' where district_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated")
	window.location="District.php"
	</script>
    <?php
	}
	}
}


if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_district where district_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="District.php";
				</script>
                <?php
	}
}
$distname="";
$distid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_district where district_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$distname=$datEdit['district_name'];
	$distid=$datEdit['district_id'];	
}



?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1">
  <tr>
    <td align="center"><p>District Name </p></td>
    <td><label for="txt_district"></label>
    <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $distid ?>"/>
    <input type="text" name="txt_district" id="txt_district" value="<?php echo $distname ?>" required /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
   </td>
  </tr>
</table>
<p>&nbsp;</p>

  <table width="228" border="1">
    <tr>
      <td width="17"><h3>#</h3></td>
      <td width="71">District</td>
      <td width="118">Action</td>
    </tr>
    <?php
	$i=0;
	$sel="select * from tbl_district";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		?>
    
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['district_name']?></td>
      <td><a href="District.php?delID=<?php echo $data['district_id']?>">Delete</a> || <a href="District.php?eid=<?php echo $data['district_id'] ?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html> -->

<!-- goodone -->
<!DOCTYPE html>   
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>District Management</title>
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
      width: 75%; /* Matched Category page */
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

    input[type="text"] {
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
      color: #333;
      background: #f9f9f9;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    input[type="text"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
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

    .district-table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .district-table thead {
      background-color: #008b8b;
      color: #fff;
    }

    .district-table th, .district-table td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      font-size: 0.95rem;
    }

    .district-table th {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-size: 1rem;
    }

    .district-table tbody tr {
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .district-table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .district-table tbody tr:hover {
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

      .district-table th, .district-table td {
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
    <h2>District Information</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="form-group">
        <label for="txt_district">District Name</label>
        <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $distid ?>" />
        <input type="text" name="txt_district" id="txt_district" placeholder="Enter the district name here..." value="<?php echo $distname ?>" required />
      </div>

      <div class="form-buttons">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div>
    </form>
<br><br><br><br>
    <h3>District List</h3>
    <div class="table-responsive">
      <table class="district-table">
        <thead>
          <tr>
            <th>SL No.</th>
            <th>District</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "select * from tbl_district";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
            $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data['district_name'] ?></td>
              <td>
                <a href="District.php?delID=<?php echo $data['district_id'] ?>">Delete</a> &nbsp
                <a href="District.php?eid=<?php echo $data['district_id'] ?>">Edit</a>
              </td>
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
