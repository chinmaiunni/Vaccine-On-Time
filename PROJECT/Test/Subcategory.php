<?php
include('../Assets/connection/connection.php');
if(isset($_POST["btn_save"]))
{
	$Category=$_POST['sel_cat'];
	$Subcategory=$_POST['txt_subcat'];
	$insQry="insert into tbl_subcategory(category_id,subcategory_name)values('".$Category."','".$Subcategory."')";
	if($con->query($insQry))
	{
		?>
        <script>
		alert('Inserted');
		window.location="Subcategory.php";
		</script>
        <?php
	}
}
if(isset($_GET["delID"]))
{
	$delQry="delete from tbl_subcategory where subcategory_id='".$_GET["delID"]."'";
if($con->query($delQry))
	{
		?>
        <script>
		alert('Deleted');
		window.location="Subcategory.php";
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
        <div align="justify">
          <select name="sel_cat" id="sel_cat">
            <option>--SELECT--</option>
            <?php
			
			$sel="select * from tbl_category";
			$row=$con->query($sel);
			while($data=$row->fetch_assoc())
			{
				?>
                <option value="<?php echo $data['category_id'] ?>"><?php echo $data['category_name'] ?>"</option>
                <?php
			}
			?>
			
          </select>
      </div></td>
    </tr>
    <tr>
      <td>Subcategory</td>
      <td><label for="txt_subcat"></label>
      <input type="text" name="txt_subcat" id="txt_subcat" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btn_save" id="btn_save" value="Save" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>SNo</td>
      <td>Category</td>
      <td>Subcategory</td>
      <td>Action</td>
    </tr>
    <?php
	$i=0;
	$sel="select * from tbl_subcategory s inner join tbl_category c on s.category_id=c.category_id";
	$row=$con->query($sel);
	while($data=$row->fetch_assoc())
			{
				$i++
				?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data['category_name'] ?></td>
      <td><?php echo $data['subcategory_name'] ?></td>
      <td><a href="Subcategory.php?delID=<?php echo $data['subcategory_id']?>">Delete</a></td>
    </tr>
    <?php
			}
			?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>