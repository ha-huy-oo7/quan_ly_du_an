<?php
   $username1 = $_POST['username'];
   $password1 = $_POST['password'];

   $conn =  new mysqli("localhost",'root','','bansach');
   $sql ="SELECT * FROM admin WHERE username = '$username1'";
   $result = $conn->query($sql)->fetch_assoc();

   if($result['password'] == $password1) {
      ?>
         <script type="text/javascript">
         alert('dang nhập thanh cong ');
         window.location.href='http://localhost/admin/admin.php';
         </script>
         <?php
      }
      else
      {
         ?>
         <script type="text/javascript">
         alert('dang nhap that bai');
         window.location.href='http://localhost/admin/login.php';
         </script>
         <?php
      }


 ?>