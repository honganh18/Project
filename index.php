<?php
    include 'header.php';
?>

    <main>
        <!-- Hiển thị BẢNG DỮ LIỆU DANH BẠ CÁ NHÂN -->
        <!-- Kết nối tới Server, truy vấn dữ liệu (SELECT) từ Bảng db_employees -->
        <!-- Quy trình 4 bước -->:
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col"> Tên bệnh nhân</th>
                    <th scope="col">Họ đệm bệnh nhân</th>
                    <th scope="col"> Ngày sinh</th>
                    <th scope="col"> Giới tính</th>
                    <th scope="col"> Số điện thoại</th>
                    <th scope="col"> Email</th>
                    <th scope="col"> Chiều cao</th>
                    <th scope="col">Cân nặng</th>
                    <th scope="col">Nhóm máu</th>
                    <th scope="col">Ngày lập sổ</th>
                    <th scope="col">Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                <?php
                    // Quy trình 4 bước
                    // Bước 01: Đã tạo sẵn, gọi lại thôi
                    include 'config.php';
                    // Bước 02: Thực hiện TRUY VẤN
                    $sql = "SELECT e.patientid, e.firstname, e.lastname, e.dateofbirth, e.gender, e.mobile, e.email, e.height,e.weight, e.blood_type, e.created_on, e.modified_on FROM patient e";
                    $result = mysqli_query($conn,$sql); //Lưu kết quả trả về vào result
                    //Bước 03: Phân tích và xử lý kết quả
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patientid'].'</th>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            echo '<td>'.$row['gender'].'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['height'].'</td>';
                            echo '<td>'.$row['weight'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['modified_on'].'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
                
                <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
            </tbody>
         </table>
         <a href="patient.php">Hiển thị thông tin chi tiết</a>
    </main>
    
<?php
    include 'footer.php';
?>