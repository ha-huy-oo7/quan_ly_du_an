<?php 
    include_once 'sqlphp/config.php';
    if(isset($_GET['edit_id']))
    {
    $sql_query="SELECT * FROM mota WHERE masp=".$_GET['edit_id'];
    $result_set=mysqli_query($links, $sql_query);
    $fetched_row=mysqli_fetch_array($result_set); 
    }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sửa mô tả </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="themsp.css">
</head>

<body id="page-top">
	<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Huy<sup>S</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-house-user"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Hàng Hóa
            </div>

            <!-- danh mục sản phẩm -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>Sản phẩm</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý sản phẩm:</h6>
                        <a class="collapse-item" href="buttons.php">Sản phẩm</a>
                        <a class="collapse-item" href="themsanpham.php">Thêm sửa xóa sản phẩm</a>
                        <a class="collapse-item" href="suasanpham.php">Sửa sản phẩm</a>
                    </div>
                </div>
            </li>
             <!-- danh mục mo tả -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-book"></i>
                    <span>Mô tả sản phẩm</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý mô tả sản phẩm:</h6>
                        <a class="collapse-item" href="mota.php">Mô tả sản phẩm</a>
                        <a class="collapse-item" href="themmota.php">Thêm mô tả</a>
                        <a class="collapse-item" href="suamota.php">Sửa mô tả</a>
                    </div>
                </div>
            </li>


            <!-- danh mục đơn hàng  -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-file-invoice"></i>
                    <span>Đơn hàng</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý đơn hàng:</h6>
                        <a class="collapse-item" href="donhang.php">Đơn hàng</a>
                        <a class="collapse-item" href="themdonhang.php">Thêm đơn hàng</a>
                        <a class="collapse-item" href="suadonhang.php">Sửa đơn hàng</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý chung
            </div>

            <!------danh mục người dùng----->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseuser"
                    aria-expanded="true" aria-controls="collapseuser">
                    <i class="fas fa-users"></i>
                    <span>Quản lý Tài Khoản</span>
                </a>
                <div id="collapseuser" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Tài khoản admin:</h6>
                        <a class="collapse-item" href="user.php">Thông tin tài khoản</a>
                        <a class="collapse-item" href="themuser.php">Thêm tài khoản</a>
                        <a class="collapse-item" href="suauser.php">Sửa tài khoản</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
<!------danh mục nhan vien ----->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsnhanvien"
                    aria-expanded="true" aria-controls="collapsnhanvien">
                    <i class="fas fa-users"></i>
                    <span>Quản lý nhân viên</span>
                </a>
                <div id="collapsnhanvien" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý nhân viên</h6>
                        <a class="collapse-item" href="nhanvien.php">Thông tin nhân viên</a>
                        <a class="collapse-item" href="themnhanvien.php">Thêm nhân viên</a>
                        <a class="collapse-item" href="suanhanvien.php">Sửa nhân viên</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

<!------ket thuc danh muc nhan vien ----->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
<!----content-------------------------->
<div id="content-wrapper" class="d-flex flex-column">
    <form action="sqlphp/xulysuamota.php" method="POST">
    <div id="content">
        <div class="thanhhome">
            <a href="admin.html"><label><i class="fas fa-home"></i>Trang chủ</label></a>
            <i class="fas fa-greater-than"></i><a style="margin:0px 10px" href="buttons.html"><label>Mô tả</label></a>
            <i class="fas fa-greater-than"></i><a style="margin:0px 10px" href="themsanpham.html"><label>Sửa mô tả</label></a>
        </div>

    <div class="bangthemdh" style="margin: 10px 10px;">
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Thông tin chung</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Mã sản phẩm: <input type="text" class="masp form-control bg-light border-0 small"  value="<?php echo $fetched_row['masp'] ?>" aria-label="Search" aria-describedby="basic-addon2" name="masp"></td>
      </tr>
      <tr>
        <td>Mã hàng: <input type="text" class="mahang form-control bg-light border-0 small " value="<?php echo $fetched_row['mahang'] ?>"  aria-label="Search" aria-describedby="basic-addon2" name="mahang"></td>
      </tr>
      <tr>
        <td>Tên nhà cung cấp: <input type="text" class="tenncc form-control bg-light border-0 small " value="<?php echo $fetched_row['tenncc'] ?>"  aria-label="Search" aria-describedby="basic-addon2" name="tenncc"></td>
      </tr>
      <tr>
        <td>Tác giả: <input type="text" class="tacgia form-control bg-light border-0 small " value="<?php echo $fetched_row['tacgia'] ?>" aria-label="Search" aria-describedby="basic-addon2" name="tacgia"></td>
      </tr>
      <tr>
        <td>Nhà xuất bản: <input type="text" class="nxb form-control bg-light border-0 small " value="<?php echo $fetched_row['NXB'] ?>"aria-label="Search" aria-describedby="basic-addon2" name="nxb"></td>
      </tr>
      <tr>
        <td>Năm xuất bản: <input type="text" class="namxb form-control bg-light border-0 small " value="<?php echo $fetched_row['NamXB'] ?>"   aria-label="Search" aria-describedby="basic-addon2" name="namxb"></td>
      </tr>
      <tr>
        <td>Ngôn ngữ: <input type="text" class="ngongu form-control bg-light border-0 small " value="<?php echo $fetched_row['ngonngu'] ?>"aria-label="Search" aria-describedby="basic-addon2" name="ngonngu"></td>
      </tr>
      <tr>
        <td>Trọng lượng: <input type="text" class="trongluong form-control bg-light border-0 small "value="<?php echo $fetched_row['trongluong'] ?>" aria-label="Search" aria-describedby="basic-addon2" name="trongluong"></td>
      </tr>
      <tr>
        <td>Kích thước bao bì: <input type="text" class="kichthuoc form-control bg-light border-0 small " value="<?php echo $fetched_row['kichthuocbaobi'] ?>" aria-label="Search" aria-describedby="basic-addon2" name="kichthuoc"></td>
      </tr>
      <tr>
        <td>Số trang: <input type="text" class="sotrang form-control bg-light border-0 small " value="<?php echo $fetched_row['sotrang'] ?>" aria-label="Search" aria-describedby="basic-addon2" name="sotrang"></td>
      </tr>
      <tr>
        <td>Hình thức: <input type="text" class="hinhthuc form-control bg-light border-0 small " value="<?php echo $fetched_row['hinhthuc'] ?>"aria-label="Search" aria-describedby="basic-addon2" name="hinhthuc"></td>
      </tr>
      <tr>
        <td>SP bán chạy: <input type="text" class="spbanchay form-control bg-light border-0 small " value="<?php echo $fetched_row['spbanchaynhat'] ?>"aria-label="Search" aria-describedby="basic-addon2" name="spbanchay"></td>
      </tr>
      <tr>
        <td>Tóm tắt: <input type="text" class="tomtat form-control bg-light border-0 small " value="<?php echo $fetched_row['tomtat'] ?>"aria-label="Search" aria-describedby="basic-addon2" name="tomtat"></td>
      </tr>
        <td>
            <input type="submit" name="luu" value="Sửa" class="buttontable">
            <input type="reset" name="thoat" value="Thoát" class="buttontable">
        </td>
      </tr>


            </tbody>
          </table>
        </div>        


        </div>
    </div>
</form>
</div>

<!--end content--------------------------------------->
    </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


</body>
</html>
