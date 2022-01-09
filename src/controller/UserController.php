<?php
    require_once 'model/UserModel.php';
    class UserController{
        // Điều khiển về mặt logic giữa UserModel và User View
        function index(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
            $userModel = new UserModel();
            $users = $userModel->getAllUsers();
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
            require_once 'view/user/index.php';
        }

       public function add(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
     $error = '';
     if (isset($_POST['submit'])){
         $name = $_POST['name'];
         $pass = $_POST['pass'];
          if(empty($name)){
              $error ="name ko dc de trong";

          }
          else{
            //   goi insert duu lieu vao database
            $userModel = new UserModel();
            // goi phuong thuc insert du lieu
            // nen tao 1 mang luu thong tin cua doi tuong theo cau truc bang
            $UserArr = [
                'name'=>$name,
                'pass'=>$pass

            ];
            $isInsert = $userModel->insert($UserArr);
            if ($isInsert){
                $_SESSION['success'] = "them thanh cong";
            }
            else{
                $_SESSION['error'] = "them that bai";
            }
            header("location : index.php?controller=User&action=index");
            exit();
          }
     }
            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/add.php tương ứng
            // goi view
            require_once'view/user/add.php';
        }

        function edit(){
            // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu

            // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/edit.php tương ứng
        }
    }



?>