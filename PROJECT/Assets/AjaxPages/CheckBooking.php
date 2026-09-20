<?php
include('../connection/connection.php');

if (isset($_POST['fordate']) && isset($_POST['hid']) && isset($_POST['uid'])) {
    $fordate = $_POST['fordate'];
    $hospitalVaccineId = $_POST['hid'];
    $userId = $_POST['uid'];

    // Query to check if the user has a booking on the selected date
    $query = "SELECT * FROM tbl_booking 
              WHERE booking_fordate = '$fordate' 
              AND hospitalvaccine_id = '$hospitalVaccineId' 
              AND user_id = '$userId'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        echo 'exists'; // Return "exists" if a booking is found
    } else {
        echo 'available'; // Return "available" if no booking is found
    }
}
?>
