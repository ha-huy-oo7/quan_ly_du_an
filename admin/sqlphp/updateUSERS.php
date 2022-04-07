<?php 
    include_once 'config.php';
    $id = $_POST['id'];
    $suauser = $_POST['suauser'];
    $mkuser = $_POST['mkuser'];
   if (isset($_POST['sua'])) {
	// code...
	$sql_sua ="UPDATE admin SET username='$suauser',password='$mkuser' WHERE id= '$id' ";
	if(mysqli_query($links, $sql_sua))
	{
		?>
		<script type="text/javascript">
		alert('Sửa thành công');
		window.location.href='http://localhost/admin/user.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Error: Sửa không thành công');
		</script>
		<?php
	}
	// sql query execution function
}

   

 ?>