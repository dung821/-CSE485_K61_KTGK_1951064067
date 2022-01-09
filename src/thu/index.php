<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DỰ ÁN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>

        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dự án</a>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Chương trình dự án KTTV BDKH</h5>
        <div>
            <a class="btn btn-primary" href="add.php">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã dự án</th>
                    <th scope="col">Tên dự án </th> 
                    <th scope="col">Năm thực hiện</th>
                    <th scope="col">lĩnh vực</th>
                    <th scope="col">Nhiệm vụ</th>
                    <th scope="col">Cơ quan thực hiện</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','1951064074_kttv_bdkh');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT * FROM duan ";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['maduan']; ?></th>
                                <td><?php echo $row['tenduan']; ?></td>
                                <td><?php echo $row['namthuhien']; ?></td>
                                <td><?php echo $row['linhvuc']; ?></td>
                                <td><?php echo $row['nhiemvu']; ?></td>
                                <td><?php echo $row['coquanthuchien']; ?></td>
                                <td><a href="update.php?maduan=<?php echo $row['maduan']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="delete.php?maduan=<?php echo $row['maduan']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                    // Bước 04: Đóng kết nối Database Server
                    mysqli_close($conn);
                ?>
                
                
            </tbody>
            </table>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>