<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thêm đánh giá</title>
    <link rel="stylesheet" href="css/add.css">
  </head>
  <body>
    <?php
        if(isset($_POST['add-review'])){
          require_once "connect.php";
          $sqlCheckProduct = "SELECT * FROM tbl_reviews Where name_review = '".$_POST['name-review']."'";
          $resultCheckProduct = $conn->query($sqlCheckProduct); 
          if($resultCheckProduct->num_rows >0)
          {
            echo '<script> alert("Lego này đã tồn tại, vui lòng nhập lego khác");</script>';
          }
          else{
            $sql = "INSERT INTO tbl_reviews (name_review,content_review,img_review)  VALUES ('".$_POST['name-review']."','".$_POST['content-review']."','".$_POST['img-review']."')";
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
    <a class="back" href="list-review.php">Danh sách đánh giá sau khi thêm</a>
    <h1 class="heading">Thêm <span>đánh giá</span></h1>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên người đánh giá</span>
                    <input
                      type="text"
                      placeholder="Nhập tên người đánh giá"
                      required
                      name="name-review"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Nội dung đánh giá</span>
                    <input
                      type="text"
                      placeholder="Nhập nội dung đánh giá"
                      required
                      name="content-review"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh người đánh giá</span>
                    <input
                      type="text"
                      placeholder="Nhập hình ảnh người đánh giá"
                      required
                      name="img-review"
                    />
                  </div>
                  
                  </div>
                </div>
                <div class="button">
                  <input type="submit" name="add-review" value="Thêm ngay" />
                </div>
              </form>
            </div>
        </div>
    </div>
  </body>
</html>
