<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa review</title>
    <link rel="stylesheet" href="css/add.css">
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body>
    <?php
        include "connect.php";
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $sql = 'DELETE FROM tbl_reviews WHERE id_review =' .$id;
            $result = $conn->query($sql);
            if($result != null)
            {
                echo '<script>alert("Xóa thành công");</script>';     
            }
            else{
                echo '<script>alert("Xóa ko thành công");</script>';
            }
        }
       
    ?>
    <h1 class="heading">Xóa <span>đánh giá</span></h1>
    <div class="search-box">
        <input type="text" placeholder="Tìm kiếm đánh giá ..." />
        <i class="bx bx-search"></i>
    </div>
    <a class="back" href="list-review.php">Danh sách đánh giá sau khi xóa</a>

</body>
</html>