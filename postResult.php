<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?php
 #header < session
 session_start();
 header("Content-type: text/html; charset=UTF-8");
 
 $name = $_POST['name'];
 $pw = $_POST['pw'];

?>
<?php

if($name == "admin" && $pw=="1234"){
 $_SESSION['isLogin'] = 1;
 $_SESSION['name'] = $name;
?>

<h1>로그인 완료</h1>
<?=$name?>님 안녕하세요.
암호는 <?=$pw?>입니다.
로그인 페이지로 <a href="./postForm.php">돌아가기</a>

<?php
}else{
 $_SESSION['isLogin'] = 0;
 $_SESSION['name'] = '';
?>
아이디 암호가 일치하는 사용자가 없습니다.
로그인 페이지로 <a href="./postForm.php">돌아가기</a>
<?php
}
?>
