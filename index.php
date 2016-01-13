<style>
 b {
  color:red;
  font-weight:normal;
  background:#000000;
 }

 #hellobox {
  width:500px;
  height:300px;
  border:1px solid #ff0000;
  padding:10px; margin:10px; position:absolute;
  top:20px; right:20px; 
}

.nicename {
  font-weight:bold;
  font-size:20px;
  text-decoration:underline;
  cursor:pointer;
}


</style>

<div id="hellobox">
 dkssudgktpdy~:
</div>
<?php

for( $i=0 ; $i < 10000 ;  $i++){
 echo $i."<b>hi<span class='nicename'>Tearim</span></br></b>";
}

?>


