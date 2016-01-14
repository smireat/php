<?php
 header("Content-type: text/html; charset=UTF-8");
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<form method="post" action="postResult.php">
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
