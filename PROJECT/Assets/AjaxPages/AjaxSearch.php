<?php
include('../connection/connection.php');
$i = 0;

// Modified query to use SELECT * and include stock check and total bookings calculation
$sel = "
    SELECT *, 
           IFNULL(s.stock_quantity, 0) AS stock_quantity, 
           IFNULL((SELECT COUNT(*) FROM tbl_booking b WHERE b.hospitalvaccine_id = hv.hospitalvaccine_id), 0) AS total_bookings 
    FROM tbl_center c 
    INNER JOIN tbl_place p ON c.place_id = p.place_id 
    INNER JOIN tbl_district d ON p.district_id = d.district_id 
    INNER JOIN tbl_hospitalvaccine hv ON hv.center_id = c.center_id 
    INNER JOIN tbl_vaccine v ON hv.vaccine_id = v.vaccine_id 
    LEFT JOIN tbl_stock s ON s.hospitalvaccine_id = hv.hospitalvaccine_id 
    WHERE c.center_status = '1' 
    AND p.place_id = '".$_GET['pid']."' 
    AND hv.vaccine_id = ".$_GET['vid'];

$row = $con->query($sel);
if ($row->num_rows > 0) {
?>
    <table width="200" border="1" align="center">
        <tr>
            <td>SLNo</td>
            <td>Center</td>
            <td>Address</td>
            <td>Contact</td>
            <td>Image</td>
            <td>Vaccine</td>
            <td>Price</td>
            <td>Time Slot</td>
        </tr>
        <?php
        while ($data = $row->fetch_assoc()) {
            $i++;
            $stock = isset($data['stock_quantity']) ? $data['stock_quantity'] : 0; // Get stock quantity
            $booked_slots = isset($data['total_bookings']) ? $data['total_bookings'] : 0; // Get total bookings
            $available_stock = $stock - $booked_slots; // Calculate available stock
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $data['center_name'] ?></td>
                <td><?php echo $data['center_address'] ?></td>
                <td><?php echo $data['center_contact'] ?></td>
                <td><img src="../Assets/File/Center/<?php echo $data['center_photo'] ?>" width="50" height="50" /></td>
                <td><?php echo $data['vaccine_name'] ?></td>
                <td><?php echo $data['hospitalvaccine_amount'] ?></td>
                <td>
                    <?php if ($available_stock > 0) { ?>
                        <a href="Viewslots.php?hid=<?php echo $data['hospitalvaccine_id'] ?>">Book Time</a>
                    <?php } else { ?>
                        <span style="color: red;">Out of Stock</span>
                    <?php } ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
} else {
    echo "<h1 align='center'>No center found</h1>";
}
?>