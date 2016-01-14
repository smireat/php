<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];
$urls['이주승'] = "http://cafe.daum.net/lee890720";
$urls['주비디오'] = "http://joovideo.net/";
$urls['데이식스'] = "http://day6.jype.com/";
$urls['day6'] = "http://day6.jype.com/";

if(array_key_exists($url, $urls)){
 header("Location: ". $urls[$url]);
 exit();
}
else{
 echo "기타 : " . $url;
 header("Location: http://maplestory.com/");
}


?>
