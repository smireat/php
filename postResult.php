
<?php
 header("Content-type: text/html; charset=UTF-8");
 
 $name = $_POST['name'];
 $year = $_POST['year'];
 $mon = $_POST['mon'];
 $day = $_POST['day'];
 
 $age = 2016-$year+1;
?>


<h1>환영합니다</h1>
<?=$name?>님 안녕하세요.
당신은 2016년 올해 <?=$age?>살입니다.
