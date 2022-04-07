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
		$sql_sua ="UPDATE mota SET mahang='$mahang',tenncc='$tenncc',tacgia ='$tacgia ',NXB ='$nxb',NamXB ='$namxb',ngonngu='$ngonngu',trongluong =' $trongluong',kichthuocbaobi ='$kichthuoc',sotrang=' $sotrang',hinhthuc='$hinhthuc',spbanchaynhat='$spbanchay ',tomtat='$tomtat' WHERE masp= $masp ";
		if(mysqli_query($links, $sql_sua))
		{
			?>
			<script type="text/javascript">
			alert('Data Are Updated Successfully');
			window.location.href='http://localhost/admin/mota.php';
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