<?php 
    include_once 'config.php';
    $masp = $_POST['masp'];
    $mahang = $_POST['mahang'];
    $tenncc = $_POST['tenncc'];
    $tacgia = $_POST['tacgia'];
    $nxb = $_POST['nxb'];
    $namxb = $_POST['namxb'];
    $ngonngu = $_POST['ngonngu'];
    $trongluong = $_POST['trongluong'];  
    $kichthuoc = $_POST['kichthuoc'];       
    $sotrang = $_POST['sotrang'];  
    $hinhthuc = $_POST['hinhthuc'];  
    $spbanchay = $_POST['spbanchay'];  
    $tomtat = $_POST['tomtat'];  
     if (isset($_POST['luu'])) {
    // code...
    $sql_them ="INSERT INTO mota(masp,mahang,tenncc,tacgia,NXB,NamXB,ngonngu,trongluong,kichthuocbaobi,sotrang,hinhthuc,spbanchaynhat,tomtat) VALUES ('$masp',' $mahang',' $tenncc','$tacgia','$nxb','$namxb','$ngonngu','$trongluong','$kichthuoc','$sotrang','  $hinhthuc','$spbanchay','$tomtat')";

    if(mysqli_query($links,$sql_them))
        {
        ?>
            <script type="text/javascript">
            alert('Thêm dữ liệu thành công!!!');
            window.location.href='http://localhost/admin/mota.php';
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