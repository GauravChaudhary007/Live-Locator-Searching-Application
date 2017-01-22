<!-- < HeaderFile> -->
<?php include_once 'include/header.php'; ?>
<!-- </ HeaderFile> -->

<?php
	$id = $_SESSION['id'];
	$sql = mysql_query("SELECT * FROM `people` WHERE `id`='$id'");
	$user_data = mysql_fetch_array($sql);
?>

<div id='edit-main-container'>
	<form action="" method="get">

		<table id='edit-table'>
			<tr>
				<td colspan='2'>
					<b>Register</b>
				</td>
			</tr>	

			<tr id='search-map'>
			<center>
				<td rowspan='3'>
					<input type="text" id="address"/>
					<input type="hidden" id="lat" value="<?php echo @$user_data['lat']; ?>">
					<input type="hidden" id="lon" value="<?php echo @$user_data['lon']; ?>">
					<div id="us3" style="width: 660px; height: 400px;"></div>
    			</td>
				<td width="40%"> <input type="text" value="<?php echo @$user_data['name']; ?>" name="name" id="name" placeholder ="Enter Your Name" ></td>
			</center>
			</tr>

			<tr>
				
				<td> <input type="text" value="<?php echo @$user_data['phone'];?>" name="phone" id="phone" placeholder=" Your Phone" ></td>
			</tr>

			<tr>
				
				<td><input type="text" name="email" value="<?php echo @$user_data['email'];?>" id="email" placeholder="Email ID"></td>
			</tr>

			<tr>
				<td colspan="2">
					<div id="edit-submit-button">
						Submit
					</div>
				</td>
			</tr>


		</table>

	</form>
</div>
<?php
# code...
?>


    <script>

	    var clatitude = $('#lat').val();
	    var clongitude = $('#lon').val();

    	$('#us3').locationpicker({
        location: {latitude: clatitude, longitude: clongitude},
        radius: 100,
        inputBinding: {
            latitudeInput: $('#lat'),
			longitudeInput: $('#lon'),
            locationNameInput: $('#address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });</script>
<script type="text/javascript" src="js/edit.js"></script>
<!-- < FooterFile> -->
<?php include_once 'include/footer.php'; ?>
<!-- </ FooterFile> -->