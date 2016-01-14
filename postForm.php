<?php
 header("Content-type: text/html; charset=UTF-8");
?>

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
