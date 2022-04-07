<?php 
    include_once 'config.php';
    $manv = $_POST['manv'];
    $tennv = $_POST['tennv'];
    $sex = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi']; 

   if (isset($_POST['sua'])) {
	// code...
	$sql_sua ="UPDATE nhanvien SET tennv='$tennv',gioitinh='$sex',namsinh ='$ngaysinh',sdt ='$sdt',diachi = '$diachi' WHERE manv= $manv ";
	if(mysqli_query($links, $sql_sua))
	{
		?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='http://localhost/admin/nhanvien.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('error occured while updating data');
		</script>
		<?php
	}
	// sql query execution function
}

   

 ?>