<?php
include('../Assets/connection/connection.php');
if(isset($_POST["btn_register"]))
{
	$Name=$_POST['txt_name'];
	$Email=$_POST['txt_email'];
	$Password=$_POST['txt_pwd'];
	$Confirm_password=$_POST['txt_cpwd'];
	$Address=$_POST['txt_address'];
	$Contact=$_POST['txt_contact'];
	$Photo=$_FILES['file_photo']['name'];
	$path=$_FILES['file_photo']['tmp_name'];
	move_uploaded_file($path,'../Assets/File/Center/'.$Photo);
	$Proof=$_FILES['file_proof']['name'];
	$path=$_FILES['file_proof']['tmp_name'];
	move_uploaded_file($path,'../Assets/File/Center/'.$Proof);
	$Place=$_POST['sel_place'];
	if($Password==$Confirm_password)
	{
		$insQry="insert into tbl_center(center_name,center_email,center_password,center_address,center_contact,center_photo,center_proof,place_id)values('".$Name."','".$Email."','".$Password."','".$Address."','".$Contact."','".$Photo."','".$Proof."','".$Place."')";	
	if($con->query($insQry))
	{
		?>
    <script>
    alert("inserted")
	window.location="Login.php"
	</script>
    <?php
	}
else
{
	?>
    <script>
    alert("password mismatch")
	</script>
    <?php
	}
}
}

?>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_pwd"></label>
      <input type="password" name="txt_pwd" id="txt_pwd" /></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><label for="txt_cpwd"></label>
      <input type="password" name="txt_cpwd" id="txt_cpwd" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="sel_dis"></label>
        <select name="sel_dis" id="sel_dis" onChange="getPlace(this.value)">
        <option>--Select--</option>
        <?php
	
	$sel="select * from tbl_district";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
	{
		
		?>
        <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name']?></option>
    <?php
	}
	?>
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="sel_place"></label>
        <select name="sel_place" id="sel_place">
        <option>--Select--</option>
      </select></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" /></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="file_photo"></label>
      <input type="file" name="file_photo" id="file_photo" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="file_proof"></label>
      <input type="file" name="file_proof" id="file_proof" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_register" id="btn_register" value="Register" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {

        $("#sel_place").html(result);
      }
    });
  }

</script> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hospital Registration Form</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #D1F2EB; /* Light blue background */
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url('../Assets/Templetes/Main/img/Happy.jpg'); /* Replace with your image path */
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Dark overlay with 50% opacity */
        z-index: 1;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        width: 650px; /* Adjust width as needed */
        max-width: 100%;
        max-height: 85vh; /* Adjust height as needed */
        overflow-y: auto;
        position: relative;
        z-index: 2;
    }

    h2 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 15px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse; /* Ensures that borders are not displayed */
    }

    td {
        padding: 8px;
        border: none; /* Removes the border around cells */
    }

    label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="password"],
    input[type="file"],
    textarea,
    select {
        width: 100%;
        padding: 10px; /* Added padding for better spacing */
        border: 1px solid #ccc;
        border-radius: 8px; /* Rounded corners */
        font-size: 14px;
        box-sizing: border-box;
        background-color: #f9f9f9; /* Light background for better visibility */
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
    }

    input[type="text"]::placeholder,
    input[type="password"]::placeholder,
    textarea::placeholder,
    select {
        color: #aaa; /* Placeholder color */
    }

    input[type="radio"] {
        margin-right: 8px;
    }

    textarea {
        resize: none;
    }

    input[type="submit"] {
        background-color: #007b83; /* Teal color */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-right: 8px;
    }

    input[type="submit"]:hover {
        background-color: #005f61; /* Darker teal for hover effect */
    }

    .gender-options {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .submit-buttons {
        text-align: center;
        padding-top: 10px;
    }

    /* Updated style for the email input field */
    input[type="email"] {
        width: 100%;
        padding: 10px; /* Same padding as other fields */
        border: 1px solid #ccc;
        border-radius: 8px; /* Rounded corners like the other fields */
        font-size: 14px;
        box-sizing: border-box;
        background-color: #f9f9f9; /* Same background color */
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); /* Same shadow effect */
    }
</style>
</head>

<body>
    <div class="overlay"></div>
    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <h2>Hospital Registration</h2>
        <table>
            <tr>
                <td><label for="txt_name">Name</label></td>
                <td><input type="text" required name="txt_name" id="txt_name" required placeholder="Enter your name" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" /></td>
            </tr>
            
            <tr>
                <td><label for="txt_email">Email</label></td>
                <td><input type="email" required name="txt_email" id="txt_email" placeholder="Enter your email" /></td>
            </tr>
            <tr>
                <td><label for="txt_password">Password</label></td>
                <td><input type="password" required name="txt_pwd" id="txt_pwd" placeholder="Enter your password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/></td>
            </tr>
            <tr>
                <td><label for="txt_confirmpassword">Confirm Password</label></td>
                <td><input type="password" required name="txt_cpwd" id="txt_cpwd" placeholder="Confirm your password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" /></td>
            </tr>
            <tr>
                <td><label for="txt_address">Address</label></td>
                <td><textarea name="txt_address" id="txt_address" cols="45" rows="5" placeholder="Enter your address" required></textarea></td>
            </tr>
            <tr>
                <td><label for="sel_district">District</label></td>
                <td>
                    <select name="sel_district" id="sel_district" onChange="getPlace(this.value)" required>
                        <option>--Select--</option>
                        <?php
                        $sel="select * from tbl_district";
                        $row=$con->query($sel);
                        while($data=$row->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name']?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="sel_place">Place</label></td>
                <td>
                    <select name="sel_place" id="sel_place" required>
                        <option>--Select--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="txt_contact">Contact</label></td>
                <td><input type="text" required name="txt_contact" id="txt_contact" placeholder="Enter your contact number" pattern="[7-9]{1}[0-9]{9}" 
                title="Phone number with 7-9 and remaing 9 digit with 0-9" /></td>
            </tr>
            <tr>
                <td><label for="file_photo">Photo</label></td>
                <td><input type="file" required name="file_photo" id="file_photo" /></td>
            </tr>
            <tr>
                <td><label for="file_proof">Proof</label></td>
                <td><input type="file" required name="file_proof" id="file_proof" /></td>
            </tr>
            <tr>
                <td colspan="2" class="submit-buttons">
                    <input type="submit" name="btn_register" id="btn_register" value="Register" />
                </td>
            </tr>
        </table>
    </form>

    <script src="../Assets/JQ/jQuery.js"></script>
    <script>
        function getPlace(did) {
            $.ajax({
                url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
                success: function (result) {
                    $("#sel_place").html(result);
                }
            });
        }
    </script>
</body>
</html>
