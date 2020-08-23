<?php
setcookie('status',"OK",time()-3600,'/');
header('location: home.php');
?>