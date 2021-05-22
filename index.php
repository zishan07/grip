<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>GRIP task</title>
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
<body class="bg-white-200">
<div class="container" >
    <header class=" d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
  <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
</svg> -->
        <span class="fs-4"><i class="fa fa-money" aria-hidden="true" style="font-size: 30px;"></i>&nbspTSF Banking</span>
      </a>

      <ul class="nav nav-pills ">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="history.php" class="nav-link">History</a></li>
        <li class="nav-item"><a href="customers.php" class="nav-link">Customers</a></li>
        <li class="nav-item"><a href="admin.php" class="nav-link">Admin</a></li>
        <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
      </ul>
    </header>
    <?php
session_start();
include 'connect.php';

if(isset($_SESSION['adminid'])){
  ?>
  <div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
  <a href="admin.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
      <span class="fs-4">Admin </span>
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item"><a href="add.php" class="nav-link">Add users</a></li>
      <li class="nav-item "><form action="logout.php"><button onClick="javascript: return confirm('Are you sure you will be logged out?');" class="ml-6 inline-flex text-white bg-red-600 border-0 py-2 px-6 focus:outline-black hover:bg-red-700 rounded text-lg" name="logout" type="submit" id="logout" >Logout
  
  </button></form></li>
    </ul>
  </header>
</div>
<?php
}

// echo"<br>";
?>
    <section class="text-gray-600 body-font">
		<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			<div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 ml-24 font-medium text-gray-900 ">TSF Bank
              <br class="hidden lg:inline-block">The joy of Pure banking
            </h1>
				<p class="mb-8 leading-relaxed">At TSF Bank, we are guided by a common purpose to help make financial lives better by connecting clients and communities to the resource they need to be successful. We are driving growth – helping to create jobs, develop communities, foster economic mobility and address society’s biggest challenges – while managing risk and providing a return to our clients and our shareholders.</p>
				<div class="flex justify-center ml-24">
					<a href="customers.php">
						<button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg shadow">View Customers
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
								<path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a>
					<a href="about.php">
						<button class="ml-6 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg shadow">Reach Us
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
							</svg>
						</button>
					</a>
				</div>
			</div>
			<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
				<img class="object-cover object-center rounded" alt="right image" src="images/happy.png">
			</div>
		</div>
	</section>
	<section class="text-gray-600 body-font">
		<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
			<div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
				<img class="object-cover object-center rounded" alt="left image" src="images/online.png">
			</div>
			<div class=" content:center lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
				<h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 ml-32">Money transfer is 
          <br class="hidden lg:inline-block">Easier than before
        </h1>
				<p class="mb-8 leading-relaxed">The Smarter Way to Send Money. Sending so much more than money. Uniting People with Possibilities. The fastest way to send money – worldwide.</p>
				<div class="flex justify-center ml-48 ">
					<!-- <a href="users.php?id=%201">
						<button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg shadow">Money Transfer
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 5a1 1 0 100 2h1a2 2 0 011.732 1H7a1 1 0 100 2h2.732A2 2 0 018 11H7a1 1 0 00-.707 1.707l3 3a1 1 0 001.414-1.414l-1.483-1.484A4.008 4.008 0 0011.874 10H13a1 1 0 100-2h-1.126a3.976 3.976 0 00-.41-1H13a1 1 0 100-2H7z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a> -->
					<a href="history.php">
						<button class="ml-1 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded text-lg shadow">Transaction
							<svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"></path>
							</svg>
						</button>
					</a>
				</div>
			</div>
		</div>
	</section>

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
        <span class="fs-6">© 2021 TSF Bank/</span></a> 
  
  <a href="#">Developer : Zishan Sayyed</a>
  </footer>
</div>
</div>
</body>
</html>