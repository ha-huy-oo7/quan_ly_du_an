<?php

   include_once('config.php');
   $masp = $_POST['masp'];
   $tensp = $_POST['tensp'];
   $giaban= $_POST['giaban'];
   $giakm = $_POST['giakm'];
   $soluongton = $_POST['soluongton'];
   $mancc = $_POST['mancc'];
   $id_cate = $_POST['id'];
   $daban = $_POST['daban'];
  	
   //xu ly hinh anh

if (isset($_POST['suasp'])) {
	// code...
	$sql_sua ="UPDATE sanpham SET tensp='$tensp',giaban ='$giaban',giakm ='$giakm',soluongton ='$soluongton',mancc ='$mancc',daban ='$daban',id_cate='$id_cate' WHERE masp= '$masp' ";
	if(mysqli_query($links, $sql_sua))
	{
		?>
		<script type="text/javascript">
		alert('Sửa sản phẩm thành công');
		window.location.href='http://localhost/admin/buttons.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Error: Sửa không thành công');
		window.location.href='http://localhost/admin/suasanpham.php';
		</script>
		<?php
	}
	// sql query execution function
}
?>
