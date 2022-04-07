<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$datbase = "bansach";
$links = mysqli_connect($host,$user,$password);
mysqli_select_db($links, $datbase);
mysqli_set_charset($links,"utf8");


	$id= $_POST['idbill'];
	   $tensp = $_POST['tensp'];
	   $dongia = $_POST['dongia'];
	   $soluong = $_POST['soluong'];
	   $thanhtien = $_POST['thanhtien'];

      $tenanh = $_FILES["hinhanh"]["name"];//lấy tên của file ảnh gốc
      $temptFile = $_FILES["hinhanh"]["tmp_name"];//lấy đường dẫn file ảnh đã upload trên thư mục tạm
      move_uploaded_file($temptFile,"hinhanh/$tenanh");
      $sql_query = "INSERT INTO tbl_cart(tensp,hinhanh,dongia,soluong,thanhtien,idbill) VALUES('$tensp','$tenanh','$dongia','$soluong','$thanhtien','$id')";
     
      if( mysqli_query($links,$sql_query))
            {
            ?>
               <script type="text/javascript">
               alert('them du lieu thanh cong');
               window.location.href='http://localhost/admin/donhang.php';
               </script>
               <?php
            }
            else
            {
               ?>
               <script type="text/javascript">
               alert('them du lieu khong thanh cong');
               </script>
               <?php
            }
 
           

?>