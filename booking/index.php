<!DOCTYPE html>
<html lang="th"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/custom.css">
  <style type="text/css">
  body {
	  margin-right: 0px;
  }
  .dropdown-menu {
    background-color: #F08080; /* LightCora */
  }
  </style>
  <title>MadamClean</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand"><img src="../images/logo/logomdc.png" width="72" height="72" alt="">
    MadamClean</a>
    <span class="navbar-text"></span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav ml-auto pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">บริการ</a></li>
        <li class="nav-item"><a href="booking" class="nav-link">จองแม่บ้าน</a></li>
        <ul class="nav">    
    	    <li class="nav-item dropdown">
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

<div class="layout">
    <div class="row">
        <div class="col-12 my-5 pb-2"></div>
        <div class="col-12 col-lg-3 col-sm-6 mt-5 mx-5">
           <h4>จองแบบครั้งเดียว</h4>      
           <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="">สถานที่</label>
                    <input type="text" class="form-cotrol">
                </div>
                <div class="form-group">
                    <label for="">อุแกรณ์</label>
                    <select name="" id="" class="form-cotrol">>
                        <option value="">(+0 บาท) ฉันมีอุปกรณ์ที่จำเป็นในการทำความสะอาด</option>
                        <option value="">(+49 บาท) ฉันไม่มีอุปกรณ์ทำความสะอาด</option>
                    </select>
                </div>
            </div>
           </div>      
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4941.5981406307465!2d100.57284546007996!3d13.860237106779552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29cd73f1a8eeb%3A0xf45fb9068d605131!2sDailyNews%20Newspaper!5e0!3m2!1sen!2sth!4v1706806173452!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> <!-- End Customer 3rd Column-->
    </div>
</div>
  <!-- Start Registration  -->
  <?php 
      include('../footer.php');
   ?>


  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>

</html>