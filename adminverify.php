<?php
session_start();
include 'connect.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
    $password = sha1(md5($pwd));
    
    $sql = "SELECT username FROM admin WHERE username = '$username' and password = '$password'";
   
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    //$active = $row['active']; 
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) 
    {

       
       //session_id(); 
       $_SESSION['valid']= true;
       $_SESSION['adminid'] = $username;
       $_SESSION['password'] = $password;
       $_SESSION['timeout'] = time();

       if($_POST["remember"]=='1' || $_POST["remember"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $login, $hour);
                         setcookie('password', $password, $hour);
                    }
      //  header("location: admin.php");
       
       //header("location: adminpanel.php");
       if(isset($_SESSION['adminid'])){
         header("location: admin.php");
       }
        else{
         
          echo "<script type='text/javascript'>alert('Your Login Name or Password is invalid'); </script>";
          echo "<script type='text/javascript'>location.href='login.php'</script>";
        }
       
    }
    else{
         
      echo "<script type='text/javascript'>alert('Your Login Name or Password is invalid'); </script>";
      echo "<script type='text/javascript'>location.href='login.php'</script>";
    }
}
?>