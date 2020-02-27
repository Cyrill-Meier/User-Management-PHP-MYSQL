<?php
session_start();
if(!isset($_SESSION['primaryauth'])){
  echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
echo "Lets do 2nd Auth";


 ?>
