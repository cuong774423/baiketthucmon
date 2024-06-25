<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#D2691E">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="base.css">
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
    <li><a href="trangchuchinh.php">TRANG CHỦ</a></li>
    <li><a href=""> BÁNH SINH NHẬT <i class="fa-solid fa-caret-down"></i> </a>
    <ul class="dropdown1">
    <?php 
      $cn101= mysqli_connect('localhost','root','','web') or die('fail');
      $sql101="select tenbanh from loaibanhsinhnhat ";
      $kq101= mysqli_query($cn101,$sql101) or die('truy vấn sai!'); 
      while($row=mysqli_fetch_assoc($kq101))
      { ?>
          <li><a href=""> <?php
            echo $row['tenbanh']; ?>
            </a></li>
            <?php 
            }   
      ?>
    </ul>

    <li><a href="">BÁNH MỲ & BÁNH MẶN <i class="fa-solid fa-caret-down"></i></a>
    <ul class="dropdown2">
    <?php 
      $cn102= mysqli_connect('localhost','root','','web') or die('fail');
      $sql102="select tenlbmbm from loaibanhmyvabanhman ";
      $kq102= mysqli_query($cn102,$sql102) or die('truy vấn sai!'); 
      while($row1=mysqli_fetch_assoc($kq102))
      { ?>
          <li><a href=""> <?php
          echo $row1['tenlbmbm']; ?>
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
          <li><a href=""> <?php
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
<div class="banner">
  <img class="banner3" src="image/banner3.jpg" alt="">
</div>
<div class="content_gateaux">
    <div class="title">
        <h1>Gateaux kem tươi</h1>
    </div>
    <div class="container_gateaux">
        <div class="list_content">
          <div class="list_title">
            <h3>DANH MỤC MENU</h3>
          </div>
          <ul class="list_item">
            <li><a href="">BỘ SƯU TẬP BÁNH TRUNG THU 2023</a></li>
            <li><a href="list_gateaux.php">Gateaux Kem Tươi</a></li>
            <li><a href="list_gateaux.php">Gateaux Kem Bơ</a></li>
            <li><a href="list_gateaux.php">Bánh Sinh Nhật 2023</a></li>
            <li><a href="list_gateaux.php">Bánh Mousse</a></li>
            <li><a href="list_gateaux.php">Gateaux Mousse</a></li>
            <li><a href="list_gateaux.php">GATEAUX MOUSSE YOGURT</a></li>
            <li><a href="list_gateaux.php">Bộ Sưu Tập Bánh Phụ Kiện</a></li>
            <li><a href="list_gateaux.php">Bánh Valentine - Trái Tim</a></li>
            <li><a href="list_gateaux.php">Bánh Sinh Nhật Bé Trai</a></li>
            <li><a href="list_gateaux.php">Bánh Sinh Nhật Bé Gái</a></li>
            <li><a href="list_gateaux.php">Bánh In Ảnh</a></li>
            <li><a href="list_gateaux.php">Bánh Vẽ</a></li>
            <li><a href="list_gateaux.php">Bánh Sự Kiện</a></li>
            <li><a href="list_gateaux.php">BÁNH SỰ KIỆN THEO YÊU CẦU</a></li>
            <li><a href="list_gateaux.php">BÁNH SỐ</a></li> 
          </ul>
        </div>
        <div class="list_gateaux">
        <?php  
   $malbanhsn = 'GATEAUX01';
   $cn21 = mysqli_connect('localhost', 'root', '', 'web') or die('fail');
   $sql21 = "SELECT * FROM banhgateaux WHERE malbanhsn='$malbanhsn'";
   $kq21 = mysqli_query($cn21, $sql21) or die('truy vấn sai!');
   while ($row21 = mysqli_fetch_assoc($kq21)) { 
?>
      <div class="bsn1">
         <a href="chitietbanh.php?a=<?php echo $row21['mabanhsn'] ?>">
            <img src="image/<?php echo $row21['anhbanhsn']; ?>">
         </a>
         <a class="name-bsn" href='chitietbanh.php?a=<?php echo $row21['mabanhsn'] ?>'><?php echo $row21['tenloaibanhsn']; ?></a>
         <span><?php echo $row21['mabanhsn']; ?></span>
         <div class="price1">
            <span class="price-cart"><?php echo $row21['gia']*1000;?></span><sup>đ</sup>
            <span class="add-cart">
               <i class="fa-solid fa-cart-shopping"></i>
   </span>
         </div>
      </div>
   
<?php 
   }
?> 
        <div class="button_gateaux">
          <a class="button1" href="">
            <button>
              1
            </button></a>
          <a class="button2" href="list_gateaux2.php">
            <button>
              2
            </button></a>
          <a class="button3" href="list_gateaux2.php">
            <button>
              >>
            </button></a>
        </div>
        </div>
        <!-- CART -->
        <div class="cart">
          <span class="icon-close"><ion-icon name="close"></ion-icon></span>
  <h3>Giỏ hàng</h3>
  <div class="cart-container">
   <!-- <div class="cart-item">
    <div class="cart-item-img">
      <img src="image/bsn1.png" alt="">
      <span class="cart-item-img-name">TIRAMISU</span>
      <span class="cart-delete">Xóa</span>
    </div>
    <div class="cart-item-price">
      <p>Số lượng: <input type="number" value="1" min="1"></p>
      <p><span class="price">200.000</span><sup>đ</sup></p>
  </div> 
</div> -->
  </div>
   <div class="cart-total">
    <p>Tổng tiền: <span>0</span><sup>đ</sup></p>
  </div> 
  <div class="cart-purchase"><button>Thanh toán</button></div>
</div>  
<!-- CART  -->
    </div>
</div>
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
<script src="giohang.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>