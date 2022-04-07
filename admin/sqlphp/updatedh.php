
<?php
	include 'config.php';
    error_reporting(0);
	$host = "localhost";
	$user = "root";
	$password = "";
	$datbase = "bansach";
	$links = mysqli_connect($host,$user,$password);
	mysqli_select_db($links, $datbase);
	mysqli_set_charset($links,"utf8");
	if(isset($_REQUEST["b1"])==false)
	   echo "<h3> chưa submit từ form</h3>";
	else
	{
		$id = $_POST['id'];
	   $name = $_POST['name'];
	   $tensp = $_POST['tensp'];
	   $address = $_POST['address'];
	   $dongia = $_POST['dongia'];
	   $soluong = $_POST['soluong'];
	   $thanhtien = $_POST['thanhtien'];
	   $tel = $_POST['tel'];
	   $email = $_POST['email'];
	   $total = $_POST['total'];

   		$tenanh = $_FILES["hinhanh"]["name"];//lấy tên của file ảnh gốc
      	$temptFile = $_FILES["hinhanh"]["tmp_name"];//lấy đường dẫn file ảnh đã upload trên thư mục tạm
      	move_uploaded_file($temptFile,"hinhanh/$tenanh");

		$sql_them1 ="INSERT INTO tbl_bill(id,name,address,tel,email,total) VALUES ('$id','$name','$address',' $tel','$email','$total')";
		if(mysqli_query($links,$sql_them1))
		{
		?>
			<script type="text/javascript">
			alert('them du lieu thanh cong');
			window.location.href='http://localhost/admin/themdhkh.php?id=<?php echo $id ?>';
			</script>
			<?php
		}
		else
		{
			?>
			<script type="text/javascript">
			alert('them khong thanh cong');
			</script>
			<?php
		}

		
}
 ?>