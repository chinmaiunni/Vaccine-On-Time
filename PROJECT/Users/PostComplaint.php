<?php
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Title=$_POST["txt_title"];
	$Content=$_POST["txt_complaint"];
	if($id==""){
	$insqry="insert into tbl_complaint(complaint_title,complaint_content,user_id,complaint_date,center_id)values('".$Title."','".$Content."','".$_SESSION['uid']."',curdate(),'".$_GET["PCID"]."')";
     if($con->query($insqry))
	{
	echo"inserted";
	}
	}
	else{
		$updQry="update tbl_complaint set complaint_title='".$Title."',complaint_content='".$Content."' where complaint_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated")
	window.location="PostComplaint.php"
	</script>
    <?php
	}
	}
}


if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_complaint where complaint_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="PostComplaint.php";
				</script>
                <?php
	}
}
$cpname="";
$cpcontent="";
$cpid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_complaint where complaint_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$cpname=$datEdit['complaint_title'];
	$cpcontent=$datEdit['complaint_content'];
	$cpid=$datEdit['complaint_id'];	
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Document Title</title>
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
      width: 90%;
      max-width: 900px;
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
    }

    .table-responsive {
      overflow-x: auto;
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
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

    input[type="text"], textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-top: 5px;
      font-family: 'Poppins', sans-serif;
    }

    input[type="submit"] {
      background-color: #008b8b;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #006f6f;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

   
  </style>
</head>

<body>
  <div class="container">
    <h3>Submit a Complaint</h3>
    <form id="form1" name="form1" method="post" action="">
      <table>
        <tr>
          <td>Title</td>
          <td>
            <input type="text" name="txt_title" id="txt_title" value="<?php echo $cpname ?>"/>
            <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $cpid ?>"/>
          </td>
        </tr>
        <tr>
          <td>Content</td>
          <td>
            <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"><?php echo $cpcontent?></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div align="center">
              <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
            </div>
          </td>
        </tr>
      </table>
    </form>

    <h3>Your Complaints</h3>
    <div class="table-responsive">
      <table>
        <tr>
          <th>SLNo</th>
          <th>Date</th>
          <th>Title</th>
          <th>Content</th>
          <th>Center</th>
          <th>Reply</th>
          <th>Action</th>
        </tr>
        <?php
        $i = 0;
        $sel = "SELECT * FROM tbl_complaint c INNER JOIN tbl_center h ON c.center_id=h.center_id WHERE user_id='".$_SESSION["uid"]."' AND c.center_id!=''";
        $row = $con->query($sel);
        while($data = $row->fetch_assoc()) {
            $i++;
        ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $data['complaint_date'] ?></td>
          <td><?php echo $data['complaint_title'] ?></td>
          <td><?php echo $data['complaint_content'] ?></td>
          <td><?php echo $data['center_name'] ?></td>
          <td><?php echo $data['complaint_reply'] ?></td>
          <td>
            <a href="PostComplaint.php?delID=<?php echo $data['complaint_id'] ?>">Delete</a> || 
            <a href="PostComplaint.php?eid=<?php echo $data['complaint_id'] ?>">Edit</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</body>
</html>
<?php include('footer.php'); ?>
