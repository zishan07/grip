<?php 
if(isset($_SESSION['adminid'])){
  header('location:admin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/internetbanking.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      .fa {
        padding: 10px;
        font-size: 20px;
        width: 40px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 150px;
      }
      
      .fa:hover {
          opacity: 0.7;
      }
      
      .fa-facebook {
        background: #3B5998;
        color: white;
      }
      
      .fa-twitter {
        background: #55ACEE;
        color: white;
      }
      
      .fa-google {
        background: #dd4b39;
        color: white;
      }
      
      .fa-linkedin {
        background: #007bb5;
        color: white;
      }
      
      .fa-youtube {
        background: #bb0000;
        color: white;
      }
      
      .fa-instagram {
        background: #125688;
        color: white;
      }
      
      .fa-pinterest {
        background: #cb2027;
        color: white;
      }
      
      .fa-snapchat-ghost {
        background: #fffc00;
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
      }
      
      .fa-skype {
        background: #00aff0;
        color: white;
      }
      
      .fa-android {
        background: #a4c639;
        color: white;
      }
      
      .fa-dribbble {
        background: #ea4c89;
        color: white;
      }
      
      .fa-vimeo {
        background: #45bbff;
        color: white;
      }
      
      .fa-tumblr {
        background: #2c4762;
        color: white;
      }
      
      .fa-vine {
        background: #00b489;
        color: white;
      }
      
      .fa-foursquare {
        background: #45bbff;
        color: white;
      }
      
      .fa-stumbleupon {
        background: #eb4924;
        color: white;
      }
      
      .fa-flickr {
        background: #f40083;
        color: white;
      }
      
      .fa-yahoo {
        background: #430297;
        color: white;
      }
      
      .fa-soundcloud {
        background: #ff5500;
        color: white;
      }
      
      .fa-reddit {
        background: #ff5700;
        color: white;
      }
      
      .fa-rss {
        background: #ff6600;
        color: white;
      }
      </style>
</head>
<body>

  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
  <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
</svg> -->
        <span class="fs-4"><i class="fa fa-money" aria-hidden="true" style="font-size: 30px;"></i>&nbspTSF Banking</span>
      </a>

      <ul class="nav nav-pills">  
        <li class="nav-item"><a href="index.php" class="nav-link " >Home</a></li>
        <li class="nav-item"><a href="history.php" class="nav-link">History</a></li>
        <li class="nav-item"><a href="customers.php" class="nav-link " >Customers</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link active" aria-current="page">Admin</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
      </ul>
    </header>
</div>

<div align="center" class="container">
<button class="ml-6 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-black hover:bg-blue-700 rounded text-lg" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login as Admin</button>

</div>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="adminverify.php" method="post" >
    <div align="center" class="imgcontainerp">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/avatar.png" alt="Avatar" class="avatarp" style="text-align: center;">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>
        
      <button  type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<br><br><br>
<div class="container" align="center">

      
  <footer class="page-footer font-small cyan darken-3">
  <a href="#" class="fa fa-linkedin"></a>
  <a href="#" class="fa fa-facebook"></a>
  
  <a href="#" class="fa fa-twitter"></a>
  <!-- <a href="#" class="fa fa-google"></a> -->

  <a href="#" class="fa fa-youtube"></a>
  <a href="#" class="fa fa-instagram"></a>
  
  <!-- <a href="#" class="fa fa-pinterest"></a>
  <a href="#" class="fa fa-snapchat-ghost"></a>
  <a href="#" class="fa fa-skype"></a>
  <a href="#" class="fa fa-android"></a>
  <a href="#" class="fa fa-dribbble"></a>
  <a href="#" class="fa fa-vimeo"></a>
  <a href="#" class="fa fa-tumblr"></a>
  <a href="#" class="fa fa-vine"></a>
  <a href="#" class="fa fa-foursquare"></a>
  <a href="#" class="fa fa-stumbleupon"></a>
  <a href="#" class="fa fa-flickr"></a>
  <a href="#" class="fa fa-yahoo"></a>
  <a href="#" class="fa fa-reddit"></a>
  <a href="#" class="fa fa-rss"></a> -->
  
  <div class="footer-copyright text-center py-3"><a href="index.php" class="text-dark text-decoration-none"><svg class="bi me-2" width="20" height="4"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-6"> © 2021 TSF Bank/</span></a> 
  
  <a href="#">Developer : Zishan Sayyed</a>
  </div>
  </footer>
</div>  
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
