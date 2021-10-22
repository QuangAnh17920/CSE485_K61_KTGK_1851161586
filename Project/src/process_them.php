<?php
    include 'config.php';
    $exam_title= $_POST['exam_title'];
    $exam_datetime= $_POST['exam_datetime'];
    $duration= $_POST['duration'];
    $total_question= $_POST['total_question'];
    $marks_per_right_answer= $_POST['marks_per_right_answer'];
    $created_on= $_POST['created_on'];
    $status= $_POST['status'];
    $exam_code= $_POST['exam_code'];
    //Bước 2: 
    $sql = "INSERT INTO `exams`(`exam_title`, `exam_datetime`, `duration`, `total_question`,`marks_per_right_answer`, `created_on`, `status`,`exam_code`) 
    VALUES ('$exam_title','$exam_datetime','$duration','$total_question','$marks_per_right_answer','$created_on','$status','$exam_code')";
    
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>