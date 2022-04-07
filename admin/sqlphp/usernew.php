
<?php
    include_once 'config.php';
	if(isset($_POST['luu']))
	{
		// variables for input data
		$user = $_POST['taikhoanuser'];
		$pass = $_POST['matkhauuser'];
		// variables for input data
		
		// sql query for inserting data into database
		$sql_query = "INSERT INTO admin(username,password) VALUES('$user','$pass')";
		// sql query for inserting data into database
		if(mysqli_query($links,$sql_query))
		{
		?>
			<script type="text/javascript">
			alert('Data Are Inserted Successfully ');
			window.location.href='http://localhost/admin/user.<?php  ?>';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('error occured while inserting your data');
			</script>
			<?php
		}

	}
?>