<?php

session_start();
if(isset($_SESSION['adminid'])){
    //session_unset();
    unset($_SESSION['adminid']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);
    session_destroy();
    echo "<script type='text/javascript'>alert('you are loged out');</script>";
    echo "<script type='text/javascript'>location.href='login.php'</script>";
}
else{
    echo "<script type='text/javascript'>alert('kindly login pls');</script>";
    echo "<script type='text/javascript'>location.href='login.php'</script>";
    // echo "<script type='text/javascript'>window.location.reload();</script>";

}
?>