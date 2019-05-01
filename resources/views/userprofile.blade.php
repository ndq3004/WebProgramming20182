<!DOCTYPE html>
<html>
    <head>
        <title>Thông tin người dùng</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="js/jquery-3.2.1.min.js">
        <link rel="stylesheet" type="text/css" href="css/userprofile.css">
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
                        <div class="col-md-3" id="header-right">
                            <div class="pull-right">
                                <div class="pull-left">
                                    <i class="glyphicon glyphicon-phone-alt"></i>
                                </div>
                                <div class="pull-right">
                                    <p id="hotline">HOTLINE</p>
                                    <p>0986420994</p>
                                </div>
                            </div>
                        </div>
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
            
            <div class="col-md-9 bor">
            <section class="box-main1"><br>
                <h3 class="title-main" style="text-decoration: none;"><a href="javascript:void(0)" style="font-family: sans-serif;text-align: center;"> Thông tin người dùng </a><p style="margin-bottom: -14px; margin-top: -3px" class="arrow"></h3>
                <form action="" method="POST" class="form-horizontal" role="form" style="margin-top: 20px">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <img class="img-circle"  src="image/f11.png" width=200px" height="200px" alt="User">
                                
                            </div>
                            <div class=" col-md-9 col-lg-9">
                                <h3>Người dùng</h3><br>
                                <table  class="table table-user-information">
                                    
                                    <tr>
                                        <td class="col-md-3" >Tài khoản:</td>
                                        <td class="col-md-9" ></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-3">Email:</td>
                                        <td class="col-md-9"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-3">Số điện thoại:</td>
                                        <td class="col-md-9"><input type="text" name="txtsodt"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-3">Địa chỉ:</td>
                                        <td class="col-md-9"><input type="text" name="txtdiachi"></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-3">Các khóa học tham gia:</td>
                                        <td class="col-md-9"><input type="text" name="txtkhoahoc"></td>
                                    </tr>
                                    <br><br><br>
                                   <tr>
                                        <td class="col-md-3"></td>
                                        <td class="col-md-9" ><button class="button-link style-1" style="background-color: #87c52e;"><a>Cập nhật</a></button>
<!-- ắt đầu Luyện Ngaystyle="margin-left: 120px; " class="capnhat" type="button" name="btcapnhat"><b style="color: white; font-size: 20px;">Cập Nhật<b></button></td>
 -->
                                    </tr>
                                    
                                </table>
                            </div>
                        </div><br>
                
    
                    </div>
                </form>
            </section>
        </div>

        </body>
        </html>