<?php
include('../Assets/connection/connection.php');
include('Head.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Category=$_POST["txt_category"];
	if($id==""){
	$insqry="insert into tbl_category(category_name)values('".$Category."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Category.php";
	</script>
    <?php
	}
}
else{
		$updQry="update tbl_category set category_name='".$Category."' where category_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated");
	window.location="Category.php";
	</script>
    <?php
	}
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_category where category_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Category.php";
				</script>
                <?php
	}
}
$categoryname="";
$categoryid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_category where category_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$categoryname=$datEdit['category_name'];
	$categoryid=$datEdit['category_id'];	
}
?>


<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Management</title>
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
      width: 75%; /* Matched with Place page */
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

    input[type="text"]::placeholder {
      color: #aaa;
      font-style: italic;
    }

    input[type="text"]:focus {
      border-color: #007bff;
      box-shadow: 0 0 10px rgba(0, 123, 255, 0.2);
      outline: none;
      background: #fff;
    }

    .form-buttons {
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }

    input[type="submit"] {
      padding: 10px 20px; /* Adjusted size for consistency */
      border: none;
      border-radius: 6px;
      background-color: #008b8b; /* Same color as Place page */
      color: white;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
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

    .category-table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .category-table thead {
      background-color: #008b8b; /* Matching Place table */
      color: #fff;
    }

    .category-table th, .category-table td {
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      font-size: 0.95rem;
    }

    .category-table th {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      font-size: 1rem;
    }

    .category-table tbody tr {
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .category-table tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .category-table tbody tr:hover {
      background-color: #e7f3ff;
      transform: scale(1.01);
    }

    a {
      color: #008b8b; /* Consistent link color */
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

      .category-table th, .category-table td {
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
    <h2>Category Management</h2>
    <form id="form1" name="form1" method="post" action="">
      <div class="form-group">
        <label for="txt_category"><b>Category</b></label>
        <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $categoryid ?>" />
        <input required type="text" name="txt_category" id="txt_category" value="<?php echo $categoryname ?>" placeholder="Enter category name..." />
      </div>
      <div class="form-buttons">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div>
    </form>
    <br><br><br><br>
    <h3>Category List</h3>
    <div class="table-responsive">
      <table class="category-table">
        <thead>
          <tr>
            <th>#</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 0;
          $sel = "SELECT * FROM tbl_category";
          $row = $con->query($sel);
          while ($data = $row->fetch_assoc()) {
            $i++;
            ?>
            <tr>
              <td><?php echo $i ?></td>
              <td><?php echo $data['category_name'] ?></td>
              <td>
                <a href="Category.php?delID=<?php echo $data['category_id'] ?>">Delete</a>&nbsp;|&nbsp;
                <a href="Category.php?eid=<?php echo $data['category_id'] ?>">Edit</a>
              </td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
    include('Foot.php');
  ?>
</body>
</html>
