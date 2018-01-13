<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Giỏ hàng | <?php echo "" . $_SESSION["name"]; ?></title>
        <?php
        include 'cssfile.php';
        ?>

    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header id="header"><!--header-->
            <div class="header_top navbar-fixed-top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Modern Bag</a></li>
                                    <li><a href="tel:+84123456789"><i class="fa fa-phone"></i> +84123456789 </a></li>
                                    <li><a href="mailto:ahkk9866@gmail.com"><i class="fa fa-envelope"></i> modernbag@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>Giỏ hàng<span class="badge"> 0</span></a>
                                        <div class="dropdown-menu function_for_user" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3">Số thứ tự</div>
                                                        <div class="col-md-3 col-xs-3">Mặt hàng</div>
                                                        <div class="col-md-3 col-xs-3">Tên sản phẩm</div>
                                                        <div class="col-md-3 col-xs-3">Giá tiền</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product">
                                                        <!--<div class="row">
                                                                <div class="col-md-3">Sl.No</div>
                                                                <div class="col-md-3">Product Image</div>
                                                                <div class="col-md-3">Product Name</div>
                                                                <div class="col-md-3">Price in $.</div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp</li>
                                    <li><a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user function_for_user_span"></span><?php echo "Hi, " . $_SESSION["name"]; ?></a>
                                        <ul style="height: 130px;" class="dropdown-menu">

                                            <li><a href="cart.php" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-archive"> Giỏ hàng</a></li>
                                            <li><a href="#popup1" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-refresh"> Thay đổi mật khẩu</a></li>

                                            <li><a href="logout.php" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-reply"> Đăng xuất</a></li>
                                        </ul>
                                    </li>
        <!--                                    <li><a href="customer_registration.php" class="function_for_user"<span class="glyphicon glyphicon-user function_for_user_span"></span>Đăng kí</a></li>-->

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row" style="
                         margin-top: 37px;
                         ">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img alt="" src="images/logo1.gif"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row menu">
                        <div class="col-sm-8">
                            <div class="navbar-header">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class=" mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li class="menuhover"><a  href="index.php">Trang chủ</a></li>
                                    <li class="menuhover"><a href="">Túi xách</a></li>
                                    <li class="menuhover"><a href="">Balo</a></li>
                                    <li class="menuhover"><a href="">Ví</a></li>
                                    <li class="menuhover"><a href="">Khuyến mãi</a></li>
                                    <li class="menuhover"><a href="">Thông tin</a></li>
                                    <li class="menuhover"><a href="contact.php">Liên hệ</a></li>
                                    <!--                                    <li class="menuhover"><a href="">Giỏ hàng</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!--                            <div class="">
                                                            <input type="text" class="form-control" id="search" >
                                                        </div>
                                                        <div>
                                                            <input type="button" class="btn btn-primary" id="search_btn" value="Tìm kiếm">
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-2 col-xs-2" id="cart_msg" style="
                         position:  fixed;
                         margin-left: 1126px;
                         margin-top: -197px;
                         z-index: 9999;
                         ">
                        <!--Cart Message--> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Giỏ hàng</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 col-xs-2"><b>Mặt hàng</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Tên sản phẩm</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Số lượng</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Xóa/Cập nhật</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Giá sản phẩm</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Giá tiền</b></div>
                                </div>
                                <div id="cart_checkout"></div>
                                <!--<div class="row">
                                        <div class="col-md-2">
                                                <div class="btn-group">
                                                        <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
                                                </div>
                                        </div>
                                        <div class="col-md-2"><img src='product_images/imges.jpg'></div>
                                        <div class="col-md-2">Product Name</div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
                                        <div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
                                </div> -->
                                <!--<div class="row">
                                        <div class="col-md-8"></div>
                                        <div class="col-md-4">
                                                <b>Total $500000</b>
                                        </div> -->
                            </div> 
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>

        </section>
        <?php include 'footer.php'; ?>
        <div id="popup1" class="overlay">
            <div class="popup_changepassword">
                <h2>Thay đổi mật khẩu</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="POST">
                        <label for="">Mật khẩu cũ</label>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu cũ" id="oldpass" name="oldpass" required/>
                        <label for="">Mật khẩu mới</label>
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu mới" id="newpass" name="newpass" required/>
                        <label for="">Nhập lại mật khẩu mới</label>
                        <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" id="retypenewpass" name="retypenewpass" required/>
                        <p><br/></p>
                        <div id="changepass_message"></div>
                        <input type="button" class="btn btn-success" style="float:right;" id="change" name="change" value="Thay đổi mật khẩu">
                    </form>
                </div>
            </div>
        </div>
        <?php
        include 'jsfile.php';
        ?>
        <script>
            function Focus(object) {
                object.value = "Test";
            }

            function Blur(object) {
                if (object.value == "")
                    object.value = "Nhap tu khoa";
            }
        </script>
    </body>	
</html>
















