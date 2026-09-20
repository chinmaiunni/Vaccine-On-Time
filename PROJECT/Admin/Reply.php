<?php
session_start();
include('../Assets/connection/connection.php');
if(isset($_POST["btn_submit"]))
{
	
	$Reply=$_POST["txt_reply"];
	$updqry="update tbl_complaint set complaint_status='1',complaint_reply='".$Reply."'where complaint_id='".$_GET['repliID']."'";
     if($con->query($updqry))
	{
	header("loaction:Viewreplys.php");
	}
	}
  
	?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit Reply</title>
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
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background-color: #006f6f;
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Submit a Reply</h3>
    <form id="form1" name="form1" method="post" action="">
      <table>
        <tr>
          <td>Reply</td>
          <td>
            <textarea name="txt_reply" id="txt_reply" cols="45" rows="5" required></textarea>
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
  </div>
</body>
</html>
