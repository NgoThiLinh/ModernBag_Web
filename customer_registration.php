<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Modern Bag | Register</title>
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

                                    <li class=""><a href="#" class="dropdown-toggle function_for_user" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span> Giỏ hàng <span class="badge">0</span></a>
                                        <div class="dropdown-menu" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3">Số thứ tự</div>
                                                        <div class="col-md-3">Mặt hàng</div>
                                                        <div class="col-md-3">Tên sản phẩm</div>
                                                        <div class="col-md-3">Giá tiền</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body"></div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>

                                    </li>
                                    <li>&nbsp</li>
                                    <li class="">
                                        <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown" >
                                            <span class=" glyphicon glyphicon-user function_for_user_span"></span> Đăng nhập 
                                        </a>
                                        <ul class="dropdown-menu loginup">
                                            <div style="width:300px;">
                                                <div class="panel panel-primary">
                                                    <h2 class="center">Đăng nhập</h2> 
                                                    <div id="" class="panel-heading">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" onclick="focus(this)" placeholder="Email" id="email" required/>
                                                        <label for="email">Password</label>
                                                        <input type="password" class="form-control" onclick="focus(this)" placeholder="Mật khẩu" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Đăng kí tài khoản mới</i></a></h6>
                                                        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
                                                    </div>
                                                    <div style="height: 65px;" class="panel-footer" id="e_msg"></div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
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
                                    <li class="menuhover"><a href="">Liên hệ</a></li>
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
                    <div class="col-md-2"></div>
                    <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                        <!--                    Hộp thoại thông báo-->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #15aeb4;
                             height: 690px;">
                            <div class="panel-heading">
                                <h2 class="center">Đăng kí tài khoản mới</h2>
                            </div>
                            <div class="panel-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="f_name">Tên</label>
                                            <input type="text"
                                                   placeholder="Tên"
                                                   id="f_name" 
                                                   name="f_name" 
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f_name">Họ</label>
                                            <input type="text" 
                                                   placeholder="Họ"
                                                   id="l_name" 
                                                   name="l_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" 
                                                   placeholder="Email"
                                                   id="email" 
                                                   name="email"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="password">Mật khẩu</label>
                                            <input type="password"
                                                   placeholder="Mật khẩu"
                                                   id="password" 
                                                   name="password"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="repassword">Nhập lại mật khẩu</label>
                                            <input type="password"
                                                   placeholder="Nhập lại mật khẩu"
                                                   id="repassword" 
                                                   name="repassword"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">Số điện thoại</label>
                                            <input type="text" 
                                                   placeholder="Số điện thoại"
                                                   id="mobile" 
                                                   name="mobile"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Địa chỉ 1</label>
                                            <input type="text" 
                                                   placeholder="Địa chỉ 1"
                                                   id="address1" 
                                                   name="address1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address2">Địa chỉ 2</label>
                                            <input type="text" 
                                                   placeholder="Địa chỉ 2"
                                                   id="address2" 
                                                   name="address2"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">Bằng với việc đăng kí là bạn đã đồng ý với 
                                                <a class="red" href="#popup1">
                                                    điều khoản sử dụng
                                                </a>
                                                của Modern Bag</h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                   value="Đăng kí" 
                                                   type="button" 
                                                   id="signup_button" 
                                                   name="signup_button"
                                                   class="btn btn-success btn-lg">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <aside>
                                <h1 class="picture_video_footer element_footer fadeIn">Video</h1>
                                <iframe 
                                    class="video"
                                    width="260" 
                                    height="163" 
                                    src="https://www.youtube.com/embed/ZDWmadQDIJM?start=9" 
                                    frameborder="0" 
                                    gesture="media" 
                                    allow="encrypted-media" 
                                    allowfullscreen>
                                </iframe>
                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="element_footer fadeIn">Danh mục</h1>
                                <ul class="category">
                                    <li><a href="" class="category_boder black" ><i class=""></i>Trang chủ</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Túi xách</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Balo</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Ví</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Khuyến mãi</a></li>
                                </ul>
                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="infor_footer element_footer"> Chúng tôi</h1>
                                <a>
                                    <img class="logo_footer" alt="" src="images/logo_footer.gif">    
                                </a>
                            </aside>
                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="contact_footer element_footer">Liên hệ</h1>
                                <address>
                                    <h4 class="center test font_thuphap">Modern Bag</h4>
                                    <br>
                                    99 Tô Hiến Thành, Sơn Trà, TP Đà Nẵng
                                    Điện thoại liên hệ:
                                    <h5><a class="phone black" href="tel:0904765341">Mr.Cư: 0904765341</a></h5>
                                    <h5><a class="phone black" href="tel:01664328986">Ms.Linh: 01664328986</a></h5>
                                </address>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; font-size: x-small">
                Bản quyền thuộc về Modern Bag.<br>
                Giấy phép ICP số 89/GP-TTĐT-STTTT, CV cung cấp MXH-DV số 1477/STTTT-TTĐT, cấp ngày 06/06/2017<br>
            </div>
        </footer>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Điều khoản và sử dụng</h2>
                <img border="0" src="images/logo1.gif" width="200" height="40" alt="logo">
                <br>
                <a class="close" href="#" style="
                   margin-top: 66px;
                   margin-right: 73px;
                   ">&times;</a>
                <div style="overflow:auto;" class="content">

                    <table border="0" width="100%" cellspacing="0" id="table1">
                        <tbody><tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td bgcolor="#15aeb4">
                                </td>
                            </tr>
                            <tr bgcolor="#EAEAEA"><td><b>Điều khoản sử dụng</b></td></tr>
                            <tr bgcolor="#EAEAEA"><td>
                                    1. Về tài khoản sử dụng: Khi đăng ký tài khoản, bạn nên cung cấp đầy đủ thông tin về tên họ, tên đăng nhập, thư điện tử,... Đây không phải là những thông tin bắt buộc, nhưng khi có những rủi ro, mất mát sau này, chúng tôi chỉ tiếp nhận những trường hợp điền đúng và đầy đủ những thông tin trên. Những trường hợp điền thiếu thông tin hoặc thông tin sai sự thật sẽ không được giải quyết. Những thông tin này sẽ được dùng làm căn cứ để hỗ trợ giải quyết.
                                    Nếu bạn cung cấp bất kỳ thông tin nào không trung thực hoặc không chính xác, hoặc nếu chúng tôi có cơ sở để nghi ngờ rằng thông tin đó không phải là thông tin trung thực hoặc không chính xác, chúng tôi có quyền đình chỉ tạm thời để xác minh hoặc chấm dứt việc sử dụng Tài Khoản của bạn và từ chối toàn bộ việc sử dụng Dịch Vụ (hoặc bất kỳ phần nào của Dịch Vụ) tại thời điểm hiện tại hoặc sau này mà không phải chịu bất cứ trách nhiệm nào đối với bạn.<br>
                                    2. Mật khẩu của tài khoản: Trong phần quản lý tài khoản, đối với một tài khoản, người dùng sẽ có một mật khẩu. Mật khẩu được sử dụng để đăng nhập vào Modern Bag. Nếu người dùng quên mật khẩu của mình thì có thể sử dụng thư điện tử(email) của mình để lấy lại mật khẩu. Người dùng có trách nhiệm phải tự mình bảo quản mật khẩu và thư điện tử, nếu mật khẩu hoặc thue điện tử bị lộ ra ngoài dưới bất kỳ hình thức nào, Modern Bag sẽ không chịu trách nhiệm về mọi tổn thất phát sinh.<br>
                                    3. Mặt hàng: Với một tài khoản có thể mua được nhiều sản phẩm. Nếu bạn muốn số lượng lớn thì có thể liên hệ với chúng tôi qua email cskhmodernbag@gmail.com.<br>
                                    4. Tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào trang web hay làm thay đổi kết cấu của trang web (hack, cheat, bots…). Mọi vi phạm khi bị phát hiện sẽ bị xử lý theo quy định của pháp luật.<br>
                                    5. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của dịch vụ cũng như hệ thống máy chủ.<br>
                                    6. Khi phát hiện ra lỗi của website, bạn hãy thông báo cho chúng tôi qua email cskhmodernbag@gmail.com.<br>
                                    7. Không được có bất kỳ hành vi nào nhằm đăng nhập trái phép hoặc tìm cách đăng nhập trái phép cũng như gây thiệt hại cho hệ thống máy chủ của dịch vụ. Mọi hành vi này đều bị xem là những hành vi phá hoại tài sản của người khác và sẽ tước bỏ mọi quyền lợi đối với người sử dụng cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.<br>
                                    8. Không chấp nhận việc mua bán vật dụng hoặc tài khoản của dịch vụ bằng tiền thật hoặc hiện vật ở trong lẫn ngoài trang web. Trong trường hợp người sử dụng vi phạm điều khoản này, chúng tôi không có bất kỳ trách nhiệm nào trong việc phục hồi đồ vật hay dịch vụ. Ngoài ra, nếu phát hiện những tài khoản vi phạm chúng tôi sẽ khóa tài khoản vĩnh viễn.<br>
                                    9. Khi giao tiếp với người dùng khác, bạn không được quấy rối, chửi bới, làm phiền hay có bất kỳ hành vi thiếu văn hoá nào đối với người chơi khác.<br>
                                    10. Tuyệt đối nghiêm cấm việc xúc phạm, nhạo báng người khác dưới bất kỳ hình thức nào (nhạo báng, chê bai, kỳ thị tôn giáo, giới tính, sắc tộc….).<br>
                                    11. Tuyệt đối nghiêm cấm mọi hành vi mạo nhận hay cố ý làm người khác tưởng lầm mình là một người dùng khác trong hệ thống. Mọi hành vi vi phạm sẽ bị xử lý hoặc tước bỏ tài khoản.<br>
                                    12. Modern Bag - chúng tôi sẽ không chịu trách nhiệm đối với bất cứ vấn đề gì về hệ thống khi bạn cài đặt và sử dụng dịch vụ.<br>
                                    13. Khi phát hiện những vi phạm như sử dụng cheats, hacks, hoặc những lỗi khác, Modern Bag có quyền sử dụng những thông tin mà bạn cung cấp khi đăng ký tài khoản để chuyển cho Cơ quan chức năng giải quyết theo quy định của pháp luật.<br>
                                    14. Trong những trường hợp bất khả kháng như chập điện, hư hỏng phần cứng, phần mềm, hoặc do thiên tai .v.v. người dùng phải chấp nhận những thiệt hại nếu có.<br>
                                    15. Modern Bag có toàn quyền xóa, sửa chữa hay thay đổi các dữ liệu, thông tin tài khoản trong các trường hợp người đó vi phạm những qui định kể trên mà không cần sự đồng ý của người sử dụng .<br>
                                    16. Tuyệt đối nghiêm cấm mọi hành vi tuyên truyền, chống phá và xuyên tạc chính quyền, thể chế chính trị, và các chính sách của nhà nước... Trường hợp phát hiện, không những bị xóa bỏ tài khoản mà chúng tôi còn có thể cung cấp thông tin của người đó cho các cơ quan chức năng để xử lý theo pháp luật.<br>
                                </td></tr>
                            <tr>
                                <td bgcolor="#15aeb4">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small">
                                    Bản quyền thuộc về Modern Bag.<br>
                                    Giấy phép ICP số 89/GP-TTĐT-STTTT, CV cung cấp MXH-DV số 1477/STTTT-TTĐT, cấp ngày 06/06/2017<br>
                                </td>
                            </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>

        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
       <!--   <script src="assets/js/bootstrap.min.js"></script>     -->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.li-scroller.1.0.js"></script>
        <script src="assets/js/jquery.newsTicker.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/slider.min.js"></script>
        <script type="text/javascript">
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



















