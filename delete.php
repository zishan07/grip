<?php
session_start();
include "connect.php";
if(!isset($_SESSION['adminid'])){

    //header('location:adminpanel.php');
    echo "<script type='text/javascript'>alert('kindly login pls');</script>";
    echo "<script type='text/javascript'>location.href='login.php';</script>";
}

$id=$_REQUEST['id'];
// echo($id);
$sql1="SELECT * FROM users WHERE id='$id'";
$rr=mysqli_query($db,$sql1) or die('error in con');
$row1=mysqli_fetch_assoc($rr);
$name=$row1['name'];
//echo $name;

$facd2="DELETE FROM users WHERE id='$id'";
$facres1=mysqli_query($db,$facd2) or die('facd2 err');

if($facres1 == true )
{
    echo "<script type='text/javascript'>alert('user successfully deleted');</script>";
    echo "<script type='text/javascript'>location.href='admin.php';</script>";
}

?>