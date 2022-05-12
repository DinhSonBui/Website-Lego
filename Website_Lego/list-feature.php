<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh sách lego nổi bật</title>
    <link rel="stylesheet" href="css/list.css" />
    <link
    href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
    rel="stylesheet"
  />
  </head>
  <body>
  <?php require_once "connect.php"; ?>
    <section class="home-content">
      <h1 class="heading">Danh sách <span>lego nổi bật</span></h1>
      <div class="search-box">
        <input type="text" placeholder="Tìm kiếm lego nổi bật ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="add-feature.php"
                        >Thêm lego nổi bật</a
                      >
      <div class="list-products">
        <div style="overflow-x: auto">
            <table>
                <thead>
                  <tr>
                   <th>stt</th>
                   <th>Tên lego nổi bật</th>
                   <th>Gía lego nổi bật</th>
                   <th>Hình ảnh lego nổi bật</th>
                    <th> edit </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $sql_feature = mysqli_query($conn,"SELECT * FROM tbl_feature Order By id_feature ASC");
                      while($row_feature = mysqli_fetch_assoc($sql_feature)){
                    ?>
                  <tr>
                    <td><?php echo $row_feature['id_feature'] ?></td>
                    <td><?php echo $row_feature['name_feature'] ?></td>
                    <td><?php echo $row_feature['price_feature'] ?></td>
                    <td><?php echo $row_feature['img_feature'] ?></td>
                   
                    <td>
                      <a href="delete-feature.php?id=<?php echo  $row_feature['id_feature']; ?>"
                        >Xóa</a
                      >
                      <a href="edit-feature.php?id=<?php echo $row_feature['id_feature']; ?>"
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
