<?php
    include 'same/header.php';
    include 'config.php';
    $ID = $_GET['id'];
    $sql = "SELECT * from  exams where id = '$ID'";
    $result_current = mysqli_query($conn, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
?>
<a href="index.php" class="btn btn-secondary mb-3"><i class="fas fa-undo-alt"></i> Quay lại</a>
<main class= "container mt-5 ">
    <h2 class="mb-2 text-center">Chỉnh sửa thông tin</h2>
    
    <form action="ttsua.php?id=<?php echo $_GET['id']?>" method="post">
        <div class="mb-3 form-group row">
            <label for="id" class="col-sm-2 col-form-label">Mã bài thi </label>
            <div class="col-sm-5">
                <input type="text" disabled value="<?php echo $row_current['id'] ?>" class="form-control"  name="id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exam_title" class="col-sm-2 col-form-label">Tên bài thi </label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['exam_title'] ?>" class="form-control"  name="exam_title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exam_datetime" class="col-sm-2 col-form-label">Ngày thi</label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['exam_datetime'] ?>" class="form-control"  name="exam_datetime">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="duration" class="col-sm-2 col-form-label">Thời gian làm bài</label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['duration'] ?>" class="form-control" name="duration">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="total_question" class="col-sm-2 col-form-label">Số câu hỏi </label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['total_question'] ?>" class="form-control"  name="total_question">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="marks_per_right_answer" class="col-sm-2 col-form-label">Điểm cho mỗi câu trả lời đúng </label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['marks_per_right_answer'] ?>" class="form-control"  name="marks_per_right_answer">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="created_on" class="col-sm-2 col-form-label">Ngày tạo bài thi </label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['created_on'] ?>" class="form-control"  name="created_on">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="status" class="col-sm-2 col-form-label">Trạng thái </label>
            <div class="col-sm-5">
                <input type="text" value="<?php echo $row_current['status'] ?>" class="form-control" name="status">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="exam_code" class="col-sm-2 col-form-label">Mã truy cập bài thi </label>
            <div class="col-sm-5">
                <input type="exam_code" value="<?php echo $row_current['exam_code'] ?>" class="form-control" name="exam_code">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="btn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-danger">Lưu lại</button>
            </div>
        </div>
        

       
    </form>
</main>
<?php
include 'same/footer.php';
?>