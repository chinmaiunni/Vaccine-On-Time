<?php
include('../Assets/connection/connection.php');
include('Head.php');
if(isset($_POST["btn_submit"]))
{
	$Category=$_POST['sel_cat'];
	$Vaccine=$_POST['txt_vaccine'];
	$insQry="insert into tbl_vaccine(category_id,vaccine_name)values('".$Category."','".$Vaccine."')";
	if($con->query($insQry))
	{
		?>
        <script>
		alert('Inserted');
		window.location="Vaccine.php";
		</script>
        <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_vaccine where vaccine_id='".$_GET["delID"]."'";
if($con->query($delQry))
	{
		?>
        <script>
		alert('Deleted');
		window.location="Vaccine.php";
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
  <title>Vaccine Management</title>
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
      width: 75%;
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

    h3 {
      font-size: 1.8rem;
      color: #333;
      text-transform: uppercase;
      font-weight: 700;
      text-align: center;
      margin-bottom: 20px;
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

    input[type="text"], select {
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 1rem;
      color: #333;
      background: #f9f9f9;
      transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    input[type="text"]:focus, select:focus {
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

    input[type="submit"] {
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      background-color: #008b8b;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 20px;
    }

    .vaccine-table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .vaccine-table thead {
      background-color: #008b8b;
      color: #fff;
    }

    .vaccine-table th, .vaccine-table td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      font-size: 0.95rem;
    }

    .vaccine-table th {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-size: 1rem;
    }

    .vaccine-table tbody tr {
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .vaccine-table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .vaccine-table tbody tr:hover {
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

      .vaccine-table th, .vaccine-table td {
        font-size: 0.85rem;
        padding: 10px;
      }

      h2 {
        font-size: 1.5rem;
      }

      h3 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Add Vaccine </h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="form-group">
        <label for="sel_cat">Category</label>
        <select name="sel_cat" id="sel_cat" required>
          <option value="">--SELECT--</option>
          <?php
          $sel = "SELECT * FROM tbl_category";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
            ?>
            <option value="<?php echo $data['category_id'] ?>"><?php echo $data['category_name'] ?></option>
            <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="txt_vaccine">Vaccine</label>
        <input type="text" name="txt_vaccine" id="txt_vaccine" placeholder="Enter vaccine name..." required />
      </div>
      <div class="form-buttons">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div>
    </form>
    <br><br>
    <h3>Vaccine List</h3>
    <div class="table-responsive">
      <table class="vaccine-table">
        <thead>
          <tr>
            <th>SLNo</th>
            <th>Category</th>
            <th>Vaccine</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_vaccine v INNER JOIN tbl_category c ON v.category_id = c.category_id";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
            $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data['category_name'] ?></td>
              <td><?php echo $data['vaccine_name'] ?></td>
              <td><a href="Vaccine.php?delID=<?php echo $data['vaccine_id'] ?>">Delete</a></td>
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
