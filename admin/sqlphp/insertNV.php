<?php 
    include_once 'config.php';
    $manv = $_POST['manv'];
    $tennv = $_POST['tennv'];
    $sex = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];     
     if (isset($_POST['luu'])) {
	// code...
	$sql_them ="INSERT INTO nhanvien(manv,tennv,gioitinh,namsinh,sdt,diachi) VALUES ('$manv','$tennv','$sex',' $ngaysinh','$sdt','$diachi')";

	if(mysqli_query($links,$sql_them))
		{
		?>
			<script type="text/javascript">
			alert('Data Are Inserted Successfully ');
			window.location.href='http://localhost/admin/nhanvien.php';
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