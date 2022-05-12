<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
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
        <a  href="index.php">trang chủ</a>
       
        <a class="active" href="#menu">sản phẩm</a>
      
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
          <a href="register.php" class="btn">Đăng ký</a> 
            <?php 
        }
        ?>
      </form>
    </header>

 <!-- dishes section starts  -->
 <?php
      require_once "connect.php";
      if(isset($_GET['id']))
      {
        $id_category = $_GET['id'];
       
    }
  ?>
 <section style="margin-top:60px" class="dishes" id="dishes">
      <h3   class="sub-heading">Lego</h3>
      <h1 class="heading">Nổi Bật</h1>

      <div class="box-container">
      <?php
            $sql_product = mysqli_query($conn,"SELECT * FROM tbl_products Where category_product = $id_category Order By id_product ASC");
            while($row_product = mysqli_fetch_assoc($sql_product)){
          ?>
        <div class="box">
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
          <img src="images/<?php echo $row_product['img_product'] ?>" alt="" />
          <h3><?php echo $row_product['name_product'] ?></h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <span><?php echo $row_product['price_product'] ?> VNĐ</span>
          <a href="cart.php?id=<?php echo $row_product['id_product'] ?>&action=add" class="btn">thêm vào giỏ</a>
        </div>
        <?php
          }
        ?>
      </div>
    </section>

    <!-- dishes section ends -->


      

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>