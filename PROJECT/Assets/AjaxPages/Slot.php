<?php
include('../connection/connection.php');

if(isset($_POST['fordate']) && isset($_POST['hid'])) {
  $fordate = $_POST['fordate'];
  $hospitalvaccine_id = $_POST['hid'];

  $sel="select * from tbl_hospitalvaccine where hospitalvaccine_id=".$hospitalvaccine_id;
  $r=$con->query($sel);
  $d=$r->fetch_assoc();
  


  // Fetch all slots
  $query = "SELECT * FROM tbl_slot where center_id=".$d['center_id'] ;
  $result = $con->query($query);

  // Initialize available slot options
  $options = '<option>--SELECT--</option>';

  // Loop through each slot
  while($row = $result->fetch_assoc()) {
    $slot_id = $row['slot_id'];

    // Check if the slot is already booked for the selected date
    $checkQuery = "SELECT * FROM tbl_booking WHERE booking_fordate='$fordate' AND slot_id='$slot_id' AND hospitalvaccine_id='$hospitalvaccine_id' ";
    $checkResult = $con->query($checkQuery);

    // If no booking exists for this slot, it is available
    if($checkResult->num_rows == 0) {
      $options .= '<option value="'.$slot_id.'">'.$row['slot_from'].' - '.$row['slot_to'].'</option>';
    }
  }

  // Return the available slots as options
  echo $options;
}
?>