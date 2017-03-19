<?php
session_start();
if(isset($_SESSION['is_login'])){
    echo "Anda Login Sebagai '". $_SESSION["user_name"]."'";
}else{
    echo "Anda Belum Login ";
}

?>