<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Nepal </title>
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/welcome.css">
    <link rel="stylesheet" href="fonts/fonts/ionicons.min.css">
    
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>

  <div class="header sticky-top">
    <a class="logo" href="home.php" style="height: 10px;">Image Nepal</a>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn" style="margin-bottom: 0px;">
      <i class="fas fa-bars fa-xs" style="height: 10px"></i>
    </label>

    <ul class="menu"  style="height: 10px;">
      
      
      <a href="aboutus.php">About Us</a>
      <a href="contact.php">Contact Us</a>
      
      
      <label for="chk" class="hide-menu-btn" style="margin-bottom: 0px; ">
        <i class="fas fa-times fa-xs"  style="height: 10px"></i>
      </label>
    </ul>
  </div>

  <?php include("welcome.blade.php"); ?>

    </div>

<div style=" background:#eee; margin-top: -24px; overflow: hidden;">
  <h1 style="text-align:center; font-size: 50px;  padding-top: 50px; padding-bottom: 20px;">Why Snack Saver?</h1>  
  
  <div class = "row d-flex justify-content-center" style="padding-bottom: 55px; ">       
            <div class="col-md-3 item text" >
              <i class="fa fa-trash fa-5x d-flex justify-content-center" aria-hidden="true" style="color: green; padding-bottom: 20px;"></i>
               <h3 style="text-align:center;">Reduce Waste</h3>
                <p >Snack Saver provides a platform to share the left over food. It will help to reduce the left over food in the hotel or resturants. Different methods will be used to reduce the wastage of food and left over food will be properly utilized. </p>
            </div>
            <div class="col-md-1 align-self-center" >
            <div class="hideright"><i class="fa fa-angle-right fa-5x" aria-hidden="true" style="color: green;padding-bottom: 20px;"></i></div>
            <div class="hide"><i class="fa fa-angle-down fa-5x " aria-hidden="true " style="color: green;padding-bottom: 20px;"></i></div></div>
             <div class="col-md-3 item text" >
              <i class="fa fa-dollar fa-5x d-flex justify-content-center" aria-hidden="true" style="color: green; align-content: center;padding-bottom: 20px;"></i>
                <h3 style="text-align:center;">Save Money</h3>
                <p >Snack Saver provides a platform to hotels or caterrings to share their leftover food to the organizations who are involved in providing food to the needy ones. This will help to save  some amount of money for the organization which they can use in other activities. </p>
            </div>
            <div class="col-md-1 align-self-center" >
            <div class="hideright"><i class="fa fa-angle-right fa-5x" aria-hidden="true" style="color: green;padding-bottom: 20px;"></i></div>
            <div class="hide"><i class="fa fa-angle-down fa-5x hide" aria-hidden="true" style="color: green; padding-bottom: 20px;"></i></div>
            </div>
            <div class="col-md-3 item text" >
              <i class="fa fa-home fa-5x d-flex justify-content-center" aria-hidden="true" style="color: green; padding-bottom: 20px;"></i>
                <h3 style="text-align:center;">Provide Food</h3>
                <p >Snack Saver provides a platform to do something good for the people. It also helps organizations to connect with caterring and hotels so that can get provide food to the needy ones. </p>
            </div>

  </div>



 <!-- footer section -->
    <div class="container-fluid bg-dark footer" style="background-color: #343a40;">
        <div class="row">
            <div class="col-sm-4">
                <h3>Quick Menu</h3>
                <ul class="nav flex-column bg-dark">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="{{ route('login') }}">Login</a> -->
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>Contact Info</h3>
                <ul class="nav flex-column " >
                    <li class="nav-item"><a class="nav-link mt-0" href="#">imagenepal@gmail.com</a></li>
                    <li class="nav-item"><a class="nav-link mt-0" href="#">+977-9812345678</a></li>
                    <li class="nav-item"><a class="nav-link mt-0" href="#">Kathmandu</a></li>
                  
                </ul>
            </div>
            <div class="col-sm-3">
                <h3>Description</h3>
                <p style="padding-left:20px;">Contact Us through different social media</p>
                <ul class="nav justify-content-center ">
                    <li class="nav-item"><a href="#"><i class="fa fa-facebook fa-1x"></i></a> </li>
                    <li class="nav-item ml-5"><a href="#"><i class="fa fa-instagram fa-1x"></i></a></li>
                    <li class="nav-item ml-5"><a href="#"><i class="fa fa-twitter fa-1x"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="last">
                    <h3 style="font-size:1.2vw;">Copyright 2019 @ ImageNepal || Ishwor Paudel </h3>
                </div>
            </div>
        </div>
      </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

