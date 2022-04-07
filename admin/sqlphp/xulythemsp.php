<?php
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
   $masp = $_REQUEST["masp"];
   $tensp = $_REQUEST["tensp"];
   $giaban = $_REQUEST["giaban"];
   $giakm = $_REQUEST["giakm"];
   $soluongton = $_REQUEST["soluongton"];
   $mancc = $_REQUEST["mancc"];
   $daban = $_REQUEST["daban"];
   $id_cate = $_REQUEST["id_cate"];
   if(isset($_FILES["hinhanh"])&&$_FILES["hinhanh"]["error"]==0)
   {
      $tenanh = $_FILES["hinhanh"]["name"];//lấy tên của file ảnh gốc
      $temptFile = $_FILES["hinhanh"]["tmp_name"];//lấy đường dẫn file ảnh đã upload trên thư mục tạm
      move_uploaded_file($temptFile,"hinhanh/$tenanh");
      $sql_query = "INSERT INTO sanpham(masp,tensp,giaban,giakm,soluongton,mancc,daban,hinhanh,id_cate) VALUES('$masp','$tensp','$giaban','$giakm','$soluongton','$mancc','$daban','$tenanh','$id_cate')";
     
      if( mysqli_query($links,$sql_query))
            {
            ?>
               <script type="text/javascript">
               alert('them du lieu thanh cong');
               window.location.href='http://localhost/admin/buttons.php';
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
   }
}
           

?>