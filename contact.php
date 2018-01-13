<?php include('header.php') ?>
   <?php
$href = '';
if(isset($_GET['cs'])) {
    $success = 'Send successfully';
}
else {
    $success = '';
}
if(isset($_GET['cf'])) {
    $fail = "Send fail;";
}
else {
     $fail = '';
}
?>

<div class="container">
    <div class="row">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.133332661475!2d108.24142831471598!3d16.058569388887474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177ed39f76db%3A0x5c5df5ff4ae8738!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1514027646275" width="100%" height="400" frameborder="0" padding = "0px;"  ></iframe>


    </div>
</div> <!-- container-fluid -->
<div class="container">
    <div class = "row">
        <div class = "contact-info">
        <div class = "col-md-5 col-sm-5 col-xs-12">
            <h3> THÔNG TIN LIÊN HỆ </h3>
            <br>
              <p>Ra đời từ năm 2017, chỉ từ một cửa hàng thời trang nhỏ, đến nay <strong>Morden Bag </strong>đã không ngừng phát triển và trở thành một hệ thống cửa hàng chuyên kinh doanh thời trang trẻ, là một trong những thương hiệu thời trang hàng đầu tại Đà Nẵng....<br></p>
              <strong>Mọi thắc mắc xin liên hệ</strong>
              <address><strong><p style="color: #15aeb4 ; font-size: 15px;">Morden Bag</p>
                    99 To Hien Thanh<br>
                    DaNang, DC 45 Fr 45.</strong><br>
                    Telephone: +0 123 456 78<br>
                    FAX: +1 800 889 9898<br>
                    E-mail: <a href="">Mordenbag@gmail.com</a><br>
              </address><!-- address (end) -->
        </div>
            <div class = "col-md-6 col-sm-6 col-xs-12">
                <div class = "title">
                    <h3> LIÊN HỆ </h3>
                </div>
                <span style="color:red"><?php echo $success. $fail?></span>
                <form action ="contact-back.php" method ="POST">
                    <div class="content">
                        <form action=""  method="post" accept-charset="utf-8"></div>
                    <div class="form-group">
                        <label>Họ và tên:<span>*</span></label>

                        <input name="contact-name" placeholder="Nhập tên của bạn tại đây" class="form-control" required="required" maxlength="255" type="text" id="contact-name">	
                    </div>
                    <div class="form-group">
                        <label>Email:<span>*</span></label>

                        <input name="contact-email" placeholder="Nhập email của bạn tại đây" class="form-control" required="required" maxlength="255" type="email" id="contact-email">	
                    </div>
                    <div class="form-group">
                        <label>Chủ đề:<span>*</span></label>

                        <input name="contact-subject" placeholder="Nhập chủ đề của bạn tại đây" class="form-control" required="required" maxlength="255" type="text" id="contact-subject">	
                    </div>
                    <div class="form-group">
                        <label>Nội dung: <span>*</span></label>
                        <textarea name="contact-content" placeholder="Nhận xét của bạn..." class="form-control" rows="4" id="ContactContent" required>	
                        </textarea>			
                    </div>
                    <button style="background-color:#15aeb4 ; float: right; color: white" type="submit" name ="sendcontact" class="btn btn-default">Gửi liên hệ</button>
                    <br>
                </form>
            </div>

        </div>
        
    </div>
</div>
<br>	
	<?php include("footer.php") ?>
</body>
</html>