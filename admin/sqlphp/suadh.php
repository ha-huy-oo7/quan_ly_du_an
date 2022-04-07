<?php

   include_once 'config.php';
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

if (isset($_POST['sua'])) {
	// code...
	$sql_sua1 ="UPDATE tbl_bill SET name='$name',address='$address',tel ='$tel',email ='$email',total ='$total' WHERE id= $id";
	$sql_sua2= "UPDATE tbl_cart SET  tensp='$tensp',dongia='$dongia',soluong='$soluong',thanhtien='$thanhtien' WHERE idbill='$id'";
   mysqli_query($links, $sql_sua2);
   if(mysqli_query($links, $sql_sua1))
   {
      ?>
      <script type="text/javascript">
      alert('Sửa sản phẩm thành công');
      window.location.href='http://localhost/admin/donhang.php';
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


}

?>
