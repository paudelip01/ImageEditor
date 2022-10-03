<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Nepal</title>
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


<div class="wrapper">
    <div class="sidebar" style="background: #343a40!important;">
        <h2><a href="index.html" class="nav-link" style="color:  white">Image Nepal</a></h2>
        <ul>

 <li><button class="dropdown-btn"><i class="fa fa-picture-o" aria-hidden="true"></i> Select Image 
    <!-- <i class="fa fa-caret-down"></i> -->
              </button>
              <div class="dropdown-container">
                        

                      <a>  <p>
<!-- <div style="height:0px;width:300px;background-color: transparent;"> -->

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"  >
    <label >
    <input type="file" name="fileToUpload" id="fileToUpload" >
    Browse Image
</label>
    <input type="submit" value="Upload Image" name="submit" style="background-color: black; color: white;">
    </form>
                        </p></a>

             </li>      

          
            

                        
                    <li><button class="dropdown-btn"><i class="fa fa-adjust"></i> Adjust Color 
    <!-- <i class="fa fa-caret-down"></i> -->
              </button>
              <div class="dropdown-container">
                <form id="imageEditor">


          <p>
            <label for="gs">Grayscale</label>
            <input id="gs" name="gs" type="range" min=0 max=100 value=0>
          </p>

          <p>
            <label for="blur">Blur</label>
            <input id="blur" name="blur" type="range" min=0 max=10 value=0>
          </p>
          <p>
            <label for="huer">Hue Rotate</label>
            <input id="huer" name="huer" type="range" min=0 max=360 value=0>
          </p>

           <p>
            <label for="invert">Invert</label>
            <input id="invert" name="invert" type="range" min=0 max=100 value=0>
          </p>
            
            <p>
            <label for="sepia">Sepia</label>
            <input id="sepia" name="sepia" type="range" min=0 max=100 value=0>
          </p>

           <input type="reset" form="imageEditor" id="reset" value="Reset"  class="btn btn-outline-danger" style="margin-left: 50px; margin-bottom: 10px;" />
            </form>
          </div>
        </li>


<li><button class="dropdown-btn"><i class="fa fa-sun-o"></i> Exposure 
    <!-- <i class="fa fa-caret-down"></i> -->
              </button>
              <div class="dropdown-container">
                <form id="imageEditors">

          

          <p>
            <label for="br">Brightness</label>
            <input id="br" name="br" type="range" min=0 max=200 value=100>
          </p>

          <p>
            <label for="ct">Contrast</label>
            <input id="ct" name="ct" type="range" min=0 max=200 value=100>
          </p>

          

          <p>
            <label for="opacity">Opacity</label>
            <input id="opacity" name="opacity" type="range" min=0 max=100 value=100>
          </p>

         

          <p>
            <label for="saturate">Saturate</label>
            <input id="saturate" name="saturate" type="range" min=0 max=500 value=100>
          </p>

           <input type="reset" form="imageEditors" id="reset" value="Reset"  class="btn btn-outline-danger" style="margin-left: 50px; margin-bottom: 10px;"/>
</form>
</div>
</li>



        <li class="nav-item undo" style="margin-top: 0!important;" ><a href="#" onclick="transform()"><i class="fa fa-repeat" aria-hidden="true"" ></i> Rotate</a></li>


        </ul> 
        
    </div>

</div>


    <?php 
if(isset($_POST["submit"])) {
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 // echo $_POST["fileToUpload"]; 
// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    // echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file sizeof()
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //  n
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
</div>
</div>
</div>
</div>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/html2canvas.js"></script>

        <script>
            var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
   

    // function transform90() {
    //  var value = document.getElementById('img').style.transform;
    //  if(value == 'rotate(0deg)')
    // document.getElementById('img').style.transform = 'rotate(90deg)';
    //  else
    // document.getElementById('img').style.transform = 'rotate(0deg)';

    //  // body...
    // }

    // function transform270() {
    //  var value = document.getElementById('img').style.transform;
    //  if(value == 'rotate(0deg)')
    // document.getElementById('img').style.transform = 'rotate(270deg)';
    //  else
    // document.getElementById('img').style.transform = 'rotate(0deg)';

    //  // body...
    // }
        </script>
        <!-- Google Analytics Tracking Code -->
        <!-- <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-58515343-1', 'auto');
            ga('send', 'pageview');
        </script> -->

        <button onclick="doCapture();"" style="margin-left:50%; height: 60px; width: 130px;" class="btn btn-outline-danger">Save</button>
   <div id="imageContainer" class="center" >

                <img id="img" src="<?php if($target_file!=null || $target_file!=null){ echo $target_file;}else{echo null;} ?>" style="background:url(images/trans-tile.png) left top;height:600px;width:600px;margin-left: 40%; margin-top: 80px; position: fixed; "/>
            </div>

          

    </body>
</html>





