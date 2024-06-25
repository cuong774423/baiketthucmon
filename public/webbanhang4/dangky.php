<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#D2691E">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="base.css">
  <title>Đăng ký</title>
</head>

<body>
<header>
  <div class="icon">
  <div class="logo">
    <a href="trangchuchinh.php">
    <img src="image/logo.png" alt="">
    </a>
  </div>
  <div class="search">
    <input type="text" placeholder="Tìm kiếm..."><a href=""><i class="fa-solid fa-magnifying-glass-dollar"></i></a>
    <a href="">
    <button class="sdt"><i class="fa-solid fa-phone"></i> 0123 456 789  </button>
    </a>
    <a href="">
    <button><i class="fa-solid fa-building"></i>  Hệ thống cửa hàng    </button>
    </a>
    <a href="dangnhap.php">
    <button><i class="fa-solid fa-user"></i> Tài khoản </button>
    </a>
    <a >
    <button class="icon-cart"><i class="fa-solid fa-cart-shopping"></i><span class="cart-price">0</span><sup>đ</sup></button>
    </a>
  </div>
  </div>
  <div class="menu">
    <li><a href="">TRANG CHỦ</a></li>
    <li><a href=""> BÁNH SINH NHẬT <i class="fa-solid fa-caret-down"></i> </a>
    <ul class="dropdown1">
    <?php
      $cn101= mysqli_connect('localhost','root','','web') or die('fail');
      $sql101="select tenbanh from loaibanhsinhnhat ";
      $kq101= mysqli_query($cn101,$sql101) or die('truy vấn sai!'); 
      while($row=mysqli_fetch_assoc($kq101))
      {?>
        <li><a href=""> 
          <?php
        echo $row['tenbanh']; ?></a></li>
        <?php }   
      ?>
    </ul>
    </li>
    <li><a href="">BÁNH MỲ & BÁNH MẶN <i class="fa-solid fa-caret-down"></i></a>
    <ul class="dropdown2">
    <?php 
      $cn102= mysqli_connect('localhost','root','','web') or die('fail');
      $sql102="select tenlbmbm from loaibanhmyvabanhman ";
      $kq102= mysqli_query($cn102,$sql102) or die('truy vấn sai!'); 
      while($row1=mysqli_fetch_assoc($kq102))
      {?>
          <li><a href="">
            <?php
             echo $row1['tenlbmbm']; 
             ?>
          </a></li>
          <?php 
          }   
      ?>
    </ul>
    </li>
    <li><a href="">COOKIES & MINICAKE <i class="fa-solid fa-caret-down"></i></a> 
      <ul class="dropdown3"> 
        <?php 
           $cn103= mysqli_connect('localhost','root','','web') or die('fail');
           $sql103="select tenlckmc from loaickmc ";
           $kq103= mysqli_query($cn103,$sql103) or die('truy vấn sai!'); 
           while($row3=mysqli_fetch_assoc($kq103))
           { ?>
          <li><a href="">
            <?php
          echo $row3['tenlckmc']; ?>
          </a></li>
          <?php
           }   
      ?>
      </ul>
    </li>
    <li><a href="">TIN TỨC</a></li>
    <li><a href="">KHUYẾN MẠI</a></li>
  </div>
</header>
<div class="signup-banner">
  <div class="dark">
  <span>TẠO TÀI KHOẢN</span>
  </div>
</div>
<form method="post">
<div class="form-signup">
  <div class="signup-item">
  <h1>TẠO TÀI KHOẢN </h1>
  </div>
  <div class="signup-item">
    <input type="text" placeholder="Họ" required name="ho">
  </div>
  <div class="signup-item">
  <input type="text" placeholder="Tên" required name="ten">
  </div>
  <div class="signup-item">
    <input type="text" placeholder="Tên tài khoản" required name="user">
  </div>
  <div class="signup-item">
    <input type="password" placeholder="Mật khẩu" required name="mk">
  </div>
  <div class="signup-item">
    <button type="submit" name="dk">Đăng ký</button>
  </div>
  <div class="signup-item">
    <a href="dangnhap.php">Trở về</a>
  </div>
