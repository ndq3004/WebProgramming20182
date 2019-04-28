<!DOCTYPE html>
<html>
    <head>
        <title>home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="js/jquery-3.2.1.min.js">
        <link rel="stylesheet" type="text/css" href="css/userprofile.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/specimen_stylesheet.css">
    <link rel="stylesheet" type="text/css" href="css/960.css">
    <link rel="stylesheet" type="text/css" href="css/text.css">
    <link rel="stylesheet" type="text/css" href="css/grid_12-825-55-15.css">
   <script src="../js/easytabs.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

      
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <base href="{{asset('')}}">
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="header-top">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-md-6" id="header-text">
                                <!-- <a>Welcome</a>to my shop -->
                            </div>
                            <div class="col-md-6">
                                <nav id="header-nav-top">
                                    <ul class="list-inline pull-right" id="headermenu">
                                        <?php if (isset($_SESSION['name'])): ?>
                                            <li>Xin chào: <?php echo ($_SESSION['name']); ?></li>
                                            <li>
                                                <a href=""><i class="fa fa-user"></i> Tài khoản <i class="fa fa-caret-down"></i></a>
                                                <ul id="header-submenu">
                                                    <li><a href="info-user.php">Thông tin</a></li>
                                                    <li><a href="thoat.php">Đăng xuất</a></li>
                                                </ul>
                                            </li>
                                        <?php else: ?>    
                                            <li>
                                                <a href=""><i class="fa fa-unlock"></i> Đăng ký</a>
                                            </li>
                                            
                                            <li>
                                                <a href="login.blade.php"><i class="fa fa-share-square-o"></i> Đăng nhập</a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: -15px; margin-bottom: -15px; " class="container">
                    <div class="row" id="header-main">
                        
                        <div style="margin: auto; width: 20%;">
                            <a href=""> <img style="height: 65px; width: 270px;" src="image/logo1.png" alt="logo"></a>
                           
                        </div>
                        <!--<div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0986420994</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <div id="menunav">
                <div class="container" style="padding-top:1px;padding-bottom: 1px;">
                    <nav>
                        <div class="home pull-left">
                            <a href="">Trang chủ</a>
                        </div>
                        <ul id="menu-main">
                            <li>
                                <a href=""></a>
                            </li>
                            <li>
                                <a href="">Các khóa học miễn phí</a>
                            </li>
                            <li>
                                <a href="">Các khóa học trả phí</a>
                            </li>
                            
                            <li>
                                <style type="text/css">
                                    .fc:focus
                                    {
                                        box-shadow: 0 0 10px dimgray;
                                    }
                                </style>
                                <form  action="search.blade.php" class="form-inline" method="GET">
                                    <input required style="margin-top: 4px; height: 32px; background-color: #353535; color: white; border-color: #353535; border-radius: 3px;" class="form-control fc" type="text" placeholder="Search..." name="search"> 
                                    <button style="margin-top: 4px; height: 32px; background-color: #444; color: white; border-color: #444" class="fa fa-search form-control" type="submit" name="submit">
                                    </button>
                                </form>
                                
                            </li>
                        </ul>
            
                    </nav>
                </div>
            </div>
            </div>

    <div id="content-wrapper">

      <div class="container>

        <div class="card mb-3">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ul>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../image/6.jpg" alt="Level 0"  width="1450" height="450">
         
        <div class="carousel-caption">
        <h3 style="color: black;">Khóa học cơ bản</h3>
        <p style="color: black;"> Cho người mới bắt đầu</p>
      </div>
      </div>
      <div class="carousel-item">
        <img src="../image/2.jpg" alt="Level 1"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học chuyên sâu</h3>
        </div> -->
      </div>
    
      <div class="carousel-item">
        <img src="../image/3.jpg" alt="Level 2"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học luyện nghe</h3>
       </div> -->
      </div>

      <div class="carousel-item">
        <img src="../image/4.jpg" alt="Level 3"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học luyện viết</h3>
        </div> -->
      </div>

      <div class="carousel-item">
        <img src="../image/5.jpg" alt="Level 4"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học luyện phát âm</h3>
        </div> -->
      </div>

      <div class="carousel-item">
        <img src="../image/6.jpg" alt="Level 5"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học luyện từ vựng</h3>
        </div> -->
      </div>

      <div class="carousel-item">
        <img src="../image/7.jpg" alt="Level 6"  width="1450" height="450">
        <!-- <div class="carousel-caption">
        <h3 style="color: black;">Khóa học trả phí</h3>
        </div> -->
      </div>

    </div>

   
         <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
          
        </div>

      </div>


<div class="clear"></div>
<div class="grid_12 modern"></div>

