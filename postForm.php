<?php
 session_start();
 header("Content-type: text/html; charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<!--
<form method="post" action="postResult.php" class=".navbar-form">
<h1>VOMVOM</h1>
 이름을 입력해주세요<br>
 <input type="text" name="name" id="name" value=""/><br>
 생년월일을 입력해주세요(ex: 19931219)<br>
 <input type="text" name="year" id="year" value=""/>
 <input type="text" name="mon" id="mon" value=""/>
 <input type="text" name="day" id="day" value=""/>
 
<br> 
 <input type="submit" value="결과확인"/>

</form>
-->

<?php
$isLogin = $_SESSION['isLogin'];
#is Login 값이없어도 if문을 실행하게 되는것임
if($isLogin != 1){

?>
<h1>로그인</h1>
<form method="post" action="postResult.php" class="navbar-form navbar-left">
 <div class="form-group">

  <input type="text" id="name" name="name" class="form-control" placeholder="ID 입력">
  <input type="password" id="pw" name="pw" class="form-control" placeholder="PW 입력">

 </div>
  <button type="submit" class="btn btn-default">로그인 하기</button>
</form>

<?php
}else {
$name = $_SESSION['name'];
?>

<?=$name?>님 이미 로그인이 되어있습니다.<br>
로그아웃 하시려면 아래 버튼을 누르세요.<br>
<a href="postLogout.php" class="btn btn-default">로그아웃</a>


<?php
}
?>
