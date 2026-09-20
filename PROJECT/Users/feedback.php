<?php
include('../Assets/connection/connection.php');
include('header.php');
if(isset($_POST["btn_submit"]))
{
	$id=$_POST['txt_hidden'];
	$Content=$_POST["txt_content"];
	if($id==""){
	$insqry="insert into tbl_feedback(feedback_content,user_id)values('".$Content."','".$_SESSION['uid']."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="feedback.php";
	</script>
    <?php
	}
}
else{
		$updQry="update tbl_feedback set feedback_content='".$Content."' where feedback_id=".$id;	
     if($con->query($updQry))
	{
	?>
    <script>
    alert("Updated");
	window.location="feedback.php";
	</script>
    <?php
	}
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_feedback where feedback_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="feedback.php";
				</script>
                <?php
	}
}
$feedbackcontent="";
$feedbackid="";
if(isset($_GET['eid'])){
	$selEdit="select * from tbl_feedback where feedback_id=".$_GET['eid'];
	$resEdit=$con->query($selEdit);
	$datEdit=$resEdit->fetch_assoc();
	$feedbackcontent=$datEdit['feedback_content'];
	$feedbackid=$datEdit['feedback_id'];	
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
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
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            font-size: 1.5rem;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-table,
        .feedback-table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-table td {
            padding: 10px;
            vertical-align: top;
        }

        .form-table textarea {
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            font-size: 1rem;
            resize: vertical;
        }

        .form-table input[type="submit"] {
            background-color: #008b8b;
            color: #fff;
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-table input[type="submit"]:hover {
            background-color: #007373;
        }

        .feedback-table {
            overflow-x: auto;
        }

        .feedback-table th,
        .feedback-table td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .feedback-table th {
            background-color: #008b8b;
            color: #fff;
            font-weight: bold;
        }

        .feedback-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .feedback-table tr:hover {
            background-color: #e7f3ff;
        }

        .feedback-table td a {
            color: #007bff;
            text-decoration: none;
            margin: 0 5px;
        }

        .feedback-table td a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Feedback Form</h3>
        <form id="form1" name="form1" method="post" action="">
            <table class="form-table">
                <tr>
                    <td>Content</td>
                    <td>
                        <input type="hidden" name="txt_hidden" id="txt_hidden" value="<?php echo $feedbackid ?>" />
                        <textarea name="txt_content" id="txt_content" rows="5"><?php echo $feedbackcontent ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>

        <h3>Feedback Records</h3>
        <table class="feedback-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $sel = "SELECT * FROM tbl_feedback f INNER JOIN tbl_newuser u ON u.user_id=f.user_id";
                $row = $con->query($sel);
                while ($data = $row->fetch_assoc()) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data['feedback_content'] ?></td>
                        <td>
                            <a href="feedback.php?delID=<?php echo $data['feedback_id'] ?>">Delete</a> |
                            <a href="feedback.php?eid=<?php echo $data['feedback_id'] ?>">Edit</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
