<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sửa đánh giá</title>
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
          $sql = "SELECT * FROM tbl_reviews WHERE id_review= $id";
          $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                  $row= $result->fetch_array();
                  $name_review = $row['name_review'];
                  $content_review = $row['content_review'];
                  $img_review = $row['img_review'];
               
              }
      }
      if(isset($_POST['edit-review'])){
          $new_name_review = $_POST['name_review'];
          $new_content_review = $_POST['content_review'];
          $new_img_review = $_POST['img_review'];
        
          $sql = "UPDATE tbl_reviews SET name_review ='$new_name_review', content_review='$new_content_review', img_review='$new_img_review' Where id_review =$id";
          if (mysqli_query($conn, $sql)) {
              echo '<script>alert("Update thành công");</script>';
          } else {
              echo '<script>alert("Update that bại");</script>'. mysqli_error($conn);
          }
          
      }
    ?>
    <a class="back" href="list-review.php"> Quay lại danh sách đánh giá sau khi sửa</a>
    <h1 class="heading">Sửa <span>đánh giá</span></h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm đánh giá ..." />
        <i class="bx bx-search"></i>
    </div>
    <div class="home-content">
        <div class="container">
            <div class="content">
              <form action="" method="post">
                <div class="user-details">
                  <div class="input-box">
                    <span class="details">Tên người đánh giá</span>
                    <input
                      type="text"
                      value="<?php echo $name_review; ?>"
                      placeholder="Nhập tên người đánh giá"
                      required
                      name="name_review"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Nội dung đánh giá</span>
                    <input
                      type="text"
                      value="<?php echo $content_review; ?>"
                      placeholder="Nhập nội dung đánh giá"
                      required
                      name="content_review"
                    />
                  </div>
                  <div class="input-box">
                    <span class="details">Hình ảnh người đánh giá</span>
                    <input
                      type="text"
                      value="<?php echo $img_review; ?>"
                      placeholder="Nhập hình ảnh người đánh giá"
                      required
                      name="img_review"
                    />
                  </div>
                  
                </div>
                <div class="button">
                  <input type="submit" name="edit-review" value="Sửa Ngay" />
                </div>
              </form>
            </div>
    </div>
    
  </body>
</html>
