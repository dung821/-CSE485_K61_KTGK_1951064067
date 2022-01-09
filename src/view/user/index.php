<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Users from Database</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


<?php
        foreach($users as $user){
            // echo "<p> {$user['tendangnhap']} có mật khẩu là {$user['matkhau']}</p>";
        }
    ?>
    <button type="button" class="btn btn-success"><a href="http://127.0.0.1:5500/thu/index.php">THEM MOI</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">maduan</th>
      <th scope="col">tenduan</th>
      <th scope="col">namthuchien</th>
      <th scope="col">READ</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELEETE</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $user['tendangnhap']?></th>
      <td><?php echo $user['ma_nguoidung']?></td>
      <td>@<?php echo $user['email']?></td>
      <td> <a href="read.php">READ</a></td>
      <td> <a href="read.php">EDIT</a></td>
      <td>DELETE</td>
    </tr>
   
    </tr>
  </tbody>
</table>



</body>
</html>