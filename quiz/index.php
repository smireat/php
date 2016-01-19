<?php
 header("Content-type: text/html; charset=UTF-8");
?>

<style type="text/css">
 .wrap{width:100%;height: 100%;position:relative; margin: 0 auto;}
 .inner{position:absolute; right:40%;}
</style>
<style>
 #bg {
 background-color:#81DAF5;
 display: inline-block;
 text-align: center;
 }
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<body>
<div id="bg" class="wrap">
<h1>2016년 당신의 담임선생님은 ?</h1>
<h3>올해 당신의 담임선생님은 누구일까요?</h3>
<h4><?=$count?>명이 참여하였습니다.</h4>
<form method="post" action="index.php" class="navbar-form navbar-left">
 <div class="form-group inner">

  <input type="text" id="name" name="name" class="form-control" placeholder="이름 입력">

  <button type="submit" class="btn btn-default">결과 보기</button>
 </div>
</form>
</div>

</body>
