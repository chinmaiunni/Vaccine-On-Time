 <?php
include('../Assets/connection/connection.php');

// session_start();
include('header.php');
if(isset($_POST["btn_book"]))
{
    $Slot = $_POST["sel_slot"];
    $Fordate = $_POST["txt_date"];
    $amount = $_POST['txt_amt'];

    // Get the maximum slot number for the selected date and slot
    $selSlot = "SELECT MAX(booking_slot) AS slot FROM tbl_booking WHERE booking_fordate = '$Fordate' AND slot_id = '$Slot'";
    $resSlot = $con->query($selSlot);
    $dataSlot = $resSlot->fetch_assoc();
    
    $slot = ($dataSlot['slot'] == NULL) ? 1 : $dataSlot['slot'] + 1;

    // Insert booking into the database
    $insqry = "INSERT INTO tbl_booking(slot_id, booking_fordate, hospitalvaccine_id, booking_slot, user_id, booking_amount, booking_date)
               VALUES('$Slot', '$Fordate', '".$_GET['hid']."', '$slot', '".$_SESSION['uid']."', '$amount', CURDATE())";

    if($con->query($insqry)) 
    {
        // Get the last inserted booking ID
        $booking_id = $con->insert_id;

        // Set session variables
        $_SESSION['slot_number'] = $slot;
        $_SESSION['fordate'] = $Fordate;
        $_SESSION['amount'] = $amount;
        $_SESSION['hid'] = $_GET['hid'];

        // Redirect to Payment.php with booking ID
        ?>
        <script>
            window.location = "Payment.php?booking_id=<?php echo $booking_id; ?>";
        </script>
        <?php
    }
}

$selat="select * from tbl_hospitalvaccine where hospitalvaccine_id=".$_GET['hid'];
$row=$con->query($selat);
$data=$row->fetch_assoc();
  $amount=$data['hospitalvaccine_amount']



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Document Title</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
      padding: 30px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      border: 1px solid #ddd;
    }

    h3 {
      margin: 20px 0;
      font-size: 1.8rem;
      color: #008b8b;
      text-align: center;
      font-weight: 600;
      border-bottom: 2px solid #008b8b;
      padding-bottom: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 12px;
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

    input[type="text"], input[type="date"], select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      margin-top: 5px;
      font-size: 1rem;
      font-family: 'Poppins', sans-serif;
    }

    input[type="submit"] {
      background-color: #008b8b;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1rem;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #006f6f;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

    @media (max-width: 600px) {
      .container {
        padding: 20px;
      }

      h3 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>

<body>
  





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Document Title</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    /* Same styles as before */
  </style>
 
  
</head>

<body>
  <div class="container">
    <h3>Book a Slot</h3>
    <form id="form1" name="form1" method="post">
      <table>
        <tr>
          <td>For Date</td>
          <td>
            <input type="date" name="txt_date" id="txt_date" min="<?php echo date('Y-m-d')?>" required />
          </td>
        </tr>
        <tr>
          <td>Slot</td>
          <td>
            <select name="sel_slot" id="sel_slot">
              <option>--SELECT--</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Amount</td>
          <td>
            <?php
            $selat = "SELECT * FROM tbl_hospitalvaccine WHERE hospitalvaccine_id='" . $_GET['hid'] . "'";
            $row = $con->query($selat);
            $data = $row->fetch_assoc();
            $amount = $data['hospitalvaccine_amount']; 
            ?>
            <input type="text" name="txt_amt" value="<?php echo $amount ?>" readonly>
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <div align="center">
              <input type="submit" name="btn_book" id="btn_book" value="Book" />
            </div>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
    $(document).ready(function(){
      $('#txt_date').change(function(){
        var selectedDate = $(this).val();
        var hospitalVaccineId = '<?php echo $_GET["hid"]; ?>'; // Passing hospitalvaccine_id through GET
        if(selectedDate != "") {
          $.ajax({
            url: '../Assets/AjaxPages/Slot.php', // PHP file to process the slot availability
            method: 'POST',
            data: {fordate: selectedDate, hid: hospitalVaccineId},
            success: function(data){
              $('#sel_slot').html(data); // Update the slot dropdown with available slots
            }
          });
        } else {
          $('#sel_slot').html('<option>--SELECT--</option>'); // Reset if no date is selected
        }
      });
    });

    $(document).ready(function() {
  $('#txt_date').change(function() {
    var selectedDate = $(this).val();
    var hospitalVaccineId = '<?php echo $_GET["hid"]; ?>'; // Get hospitalvaccine_id
    var userId = '<?php echo $_SESSION["uid"]; ?>'; // Get logged-in user's ID

    if (selectedDate != "") {
      // AJAX call to check if the user already has a booking for the selected date
      $.ajax({
        url: '../Assets/AjaxPages/CheckBooking.php', // PHP file to handle date check
        method: 'POST',
        data: { fordate: selectedDate, hid: hospitalVaccineId, uid: userId },
        success: function(response) {
          if (response.trim() === 'exists') {
            alert('You already have a booking on this date!');
            $('#txt_date').val(''); // Reset the date input
          } else {
            // Fetch available slots
            $.ajax({
              url: '../Assets/AjaxPages/Slot.php',
              method: 'POST',
              data: { fordate: selectedDate, hid: hospitalVaccineId },
              success: function(data) {
                $('#sel_slot').html(data); // Update the slot dropdown
              }
            });
          }
        }
      });
    } else {
      $('#sel_slot').html('<option>--SELECT--</option>'); // Reset slot dropdown
    }
  });
});
  </script>
  
<?php
include('footer.php');
?> 