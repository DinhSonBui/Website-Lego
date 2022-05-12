<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lego-Shop</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    
  </head>
  <body>
    <!-- header section starts      -->
    <?php 
      require_once "connect.php";
      session_start();
      $total = 0;
    ?>
    <header>
      <a href="#" class="logo"
        ><i class="fab fa-drupal" style="padding-right: 10px"></i>Lego-Shop</a
      >
      <nav class="navbar">
        <a class="active" href="#home">trang chủ</a>
        <a href="#dishes">nổi bật</a>
        <a href="#about">cửa hàng</a>
        <a href="#menu">loại sản phẩm</a>
        <a href="#review">đánh giá</a>
        <a href="#order">mua nhanh</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-btn"></i>
        <a href="#" class="fas fa-shopping-cart" id="cart-btn"></a>
        <a href="#" class="fas fa-users" id="login-btn"></a>
      </div>

      
      <div class="shopping-cart">
        <?php
          $cart = (isset($_SESSION['cart'])) ?  $_SESSION['cart'] : []; 
          foreach($cart as $key => $value):
        ?>
        <div class="box">
          <a href="cart.php?id=<?php echo $value['id'] ?>&action=delete"><i class="fas fa-trash"></i></a>
          <img src="images/<?php echo $value['image']; ?>" alt="" />
          <div class="content">
            <h3><?php echo $value['name']; ?></h3>
            <span class="price"><?php echo $value['price']; ?>VND</span>
            <span class="quantity">SL : <?php echo $value['quantify']; ?> </span>
          </div>
        </div>
        <?php
          $total += $value['price']*$value['quantify'];
          endforeach
        ?>
        <div class="total">Tổng : <?php echo $total ?> VND</div>
        <a href="order.php" class="btn">Đặt hàng</a>
      </div>

      <form action="" class="login-form">
      <?php
        $id = (isset($_SESSION['id'])) ? $_SESSION['id'] : 0; 
      ?>
        <form action="" method="POST" class="login-form">
        <?php 
          if($id != 0 ){ 
            $sql = "SELECT * FROM tbl_user Where id = '".$id."'";
            $result = mysqli_query($conn,$sql);
            if($result->num_rows > 0) { 
              $row= $result->fetch_array();
              $username=$row['username']; 
              $fullname = $row['fullname']; 
              $email = $row['email']; 
            }
        ?>
          <h3>Thông tin tài khoản</h3>
            <div class="item-info">
              <span class="item-label">Tài khoản</span>
              <span class="item-value"><?php echo $username; ?></span>
            </div>
            <div class="item-info">
              <span class="item-label">Tên đầy đủ</span>
              <span class="item-value"><?php echo $fullname; ?></span>
            </div>
            <div class="item-info">
              <span class="item-label">Email</span>
              <span class="item-value"><?php echo $email; ?></span>
            </div>
            <a
              href="editUser.php?user=<?php echo $username?>"
              style="margin-right: 25px"
              class="btn"
              >sửa</a
            >
            <a href="login.php" class="btn">Đăng xuất</a>
        
        <?php
        }
        else{
        ?>
          <a href="login.php" class="btn" >Đăng nhập</a>
          <a href="signup.php" class="btn">Đăng ký</a> 
            <?php 
        }
        ?>
      </form>
    </header>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form" class="search-form">
      <input
        type="search"
        placeholder="tìm kiếm tại đây..."
        name=""
        id="search-box"
      />
      <label for="search-box" class="fas fa-search"></label>
      <i class="fas fa-times" id="close"></i>
    </form>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
        <?php
            $sql_banner = mysqli_query($conn,"SELECT * FROM tbl_banner Order By id ASC");
            while($row_banner = mysqli_fetch_assoc($sql_banner)){
          ?>
          <div class="swiper-slide slide">
            <div class="content">
              <span><?php echo $row_banner['title_banner'] ?></span>
              <h3><?php echo $row_banner['name_banner'] ?></h3>
              <p>
              <?php echo $row_banner['description_banner'] ?>
              </p>
              <a href="#" class="btn">Mua ngay</a>
            </div>
            <div class="image">
              <img src="images/<?php echo $row_banner['img_banner'] ?>" alt="" />
            </div>
          </div>
          <?php
          }
        ?>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- home section ends -->

    <!-- dishes section starts  -->

    <section class="dishes" id="dishes">
      <h3 class="sub-heading">Lego</h3>
      <h1 class="heading">Nổi Bật</h1>

      <div class="box-container">
      <?php
            $sql_feature = mysqli_query($conn,"SELECT * FROM tbl_feature Order By id_feature ASC");
            while($row_feature = mysqli_fetch_assoc($sql_feature)){
          ?>
        <div class="box">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
          <img src="images/<?php echo $row_feature['img_feature'] ?>" alt="" />
          <h3><?php echo $row_feature['name_feature'] ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span><?php echo $row_feature['price_feature'] ?> VNĐ</span>
          <a href="#" class="btn">thêm vào giỏ</a>
        </div>
        <?php
          }
        ?>
      </div>
    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">
      <h3 class="sub-heading">cửa hàng</h3>
      <h1 class="heading">Lego-Shop sự lựa chọn hàng đầu?</h1>

      <div class="row">
        <div class="image">
          <img src="images/about-img.png" alt="" />
        </div>

        <div class="content">
          <h3>Lego chính hãng</h3>
          <p>
            Chuyên phục vụ đồ chơi cao cấp mang tính giáo dục và giúp phát triển
            trí sáng tạo cho trẻ. Các sản phẩm được thông qua kiểm định theo
            tiêu chuẩn quốc tế, đảm bảo chất lượng và độ an toàn tuyệt đối.
          </p>
          <p>
            Các thương hiệu đồ chơi uy tín từ nhiều quốc gia trên thế giới như
            LEGO, HASBRO, SIKU, SCHLEICH, K’S KIDS, JANOD, MOXIE GIRLZ,
            LALALOOPSY, LEAPFROG, …
          </p>
          <div class="icons-container">
            <div class="icons">
              <i class="fas fa-shipping-fast"></i>
              <span>Giao hàng miễn phí</span>
            </div>
            <div class="icons">
              <i class="fas fa-dollar-sign"></i>
              <span>thanh toán nhanh</span>
            </div>
            <div class="icons">
              <i class="fas fa-headset"></i>
              <span>Tư vấn 24/7</span>
            </div>
          </div>
          <a href="#" class="btn">Tìm hiểu thêm</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">
      <h3 class="sub-heading">lego</h3>
      <h1 class="heading">loại sản phẩm</h1>

      <div class="box-container">
      <?php
            $sql_category = mysqli_query($conn,"SELECT * FROM tbl_category Order By id_category ASC");
            while($row_category = mysqli_fetch_assoc($sql_category)){
          ?>
        <div class="box">
          <div class="image">
            <img src="images/<?php echo $row_category['img_category'] ?>" alt="" />
           
          </div>
          <div class="content">
            <h3><?php echo $row_category['title_category'] ?></h3>
            <p>
            <?php echo $row_category['content_category'] ?>
            </p>
            <a  href="product.php?id=<?php echo $row_category['id_category']?>" class="btn">Mua ngay</a>
           
          </div>
        </div>
        <?php
          }
        ?>
       
      </div>
    </section>

    <!-- menu section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">
      <h3 class="sub-heading">khách hàng</h3>
      <h1 class="heading">đánh giá</h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
        <?php
            $sql_reviews = mysqli_query($conn,"SELECT * FROM tbl_reviews Order By id_review ASC");
            while($row_review = mysqli_fetch_assoc($sql_reviews)){
          ?>
          <div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
              <img src="images/<?php echo $row_review['img_review']?>" alt="" />
              <div class="user-info">
                <h3><?php echo $row_review['name_review']?></h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                </div>
              </div>
            </div>
            <p>
            <?php echo $row_review['content_review']?>
            </p>
          </div>
          <?php
            }
          ?>
          
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- order section starts  -->

    <section class="order" id="order">
      <h3 class="sub-heading">đặt ngay</h3>
      <h1 class="heading">giao ngay trong 1h</h1>

      <form action="">
        <div class="inputBox">
          <div class="input">
            <span>tên của bạn</span>
            <input type="text" placeholder="nhập tên của bạn" />
          </div>
          <div class="input">
            <span>Số điện thoại</span>
            <input type="number" placeholder="nhập số điện thoại" />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>mã sản phẩm</span>
            <input type="text" placeholder="nhập mã lego" />
          </div>
          <div class="input">
            <span>tên sản phẩm</span>
            <input type="test" placeholder="nhập tên lego" />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>đơn giá</span>
            <input type="number" placeholder="giá lego" />
          </div>
          <div class="input">
            <span>ngày nhận hàng</span>
            <input type="datetime-local" />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>địa chỉ </span>
            <textarea
              name=""
              placeholder="nhập địa chỉ"
              id=""
              cols="30"
              rows="10"
            ></textarea>
          </div>
          <div class="input">
            <span>chú thích</span>
            <textarea
              name=""
              placeholder="nhập chú thích"
              id=""
              cols="30"
              rows="10"
            ></textarea>
          </div>
        </div>

        <input type="submit" value="đặt ngay" class="btn" />
      </form>
    </section>

    <!-- order section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Chi nhánh</h3>
          <a href="#">Hà Nội</a>
          <a href="#">Hải Phòng</a>
          <a href="#">Đà Nẵng</a>
          <a href="#">Cần Thơ</a>
          <a href="#">TP. Hồ Chí Minh</a>
        </div>

        <div class="box">
          <h3>Liên kết</h3>
          <a href="#">trang chủ</a>
          <a href="#">nổi bật</a>
          <a href="#">cửa hàng</a>
          <a href="#">sản phẩm</a>
          <a href="#">đánh giá</a>
          <a href="#">mua ngay</a>
        </div>

        <div class="box">
          <h3>thông tin liên lạc</h3>
          <a href="#">+84 97967585</a>
          <a href="#">+84 96753618</a>
          <a href="#">legostore@gmail.com</a>
          <a href="#">legoshop@gmail.com</a>
          <a href="#">legovn@gmail.com</a>
        </div>

        <div class="box">
          <h3>Theo dõi</h3>
          <a href="#">facebook</a>
          <a href="#">twitter</a>
          <a href="#">instagram</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <div class="credit">copyright @ 2022 by <span>lego-shop</span></div>
    </section>

    <!-- footer section ends -->

    <!-- loader part  -->
    <div class="loader-container">
      <img src="images/loader.gif" alt="" />
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <?php
    include"./PHPMailer/src/SMTP.php";
    ?>
</html>
