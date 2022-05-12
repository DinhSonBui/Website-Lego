<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm banner</title>
    <link rel="stylesheet" href="css/add.css">
  </head>
  <body>
    <?php
        if(isset($_POST['add-banner'])){
          require_once "connect.php";
          $sqlCheckProduct = "SELECT * FROM tbl_banner Where name_banner = '".$_POST['name-banner']."'";
          $resultCheckProduct = $conn->query($sqlCheckProduct); 
          if($resultCheckProduct->num_rows >0)
          {
            echo '<script> alert("Banner này đã tồn tại, vui lòng nhập banner khác");</script>';
          }
          else{
            $sql = "INSERT INTO tbl_banner (title_banner,name_banner,description_banner, img_banner)  VALUES ('".$_POST['title-banner']."','".$_POST['name-banner']."','".$_POST['description-banner']."','".$_POST['img-banner']."')";
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
    <a class="back" href="list-banner.php">Danh sách banner sau khi thêm</a>
    <h1 class="heading">Thêm <span>banner</span></h1>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tiêu đề banner</span>
                    <input
                      type="text"
                      placeholder="Nhập tiêu đề banner"
                      required
                      name="title-banner"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Tên banner</span>
                    <input
                      type="text"
                      placeholder="Nhập tên banner"
                      required
                      name="name-banner"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Mô tả banner</span>
                    <input
                      type="text"
                      placeholder="Nhập mô tả banner"
                      required
                      name="description-banner"
                    />
                  </div>
                  <div class="input-box">
                  <span class="details">Hình ảnh banner</span>
                    <input
                      type="text"
                      placeholder="Nhập hình ảnh banner"
                      required
                      name="img-banner"
                    />
                  </div>
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="add-banner" value="Thêm ngay" />
                </div>
              </form>
            </div>
        </div>
    </div>
  </body>
</html>
