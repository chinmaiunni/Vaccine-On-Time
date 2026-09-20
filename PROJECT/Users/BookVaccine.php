<?php
include('../Assets/connection/connection.php');
if(isset($_POST["btn_submit"]))
{
	$Category=$_POST["sel_cat"];
	$Vaccine=$_POST["txt_vaccine"];
	$SlotTime=$_POST["sel_slottime"];
	$insqry="insert into tbl_(place_name,place_pincode,district_id)values('".$Place."','".$PinCode."','".$District."')";
     if($con->query($insqry))
	{
	?>
    <script>
	alert('inserted');
	window.loction="Place.php";
	</script>
    <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_place where place_id='".$_GET["delID"]."'";
    if($con->query($delQry))
	{
				?>
                <script>
				alert('Deleted');
				window.location="Place.php";
				</script>
                <?php
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Category</td>
      <td><label for="sel_cat"></label>
        <select name="sel_cat" id="sel_cat">
      </select></td>
    </tr>
    <tr>
      <td>Vaccine</td>
      <td><label for="sel_vaccine"></label>
        <select name="sel_vaccine" id="sel_vaccine">
      </select></td>
    </tr>
    <tr>
      <td>Slot Time</td>
      <td><label for="txt_slottime"></label>
        <label for="sel_slottime"></label>
        <select name="sel_slottime" id="sel_slottime">
      </select></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><label for="txt_amount"></label>
      <input type="text" name="txt_amount" id="txt_amount"  readonly="readonly"/></td>
    </tr>
    <tr>
      <td>Slot No</td>
      <td><label for="txt_slotno"></label>
      <input type="text" name="txt_slotno"  id="txt_slotno" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>