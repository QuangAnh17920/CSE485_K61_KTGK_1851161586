<?php
include './same/header.php';
?>
<main class="container mt-5">
    <h1 class= ' text-center text-dark mt-5 '>QUẢN LÍ BÀI THI</h1>
    <a href="them.php" class= "btn btn-dark bg-danger text-white ">Thêm Thông tin <i class="fa-solid fa-user-plus"></i></a>
    <table class="table table-dark mt-3">
        <thead>
            <tr>
            <th scope="col">Mã bài thi </th>
            <th scope="col">Tên bài thi</th>
            <th scope="col">Ngày thi</th>
            <th scope="col">Chi tiết</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $sql = 'SELECT * FROM exams';
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['id'].'</th>';
                        echo '<td>'.$row['exam_title'].'</td>';
                        echo '<td>'.$row['exam_datetime'].'</td>';
                        echo '<td><a href="chitiet.php?id='.$row['id'].'"><i class="fa-solid fa-circle-info"></i></a></td>';
                        echo '<td><a href="sua.php?id='.$row['id'].'"><i class="fas fa-user-edit"></i></a></td>';
                        echo '<td><a href="xoa.php?id='.$row['id'].'"><i class="fas fa-trash-alt"></i></a></td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>

</main>