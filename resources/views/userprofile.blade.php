<!DOCTYPE html>
<html lang="en">
<head>

    <title>Thông tin cá nhân</title>
    <base href="{{asset('')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/userprofile.css">
<!--===============================================================================================-->
</head>
<body>


    <div class="container-contact100">
        <div class="wrap-contact100">
            <form class="contact100-form validate-form">
                <div>
               <button title="Thay đổi ảnh">
               <img src="image/icon_user.png">

           </button>
            <span class="contact100-form-title">
                  <h3 > Thông tin cá nhân</h3>
                </span>
       </div>
               

                <label class="label-input100" for="first-name">Họ tên</label>
                <div class="wrap-input100 validate-input" data-validate="Type name">
                    <input id="name" class="input100" type="text" name="name" placeholder="name">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="email">Email</label>
                <div class="wrap-input100 validate-input">
                    <input id="email" class="input100" type="email" name="email" placeholder=" example@email.com">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="phone">Số điện thoại</label>
                <div class="wrap-input100">
                    <input id="phone" class="input100" type="text" name="phone" placeholder="">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="address">Địa chỉ</label>
                <div class="wrap-input100">
                    <input id="address" class="input100" type="text" name="address" placeholder="">
                    <span class="focus-input100"></span>
                </div>

                <label class="label-input100" for="content">Các khóa học tham gia</label>
                <div class="wrap-input100 validate-input" data-validate = "">
                    <textarea id="khoahoc" class="input100" name="khoahoc" placeholder=""></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Cập nhật
                    </button>
                </div>
            </form>
             

            <div class="contact100-more flex-col-c-m" style="background-image: url('image/bg-01.jpg');">
                <div class="flex-w size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-map-marker"></span>
                    </div>

                    
                    
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>

                    
                </div>

                <div class="dis-flex size1 p-b-47">
                    <div class="txt1 p-r-25">
                        <span class="lnr lnr-envelope"></span>
                    </div>

                  
                </div>
            </div>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".selection-2").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>
