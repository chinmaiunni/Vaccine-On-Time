<?php
session_start();
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Title=$_POST["txt_title"];
	$Content=$_POST["txt_complaint"];
	if($id==""){
	$insqry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,center_id)values('".$Title."','".$Content."',curdate(),'".$_SESSION['cid']."')";
     if($con->query($insqry))
	{
	echo"inserted";
	header("loaction:PostComplaint.php");
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

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="222" border="1">
    <tr>
      <td width="155">Title</td>
      <td width="51"><label for="txt_title"></label>
      <input type="text" name="txt_title" id="txt_title" value="<?php echo $cpname ?>"/></td>
      </td><input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $cpid ?>"/>
    </tr>
    <tr>
      <td>Content</td>
      <td><label for="txt_complaint"></label>
      <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"><?php echo $cpcontent?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
 <table width="200" border="1">
    <tr>
      <td>SLNo</td>
      <td>Date</td>
      <td>Title</td>
      <td>Content</td>
      <td>Center</td>
      <td>Reply</td>
      <td>Action</td>
    </tr>
    <tr>
         <?php
	$i=0;
	$sel="select * from tbl_complaint c inner join tbl_center h on c.center_id=h.center_id where c.center_id='".$_SESSION["cid"]."' and user_id=''";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
		
		?>
   <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data['complaint_date']?></td>
      <td><?php echo $data['complaint_title']?></td>
      <td><?php echo $data['complaint_content']?></td>
      <td><?php echo $data['center_name']?></td>
      <td><?php echo $data['complaint_reply']?></td>
      <td><a href="PostComplaint.php?delID=<?php echo $data['complaint_id']?>">Delete</a> || <a href="PostComplaint.php?eid=<?php echo $data['complaint_id']?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</body>
</html>
//<?php 
// include('Footer.php');
// ?> -->

<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Center Complaint</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    html, body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* Ensure body takes up the full viewport height */
      background-color: #f2f7f5;
      color: #333;
      line-height: 1.6;
    }

    .containers {
      width: 80%;
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      flex: 1; /* Pushes footer to the bottom */
    }

    h3 {
      font-size: 2rem;
      color: #008080;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-section {
      background-color: #e0f7f4;
      padding: 25px;
      border-left: 6px solid #008080;
      border-radius: 8px;
      margin-bottom: 40px;
    }

    .form-section h4 {
      font-size: 1.5rem;
      color: #006666;
      margin-bottom: 15px;
    }

    .input-group {
      display: flex;
      flex-direction: column;
      margin-bottom: 20px;
    }

    label {
      font-size: 1.1rem;
      color: #006666;
      margin-bottom: 8px;
    }

    input[type="text"], textarea {
      border: 2px solid #cccccc;
      padding: 10px;
      border-radius: 8px;
      transition: border-color 0.3s ease, background-color 0.3s ease;
      font-size: 1rem;
      color: #333;
    }

    input[type="text"]:focus, textarea:focus {
      border-color: #008080;
      background-color: #f0faff;
      outline: none;
    }

    textarea {
      height: 150px;
      resize: vertical;
    }

    .btn-submit {
      background-color: #008080;
      color: white;
      padding: 12px 30px;
      font-size: 1.0rem;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      display: inline-block;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background-color: #005959;
    }

    /* Complaint Table Section */
    .table-section {
      padding: 20px;
      background-color: #f9f9f9;
      border-radius: 8px;
      border: 2px solid #008080;
      box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 15px;
      text-align: left;
      color: #333;
    }

    th {
      background-color: #008080;
      color: white;
      font-weight: 700;
    }

    tr:nth-child(even) {
      background-color: #f2f7f5;
    }

    .table-actions {
      display: flex;
      gap: 10px;
    }

    .table-actions a {
      text-decoration: none;
      font-weight: 600;
      padding: 8px 15px;
      border-radius: 6px;
      background-color: #008080;
      color: white;
      transition: background-color 0.3s ease;
    }

    .table-actions a:hover {
      background-color: #005959;
    }

    /* Footer Styles */
    footer {
      background-color: #002233; /* Dark background */
      color: #ffffff; /* Light text */
      padding: 20px 0;
      text-align: center;
      font-size: 1rem;
      border-top: 3px solid #008080;
      margin-top: 40px;
    }

    footer p {
      margin: 0;
      font-size: 1rem;
      color: rgba(255, 255, 255, 0.8);
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
    }

    footer a:hover {
      color: #00cccc;
      text-decoration: underline;
    }

    /* Responsive design */
    @media screen and (max-width: 768px) {
      .input-group {
        flex-direction: column;
      }

      input[type="text"], textarea {
        width: 100%;
      }

      table {
        font-size: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <div class="containers">
    <h3>Submit Your Complaint</h3>

    <!-- Complaint Form Section -->
    <div class="form-section">
      <h4>Enter Your Complaint Details</h4>
      <form id="form1" name="form1" method="post" action="">
        <div class="input-group">
          <label for="txt_title">Complaint Title</label>
          <input type="text" name="txt_title" id="txt_title" value="<?php echo $cpname ?>"/>
          <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $cpid ?>"/>
        </div>

        <div class="input-group">
          <label for="txt_complaint">Complaint Content</label>
          <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"><?php echo $cpcontent ?></textarea>
        </div>

        <input type="submit" name="btn_submit" id="btn_submit" value="Submit Complaint" class="btn-submit" />
      </form>
    </div>

    <!-- Complaint Viewing Section -->
    <div class="table-section">
      <h4>Your Complaints</h4>
      <table>
        <tr>
          <th>SL No</th>
          <th>Date</th>
          <th>Title</th>
          <th>Content</th>
          <th>Center</th>
          <th>Reply</th>
          <th>Action</th>
        </tr>
        <?php
        $i = 0;
        $sel = "SELECT * FROM tbl_complaint c INNER JOIN tbl_center h ON c.center_id=h.center_id WHERE c.center_id!=''";
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

  
  <?php include('Footer.php'); ?>
</body>
</html>
