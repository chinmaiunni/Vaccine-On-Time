<option>----Select----</option>
<?php
include('../connection/connection.php');
$sel="select * from tbl_vaccine where category_id='".$_GET['vid']."'";
$row=$con->query($sel);
while($data=$row->fetch_assoc())
{
	?>
	<option value="<?php echo $data['vaccine_id'] ?>"><?php echo $data['vaccine_name'] ?></option>
    <?php
}
?>