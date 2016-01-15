<?php
 session_start();
 $url = "./postForm.php";

 $_SESSION['isLogin'] = 0;
 $_SESSION['name'] = '';

#session id가추가되고 Resource에서 name이런건 안보이는 것 같다.
#session id 안에 isLogin이나 name같은 값들의 정보가 들어있다
 header("Location: ". $url);
?>



