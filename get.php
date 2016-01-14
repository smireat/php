<a href="./get.php?goodsid=12345" target="_self">
./get.php?goodsid=12345
</a>
<br/>

<pre>
<?php
 header("Content-type: text/html; charset=UTF-8");
 
 $goodsid = $_GET['goodsid'];
 if($goodsid == ""){
  $goodsid="비어있음";
 }
?>
</pre>
goodsid는 <?=$goodsid?>입니다.

</hr>
현재 넘겨진 값이 <br/>
<pre>
<?php print_r($_GET)?>
</pre>

