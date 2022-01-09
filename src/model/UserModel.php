<?php
    require_once 'config/db.php';

    class UserModel{
        private $maduan;
        private $tenduan;
        private $namthuchien;
        private $nhiemvu;
        private $coquanthuchien;


        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAllUsers(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM duan";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_users = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_users;
        }
//  HAM INSERT
public function insert($param =[]){
    $connection= $this->connectDb();
// tao thuc thi tru van
$queryInsert = "INSERT INTO duan VALUES (NULL, '{$param['maduan']}', '{$param['tenduan']}','{$param['namthuchien']}')";
$isInsert =mysqli_query($connection,$queryInsert);
$this->closeDb($connection);
}




       

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>