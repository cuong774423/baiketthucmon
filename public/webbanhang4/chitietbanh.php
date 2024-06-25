<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#D2691E">
  <title></title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="chitietbanh.css">
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
      {  ?>
      <li><a href="">  <?php
     /* ?>
    <li><a href='chitietloaibanhsn.php?a=<?php echo $row['malbanhsn']; ?>'><?php  
     </a></li>  */
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
      { ?>
          <li><a href="">  <?php
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
        <?php 
        if(isset($_GET['a']))
        {
            $nhanb=$_GET['a'];
            $cn=mysqli_connect('localhost','root','','web') or die('fail');
            $sql=$sql101="SELECT * FROM banhgateaux  where mabanhsn='$nhanb' ";
            $kq=mysqli_query($cn,$sql) or die('truy vấn sai!');
            while($row=mysqli_fetch_assoc($kq) ){
        ?>
            <div class="thehienchitiet">
                <div class="anhbanhsinhnhat">
                    <a href="#"><img src="image/<?php echo $row['anhbanhsn']; ?>" ></a>
                </div> 
                <div class="chitietsanpham">
                    <div class="tbsn1"><li><span><?php echo $row['tenloaibanhsn']; ?></span></li></div> 
                    <div class="mbsn1"><li><span class="mabsn">Mã sản phẩm: </span><span><?php echo $row['mabanhsn'];?></span></li></div>
                    <div class="gbsn1"><li><span class="giabsn">Giá: </span><span><?php echo $row['gia']*1000;?>đ</span></li></div>
                    <div class="themgiohang"><button>thêm giỏ hàng</button></div>
                    <div class="muangay"><button>mua ngay</button></div>
                </div>
                 
            </div>
           <div class="chuamota">
                <div class="mt">mô tả</div>
           <div class="motachung">
                <li><span><?php echo $row['mota'];?></span></li></div></div>

        <?php
        
            }
        }
        ?>         
   <!-- <div class="body"></div>
   <div class="end"></div> -->
</body>
<!---------FOOTER----------->
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
</html>
