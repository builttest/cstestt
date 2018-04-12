<?php
session_start();
ob_start();
echo $_SESSION['abc']; // ผลลัพธ์คือแสดงข้อความ Hello 
?>