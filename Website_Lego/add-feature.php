<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm lego nổi bật</title>
    <link rel="stylesheet" href="css/add.css">
  </head>
  <body>
    <?php
        if(isset($_POST['add-feature'])){
          require_once "connect.php";
          $sqlCheckProduct = "SELECT * FROM tbl_feature Where name_feature = '".$_POST['name-feature']."'";
          $resultCheckProduct = $conn->query($sqlCheckProduct); 
          if($resultCheckProduct->num_rows >0)
          {
            echo '<script> alert("Lego này đã tồn tại, vui lòng nhập lego khác");</script>';
          }
          else{
            $sql = "INSERT INTO tbl_feature (name_feature,price_feature,img_feature)  VALUES ('".$_POST['name-feature']."','".$_POST['price-feature']."','".$_POST['img-feature']."')";
            $result =$conn->query($sql); 
            if($result === TRUE) { 
              echo '<script> alert("Thêm vào thành công !!");</script>'; 
            } 
            else{ 
              echo '<script> alert("Thêm vào không thành công !!");</script>'; 
            } 
            $conn->close(); 
          }
        }
    ?>
    <a class="back" href="list-feature.php">Danh sách lego nổi bật sau khi thêm</a>
    <h1 class="heading">Thêm <span>lego nổi bật</span></h1>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên lego nổi bật</span>
                    <input
                      type="text"
                      placeholder="Nhập tên lego nổi bật"
                      required
                      name="name-feature"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Gía lego nổi bật</span>
                    <input
                      type="text"
                      placeholder="Nhập giá lego nổi bật"
                      required
                      name="price-feature"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh lego nổi bật</span>
                    <input
                      type="text"
                      placeholder="Nhập hình ảnh lego nổi bật"
                      required
                      name="img-feature"
                    />
                  </div>
                  
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="add-feature" value="Thêm ngay" />
                </div>
              </form>
            </div>
        </div>
    </div>
  </body>
</html>
