<?php
   define('HOST','localhost');
   define('USER','root');
   const PASS = '';
   const DB ='htqlthitracnghiem';
   $conn = mysqli_connect(HOST, USER, PASS, DB);
   if(!$conn){
       die('không thể kết nối');
   }
?>