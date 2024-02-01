<!DOCTYPE html>
<html lang="th"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">
  <style type="text/css">
  body {
	margin-right: 0px;
}
  </style>
  <title>MadamClean</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand"><img src="images/logo/logomdc.png" width="72" height="72" alt="">
    MadamClean</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav ml-auto pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">บริการ</a></li>
        <ul class="nav">    
    	<li class="nav-item dropdown">
       <style>
    	.dropdown-menu {
        background-color: #F08080; /* LightCora */
    		}
		</style>
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">เข้าสู่ระบบ</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#registration">เข้าสู่ระบบ</a>
            <a class="dropdown-item" href="#registration">ลงทะเบียน</a>
            <!-- Add more dropdown items as needed -->
        </div>
    	</li>
		</ul>
          <li class="nav-item"><a href="#Contact" class="nav-link">ติดต่อเรา</a></li>
    </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/banner/madampage.png);">
    <div class="myclass mainHeading"><div align="right">
      <h1 class="text-uppercase text-white font-weight-bold">ให้เราดูแลทุกความสะอาดให้คุณ</h1>
      <p style="color: darkgreen; font-style: italic; font-size: 20px;">"มาดามคลีน"แม่บ้านออนไลน์</p>
      <!--<a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>-->
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center">MadamClean แม่บ้านออนไลน์</h3>
      <p>
       
      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>บริการของเรา</h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class=" fa-8x text-success"></i></a>
        <h4 class="mt-4">แม่บ้านรายชั่วโมง</h4>
        <table width="85%" class="table">
        <thead>
            <tr>
                <th scope="col">เวลา</th>
                <th scope="col">ราคา</th>                
                <!-- Add more headers as needed -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2 ชม.</td>
                <td>500฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>3 ชม.</td>
                <td>700฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>4 ชม.</td>
                <td>900฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>5 ชม.</td>
                <td>1,100฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>6 ชม.</td>
                <td>1,200฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>7 ชม.</td>
                <td>1,400฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>8 ชม.</td>
                <td>1,600฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa-8x text-primary"></i></a>
        <h4 class="mt-4">ทำความสะอาดออฟฟิศ</h4>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">เวลา</th>
                <th scope="col">ราคา</th>                
                <!-- Add more headers as needed -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>4 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>6 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
        
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fa-8x text-info"></i></a>
        <h4 class="mt-4">BigCleaning</h4>
        <!-- Adding a table -->
    <table width="31%" class="table">
        <thead>
            <tr>
                <th width="44%" scope="col">เวลา</th>
                <th width="56%" scope="col">ราคา</th>                
                <!-- Add more headers as needed -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>3 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>4 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            
            <tr>
                <td>6 ชม.</td>
                <td>00฿</td>
                <!-- Add more data cells as needed -->
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
    </div>
    </div>
  </div> <!-- End Services -->

  <!-- Start Registration  -->
  <?php include('userRegistration.php') ?>
  <!-- End Registration  -->
  
  
  

  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-danger" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">แม่บ้านของเรา</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/Empoyee/maid (1).png" class="img-fluid" style="border-radius: 25px;">
              <h4 class="card-title">คุณแม่บ้าน</h4>
              <p class="card-text">ชื่อ-สกุล (ชื่อเล่น)<br>ประสบการณ์<br>แนะนำตัว</p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/Empoyee/maid (1).png" class="img-fluid" style="border-radius: 25px;">
              <h4 class="card-title">คุณแม่บ้าน</h4>
              <p class="card-text">ชื่อ-สกุล (ชื่อเล่น)<br>ประสบการณ์<br>แนะนำตัว</p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/Empoyee/maid (1).png" class="img-fluid" style="border-radius: 25px;">
              <h4 class="card-title">คุณแม่บ้าน</h4>
             <p class="card-text">ชื่อ-สกุล (ชื่อเล่น)<br>ประสบการณ์<br>แนะนำตัว</p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/Empoyee/maid (1).png" class="img-fluid" style="border-radius: 25px;">
              <h4 class="card-title">คุณแม่บ้าน</h4>
              <p class="card-text">ชื่อ-สกุล (ชื่อเล่น)<br>ประสบการณ์<br>แนะนำตัว</p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    
	<div class="row justify-content-center">
      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->

      <!-- End Contact Us 2nd Column-->
    </div> 
	<!-- End Contact Us Row-->
  
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->
        
        <div class="col-md-6 text-right" >
        <!-- Start Contact Column-->
        <strong>ติดต่อเรา</strong> <br>
        44/18 ซ.ลาดพร้าว 15 แยก 11 <br>
        ถ.ลาดพร้าว แขวงจอมพล <br>
        เขตจตุจักร<br>
        กรุงเทพมหานคร 10900 <br>
        โทร: 061-775-5880 <br>
        <a href="https://madam-clean.com/" target="_blank" style="color: red;">madam-clean.com</a> <br>

        
      </div> <!-- End Contact Us 2nd Column-->

        <div class="col-md-7 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Copyright &copy; MadamClean 2024 
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>