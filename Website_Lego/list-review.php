<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh sách đánh giá</title>
    <link rel="stylesheet" href="css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
  </head>
  <body>
  <?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh sách <span>đánh giá khách hàng</span></h1>
      <div class="search-box">
        <input type="text" placeholder="Tìm kiếm đánh giá ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="add-review.php"
                        >Thêm đánh giá</a
                      >
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                   <th>stt</th>
                   <th>Người đánh giá</th>
                   <th>Nội dung đánh giá</th>
                   <th>Hình ảnh người đánh giá</th>
                    <th> edit </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sql_review = mysqli_query($conn,"SELECT * FROM tbl_reviews Order By id_review ASC");
                      while($row_review = mysqli_fetch_assoc($sql_review)){
                    ?>
                  <tr>
                    <td><?php echo $row_review['id_review'] ?></td>
                    <td><?php echo $row_review['name_review'] ?></td>
                    <td><?php echo $row_review['content_review'] ?></td>
                    <td><?php echo $row_review['img_review'] ?></td>
                   
                    <td>
                      <a href="delete-review.php?id=<?php echo  $row_review['id_review']; ?>"
                        >Xóa</a
                      >
                      <a href="edit-review.php?id=<?php echo $row_review['id_review']; ?>"
                        >Sửa</a
                      >
                    </td>  
                  </tr>
                  <?php
                      }
                  ?>
                </tbody>
            </table>
        </div>    
    </section>
    <a class="back" href="admin.php"> Quay lại trang chủ</a>

  </body>
</html>
