<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa lego nổi bật</title>
    <link rel="stylesheet" href="css/add.css">
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php
      require_once "connect.php";
      if(isset($_GET['id']))
      {
          $id = $_GET['id'];
          $sql = "SELECT * FROM tbl_feature WHERE id_feature= $id";
          $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                  $row= $result->fetch_array();
                  $name_feature = $row['name_feature'];
                  $price_feature = $row['price_feature'];
                  $img_feature = $row['img_feature'];
               
              }
      }
      if(isset($_POST['edit-feature'])){
          $new_name_feature = $_POST['name_feature'];
          $new_price_feature = $_POST['price_feature'];
          $new_img_feature = $_POST['img_feature'];
        
          $sql = "UPDATE tbl_feature SET name_feature ='$new_name_feature', price_feature='$new_price_feature', img_feature='$new_img_feature' Where id_feature =$id";
          if (mysqli_query($conn, $sql)) {
              echo '<script>alert("Update thành công");</script>';
          } else {
              echo '<script>alert("Update that bại");</script>'. mysqli_error($conn);
          }
          
      }
    ?>
    <a class="back" href="list-feature.php"> Quay lại danh sách lego nổi bật sau khi sửa</a>
    <h1 class="heading">Sửa <span>lego nổi bật</span></h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm lego ..." />
        <i class="bx bx-search"></i>
    </div>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên lego</span>
                    <input
                      type="text"
                      value="<?php echo $name_feature; ?>"
                      placeholder="Nhập tên lego"
                      required
                      name="name_feature"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Gía lego</span>
                    <input
                      type="text"
                      value="<?php echo $price_feature; ?>"
                      placeholder="Nhập giá lego"
                      required
                      name="price_feature"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh lego</span>
                    <input
                      type="text"
                      value="<?php echo $img_feature; ?>"
                      placeholder="Nhập hình ảnh lego"
                      required
                      name="img_feature"
                    />
                  </div>
                  
                </div>
                <div class="button">
                  <input type="submit" name="edit-feature" value="Sửa Ngay" />
                </div>
              </form>
            </div>
    </div>
    
  </body>
</html>