</div>
</form>
<?php 
    if(isset($_POST['dk'])) {
        $ho = $_POST['ho'];
        $ten = $_POST['ten'];
        $user = $_POST['user'];
        $mk = $_POST['mk'];
        $cn10= mysqli_connect('localhost','root','','web') or die('fail');
        $sql10="select * from user where taikhoan='$user' ";
        $kq10= mysqli_query($cn10,$sql10) or die('truy vấn sai!');
        $n10=mysqli_num_rows($kq10);
        if($n10==0)
        {
        $cn = mysqli_connect('localhost', 'root', '', 'web') or die('fail');
        $sql = "INSERT INTO `user` (`ten`,`ho`,  `taikhoan`, `pass`) VALUES ('$ten','$ho',  '$user', '$mk')";
        
        if(mysqli_query($cn, $sql))
        {
          ?> <span style="color: green;font-weight:bold" ><?php echo"Đăng ký thành công !" ?>
           <?php 

        }
        else
        {
          ?> <span style="color: green;font-weight:bold" ><?php echo"Tạo tài khoản thất bại !" ?>
          <?php 
        }
            }
        else{
            if($n10>0)
            ?> <span style="color: green;font-weight:bold" ><?php echo"Tên tài khoản đã tồn tại !" ?>
            <?php 
       }}
    ?>
<footer>
  <div class="footer-background">
    <div class="footer-container">
    <div class="footer-cols">
      <li class="footer-logo">
      <a href="trangchuchinh.php">
      <img src="image/logo.png" alt="">
      </a>
      </li>
      <li>
      <i class="fa-solid fa-house-chimney"></i>Số 09 Trần Thái Tông, P. Dịch Vọng, Q. Cầu Giất, TP Hà Nội </li>
      <li>
      <a href="">
      <i class="fa-solid fa-mobile"></i>
      0961452578</a>
      </li>
      <li>
      <a href="">
        <i class="fa-solid fa-envelope"></i>anhhoabakery1@gmail.com 
      </a>
      </li>
    </div>
    <div class="footer-cols">
      <h3>CHÍNH SÁCH</h3>
      <li><a href="">Chính sách và quy định chung</a></li>
      <li><a href="">Chính sách giao dịch thanh toán</a></li>
      <li><a href="">Chính sách đổi trả</a></li>
      <li><a href="">Chính sách bảo mật</a></li>
      <li><a href="">Chính sách vận chuyển</a></li>
    </div>
    <div class="footer-cols">
      <h3>CÔNG TY CỔ PHẦN BÁNH NGỌT ANH HÒA</h3>
      <li>Địa chỉ tên miền: anhhoabakery.vn </li>
      <li>Tên miền phụ: banhngotphap.vn </li>
      <li>Tên Doanh nghiệp: Công ty Cổ phần Bánh ngọt Anh Hòa </li>
      <li>MST/ĐKKD/QLTL: 0104802706 </li>
      <li>Trụ sở Doanh Nghiệp: Số 09 Trần Thái Tông, P. Dịch Vọng, Q. Cầu Giấy, TP. Hà Nội </li>
      <li>Quốc gia: Việt Nam </li>
      <li>Điện thoại: 0961452578 </li>
      <li>Ngày cấp: 21/07/2010 </li>
      <li>Nơi cấp: Sở Kế hoạch và Đầu tư Tp. Hà Nội </li>
      <li><input type="text" placeholder="Nhập email của bạn"><a href=""><i class="fa-regular fa-paper-plane"></i> </a></li>
      <li>
        <a href=""><i class="fa-brands fa-facebook"></i> </a>
        <a href=""><i class="fa-brands fa-twitter"></i> </a>
        <a href=""><i class="fa-brands fa-instagram"></i> </a>
        <a href=""><i class="fa-brands fa-google"></i> </a>
        <a href=""><i class="fa-brands fa-youtube"></i> </a>
      </li>
    </div>
    <div class="footer-cols">
      <h3>MỖI THÁNG CHÚNG TÔI ĐỀU CÓ NHỮNG ĐỢT GIẢM GIÁ DỊCH VỤ VÀ SẢN PHẨM NHẰM TRI ÂN KHÁCH HÀNG. ĐỂ CÓ THỂ CẬP NHẬT KỊP THỜI NHỮNG ĐỢT GIẢM GIÁ NÀY, VUI LÒNG NHẬP ĐỊA CHỈ EMAIL CỦA BẠN VÀO Ô DƯỚI ĐÂY </h3>
      <li class="thumb"><img src="image/thumb.png" alt=""></li>
    </div>
    </div>
    </div>
    <div class="copyright">
      <span>Copyrights <i class="fa-regular fa-copyright"></i> 2018 by Anhhoa Bakery.</span>
    </div>
  </div>
</footer> 
</body>

</html>