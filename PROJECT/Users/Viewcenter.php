<?php
include('../Assets/connection/connection.php');
include('header.php');

?>



<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

  <form id="form1" name="form1" method="post" action="">
    <table width="200" border="1" align="center" cellpadding="10" cellspacing="10">
      <tr>
        <td>Category</td>
        <td><label for="sel_cat"></label>
           <select name="sel_cat" id="sel_cat" onChange="getVaccine(this.value)">>
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
        </select></td>
      </tr>
      <tr>
        <td>Vaccine</td>
        <td><label for="sel_vaccine"></label>
          <select name="sel_vaccine" id="sel_vaccine">
          <option>--SELECT--</option>
           
        </select></td>
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
        <select name="sel_place" id="sel_place" onchange="getHospital(this.value,document.getElementById('sel_vaccine').value)">
        <option>--Select--</option>
      </select></td>
    </tr>
    </table>
  
    <p>&nbsp;</p>
  </form>
    <div id="search">
  <h1 align="center">Vaccination Time</h1>
  </div>


</body>
</html>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getVaccine(vid) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxVaccine.php?vid=" + vid,
      success: function (result) {

        $("#sel_vaccine").html(result);
      }
    });
  }


  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {

        $("#sel_place").html(result);
      }
    });
  }
  function getHospital(pid,vid) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxSearch.php?pid=" + pid+"&vid="+vid,
      success: function (result) {

        $("#search").html(result);
      }
    });
  }


</script>
 <?php
// include('footer.php');
?> --> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Center</title>
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
            justify-content: center;
            /* align-items: center; */
        }

        header, footer {
            background-color: #004d40; /* Dark teal for header and footer */
            color: white;
            padding: 10px 20px;
            text-align: center;
            width: 100%;
        }

        .view-center-container {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.15); /* Softer, deeper shadow */
            width: 90%;
            max-width: 800px; /* Slightly larger for more content space */
            padding: 40px;
            margin: 40px auto;
            text-align: center;
            flex-grow: 1;
            transition: all 0.3s ease-in-out;
        }

        /* Heading for View Center */
        .view-center-container h1.heading {
            font-size: 32px;
            color: #00796b; /* Dark teal */
            margin-bottom: 40px;
            font-weight: bold;
            border-bottom: 3px solid #00796b;
            padding-bottom: 15px;
        }

        .view-center-container table {
            width: 100%;
            margin-top: 30px;
            border-collapse: separate;
            border-spacing: 0 15px; /* Adds space between rows */
            table-layout: fixed; /* Ensures cells don't stretch beyond available space */
            overflow-x: auto; /* Allows horizontal scroll if content overflows */
        }

        .view-center-container td {
            padding: 14px 20px; /* Increased padding for larger touch area */
            font-size: 15px;
            background-color: #f1f8f9; /* Subtle background for table cells */
            border-radius: 10px; /* Rounded corners for table cells */
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05); /* Soft shadow for each cell */
        }

        .view-center-container select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background-color: #fafafa; /* Slight background for inputs */
            transition: all 0.3s ease-in-out;
        }

        .view-center-container select:focus {
            border-color: #00796b;
            box-shadow: 0 0 8px rgba(0, 121, 107, 0.3);
            background-color: #ffffff; /* Bright background on focus */
        }

        #search h1 {
            color: #00796b;
            font-size: 26px;
            margin-top: 40px;
            text-align: left;
        }

        footer {
            position: relative;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            padding: 15px 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
            color: #ffffff;
        }

        /* Add subtle hover effects */
        .view-center-container td:hover {
            transform: scale(1.03);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        /* Styling for the search button */
        .view-center-container button {
            background-color: #00796b; /* Teal color */
            color: white; /* Text color */
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .view-center-container button:hover {
            background-color: #004d40; /* Darker teal on hover */
        }

    </style>
</head>

<body>

<div class="view-center-container">
    <h1 class="heading">Search Vaccination Center</h1>

    <form id="form1" name="form1" method="post" action="javascript:void(0);">
        <table>
            <tr>
                <td>Category</td>
                <td>
                    <select name="sel_cat" id="sel_cat" onChange="getVaccine(this.value)">
                        <option>--SELECT--</option>
                        <?php
                        $sel = "select * from tbl_category";
                        $row = $con->query($sel);
                        while ($data = $row->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $data['category_id'] ?>"><?php echo $data['category_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Vaccine</td>
                <td>
                    <select name="sel_vaccine" id="sel_vaccine">
                        <option>--SELECT--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>District</td>
                <td>
                    <select name="sel_dis" id="sel_dis" onChange="getPlace(this.value)">
                        <option>--Select--</option>
                        <?php
                        $sel = "select * from tbl_district";
                        $row = $con->query($sel);
                        while ($data = $row->fetch_assoc()) {
                        ?>
                            <option value="<?php echo $data['district_id'] ?>"><?php echo $data['district_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Place</td>
                <td>
                    <select name="sel_place" id="sel_place">
                        <option>--Select--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="button" onclick="searchHospitals()">Search</button>
                </td>
            </tr>
        </table>
    </form>

    <div id="search">
        <h1>Available Hospitals</h1>
        <!-- Hospitals data dynamically populated here -->
    </div>
</div>

<?php
include('footer.php');
?>

<script src="../Assets/JQ/jQuery.js"></script>
<script>
    function getVaccine(vid) {
        $.ajax({
            url: "../Assets/AjaxPages/AjaxVaccine.php?vid=" + vid,
            success: function (result) {
                $("#sel_vaccine").html(result);
            }
        });
    }

    function getPlace(did) {
        $.ajax({
            url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
            success: function (result) {
                $("#sel_place").html(result);
            }
        });
    }

    function searchHospitals() {
        var pid = $("#sel_place").val();
        var vid = $("#sel_vaccine").val();

        $.ajax({
            url: "../Assets/AjaxPages/AjaxSearch.php?pid=" + pid + "&vid=" + vid,
            success: function (result) {
                $("#search").html(result);
            }
        });
    }
</script>

</body>
</html>