<div class="grid_12 modern1"></div>
</div></div>
<div id="middle"><div class="layout">
<div class="col1"><div class="wrap"><p class="line1"></p></div></div>
<div class="col2"><span class="text6">Những thông tin về trang web</span></div>
<div class="col3"><div class="wrap"><p class="line1"></p></div></div></div>
</div>
<div id="grey1">
<div class="container_12"><div class="grid_12 four"></div>

<<!-- div class="grid_3"><span class="text10">1. Nguyễn Đình Quân</span>
<p class="text3"># Sau khi biết đến trang web này, em đã học được nhiều khóa học bổ ích ở đây.<br># Các khóa học được phân chia theo mực độ để người học dễ dàng lựa chọn hơn.</p></div>
<div class="grid_3"><span class="text9">2. Hoàng Phương Loan </span>
  <p class="text3"># Các khóa học ở đây đã giúp cho việc học tiếng anh của em dễ dàng hơn, ngoài ra còn có các bài test rất hiệu quả để đánh giá xem học viên hiểu bài đến đâu.<br># Sau khi học ở đây, trình độ tiếng anh của em được cải thiện.</p>
</div>
<div class="grid_3"><span class="text8">3. Nguyễn Thị Hường</span>
<p class="text3"># Em biết đến trang web này nhờ bạn bè e đã học ở đây<br># Sau vài tháng học tập, em thấy học tiếng anh ở đây khá hiểu quả.</p>
</div>
<div class="grid_3"><span class="text7">4. Bùi Thị Mến</span>
<p class="text3"># Khóa học có những video giảng dạy rất chi tiết, giọng phát âm chuẩn.<br># Học ở đây em rèn luyện được cả bốn kỹ năng tiếng anh, em rất vui về điều đó.</p> -->
</div>



<div class="clear"></div>
<div class="grid_12 modern"></div>

<div class="grid_12 modern1"></div>
</div></div>
<div id="middle"><div class="layout">
<div class="col1"><div class="wrap"><p class="line1"></p></div></div>
<div class="col2"><span class="text6">Cảm nhận của học viên<br />
sau khi học</span></div>
<div class="col3"><div class="wrap"><p class="line1"></p></div></div></div>
</div>
<div id="grey1">
<div class="container_12"><div class="grid_12 four"></div>

<div class="grid_3"><span class="text10">1. Nguyễn Đình Quân</span>
<p class="text3"># Sau khi biết đến trang web này, em đã học được nhiều khóa học bổ ích ở đây.<br># Các khóa học được phân chia theo mực độ để người học dễ dàng lựa chọn hơn.</p></div>
<div class="grid_3"><span class="text9">2. Hoàng Phương Loan </span>
  <p class="text3"># Các khóa học ở đây đã giúp cho việc học tiếng anh của em dễ dàng hơn, ngoài ra còn có các bài test rất hiệu quả để đánh giá xem học viên hiểu bài đến đâu.<br># Sau khi học ở đây, trình độ tiếng anh của em được cải thiện.</p>
</div>
<div class="grid_3"><span class="text8">3. Nguyễn Thị Hường</span>
<p class="text3"># Em biết đến trang web này nhờ bạn bè e đã học ở đây<br># Sau vài tháng học tập, em thấy học tiếng anh ở đây khá hiểu quả.</p>
</div>
<div class="grid_3"><span class="text7">4. Bùi Thị Mến</span>
<p class="text3"># Khóa học có những video giảng dạy rất chi tiết, giọng phát âm chuẩn.<br># Học ở đây em rèn luyện được cả bốn kỹ năng tiếng anh, em rất vui về điều đó.</p>
</div>



      <!-- <div class="detail" style="text-align: center;">
        <h2 style="color: red;">Đội ngũ giảng viên giảng dạy</h2>
        
      <-- /.container-fluid -->

      <!-- Sticky Footer -->
      <!-- Footer -->

    <!-- Footer Links -->

    <!-- Copyright -->
    
    <!-- Copyright -->
   <!-- <--  <div class="giangvien" style="background-color: lightblue;">
      <ul>
        <li> TS. Nguyến Đình Quân</li>
        <li> TS. Nguyến Thị Hường</li>
        <li> TS. Hoàng Phương Loan</li>
        <li> TS. Bùi Thị Mến</li>
      </ul>
    </div>
    
<div id="footer" style="background-color: pink;">

<h6 style="display: block;"> Learning English</h6>
<h6 style ="display: block;">Hotline: 0989999999</h6>
</div>

<footer class="sticky-footer">
        <a class="navbar-brand mr-1" href="index.html">
          <img src="../image/logo.png" alt="" class="logo">
          <h6 class="nameweb"> Learning English</h6>
        </a>
        <h6 class="hotline">Hotline: 0989999999</h6>
  </footer>
  <-- Footer -->

    <!-- </div>
    /.content-wrapper

  </div> -->
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
 <!--  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a> -->

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  </div> -->
  
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
