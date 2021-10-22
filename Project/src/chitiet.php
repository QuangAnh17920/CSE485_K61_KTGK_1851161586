<?php
    include 'same/header.php';
   
?>
<main class="container mt-5">
    <h2 class="mb-3 text-center">Thông tin chi tiết </h2>
    
    <table class="table table-dark mt-3">
        <thead>
            <tr>
            <th scope="col">Mã bài thi </th>
            <th scope="col">Tên bài thi</th>
            <th scope="col">Ngày thi</th>
            <th scope="col">Thời gian làm bài</th>
            <th scope="col">Số câu hỏi</th>
            <th scope="col">Điểm cho mỗi câu trả lời đúng</th>
            <th scope="col">Ngày tạo bài thi</th>
            <th scope="col">Trạng thái </th>
            <th scope="col">Mã truy cập bài thi </th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $Id = $_GET['id'];
                $sql = "SELECT * FROM exams WHERE id = '$Id'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['id'].'</th>';// dấu '. .' là để nối chuỗi 
                        echo '<td>'.$row['exam_title'].'</td>';
                        echo '<td>'.$row['exam_datetime'].'</td>';
                        echo '<td>'.$row['duration'].'</td>';
                        echo '<td>'.$row['total_question'].'</td>';
                        echo '<td>'.$row['marks_per_right_answer'].'</td>';
                        echo '<td>'.$row['created_on'].'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        echo '<td>'.$row['exam_code'].'</td>';
                        echo '</tr>';
                    }
                }
                ?>
        </tbody>
    </table>

</main>
