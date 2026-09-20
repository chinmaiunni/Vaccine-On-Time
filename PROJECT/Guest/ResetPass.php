
<?php
session_start();
include("../Assets/connection/connection.php");


if(isset($_POST['btn_submit'])){
    $pass=$_POST['txt_pass'];
    $cpass=$_POST['txt_cpass'];
    if($pass==$cpass){
        if(isset($_SESSION['ruid'])){ //User
            $updQry="update tbl_newuser set user_password='".$pass."' where user_id=".$_SESSION['ruid'];
            if($con->query($updQry)){
                ?>
                <script>
                    alert("Password Updated")
                    window.location="../Logout.php"
                    </script>
                <?php
            }
        }
        else if(isset($_SESSION['rsid'])){ //Seller
            $updQry="update tbl_center set center_password='".$pass."' where center_id=".$_SESSION['rsid'];
            if($con->query($updQry)){
                ?>
                <script>
                    alert("Password Updated")
                    window.location="../Logout.php"
                    </script>
                <?php
            }
        }
      
        
        else{
            ?>
            <script>
                alert('Something went wrong')
                    window.location="../Logout.php"
                </script>
            <?php
        }
    }
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border='1'>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="txt_pass" id=""></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="txt_cpass" id=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="btn_submit" value="Change Password"></td>
                
            </tr>
        </table>
    </form>
</body>
</html> -->

<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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
            justify-content: center; /* Center vertically */
            align-items: center; /* Center horizontally */
        }

        .reset-password-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 30px;
            text-align: center;
        }

        /* Heading for Reset Password (Same style as Change Password) */
        .reset-password-container h1.heading {
            font-size: 28px;
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-weight: bold;
            border-bottom: 2px solid #00796b; /* Optional: Adds underline */
            padding-bottom: 10px;
        }

        .reset-password-container table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .reset-password-container td {
            padding: 10px;
        }

        .reset-password-container label {
            font-weight: bold;
            color: #004d40; /* Dark teal */
            display: block;
            text-align: left;
            margin-bottom: 5px;
        }

        .reset-password-container input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
        }

        .reset-password-container input[type="submit"] {
            text-decoration: none;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-size: 14px;
            font-weight: bold;
            background-color: #00796b; /* Teal color */
        }

        .reset-password-container input[type="submit"]:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

        .submit-buttons {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="reset-password-container">
        <h1 class="heading">Reset Password</h1> <!-- Same styled heading -->
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="txt_pass">New Password</label></td>
                    <td><input type="password" name="txt_pass" id="txt_pass" placeholder="Enter new password" /></td>
                </tr>
                <tr>
                    <td><label for="txt_cpass">Confirm Password</label></td>
                    <td><input type="password" name="txt_cpass" id="txt_cpass" placeholder="Re-enter new password" /></td>
                </tr>
                <tr>
                    <td colspan="2" class="submit-buttons">
                        <input type="submit" name="btn_submit" value="Reset Password" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
