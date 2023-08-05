<?php

$product = array();
$products = array( array());
// session_id("husamodat");
session_start();

$added_ProductName = "";
    $added_Model = "";
    $added_Brand = "";
    $added_Color = "";
    $added_Condition = "";
    $added_Price = "";
    $added_Category = "";

if (isset($_POST["ProductName"]) && isset($_POST["Model"]) && isset($_POST["Brand"]) 
        && isset($_POST["Color"]) && isset($_POST["Condition"]) && isset($_POST["Price"])
        && isset($_POST["Category"])){

    $added_ProductName = $_POST["ProductName"];
    $added_Model = $_POST["Model"];
    $added_Brand = $_POST["Brand"];
    $added_Color = $_POST["Color"];
    $added_Condition = $_POST["Condition"];
    $added_Price = $_POST["Price"];
    $added_Category = $_POST["Category"];
        }
        $image=$_FILES["fileToUpload"]["name"]; 
            $img="./img/".$image;

        $mydate = new DateTime();
        echo'<br>';
        
        $now = $mydate->format('H:i:s Y-m-d');
        // echo $now;

        // echo'<br>';
        // echo'<br>';

        $_SESSION['products'][] = array(
          'product_add_time' => $now,
          'product_name' => $added_ProductName,
          'product_model' => $added_Model,
          'product_brand' => $added_Brand,
          'product_color' => $added_Color,
          'product_condition' => $added_Condition,
          'product_price' => $added_Price,
          'product_category' => $added_Category,
          'product_img' => $img,

          
      );
      // print_r($_SESSION);
    //     echo $added_ProductName;
        
    
    // array_push($product,$added_ProductName,$added_Model,$added_Brand,$added_Color,$added_Condition,$added_Price,$added_Category);
    // // array_push($product,$added_ProductName);
    // array_push($products,$_POST);
    // // print_r($_POST);
    // echo"<br>";
    // print_r($products);

    // print session_id();

    // echo"<br>";
    // // print_r($products);
        
    // $_SESSION ["Model"]= $added_Model;
    // $_SESSION ["Brand"]= $added_Brand;

    
    // print_r($_SESSION);

    $target_dir = "./img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
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
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


    ?>







<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <style>
        input{
            margin-bottom: 5%;
        }

        .container-div{
            margin: 10% 20% ; padding: 0% 10% 10% 10%; border: 5px solid gray; border-radius: 10%;
            
        }
        
        table, th, td {
        border: 5px solid;
        }

        #container-div-table{
            margin: 5% ; 
            padding: auto ;
            width: 90%;
            border: 5px solid gray; 
            border-radius: 10%;
        }

        td img{
          width: 50px;
          height: 50px;
        }

        table {
            width: 90%;
          }
          #logo{
            height: 40px;
            
          }

          #logo-footer{
            height: 50px;
          }
          #hero{
            width: 100%;
            height: 57%;
            background-image: url("./img/background.png");
            background-size: cover;
            /* background:#232223; */
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            
          }

          #linkdiv{
            height: 10%;
            display: flex;
            justify-content: center;
            margin-top:5%;
            border-radius: 10%;
            
          }
          /* body{
            background:#232223;
            color:white;
          } */
    </style>
  </head>
  <body>
    <!-- ====================START NAV BAR ======================================================= -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img id="logo" src="./img/icon.png" alt="logo" srcset=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-tarP$_POST="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="#addproduct">Add Product</a>
            <a class="nav-item nav-link " href="#products">Products Table</a>
            <a class="nav-item nav-link" href="products.php">Products Page</a>
            <a class="nav-item nav-link" href="#footer">Footer</a>
            
          </div>
        </div>
      </nav>
<!-- ==========================END NAV BAR======================================================================================= -->

<div id="hero">
  <!-- <img src="./img/background.png" alt="" srcset=""> -->
  
</div>

<div id="linkdiv">
<a style=" padding:0 20%; " href="products.php"><button type="button" class="btn btn-dark">Go To Products Page</button></a>
</div>

<div class="container-div" >
<div >
    <img src="./img/shop.png" style="width: 100%;" >
</div>


<div id="addproduct">
<form action="home.php" method="POST" enctype="multipart/form-data" >
    <div >
        <label for="ProductName" >Product Name</label>
        <div >
          <input type="text" name="ProductName" class="form-control" id="ProductName" placeholder="ProductName">
        </div>
      </div>

      <div >
        <label for="Model" >Model</label>
        <div >
          <input type="text" name="Model" class="form-control" id="Model" placeholder="Model">
        </div>
      </div>

      <div >
        <label for="Brand">Brand</label>
        <div >
          <input type="text" name="Brand" class="form-control" id="Brand" placeholder="Brand">
        </div>
      </div>

      <div >
        <label for="Color">Color</label>
        <div >
          <input type="text" name="Color" class="form-control" id="Color" placeholder="Color">
        </div>
      </div>

      <div >
        <label for="Condition">Condition</label>
        <div >
          <input type="text" name="Condition" class="form-control" id="Condition" placeholder="Condition">
        </div>
      </div>

      <div >
        <label for="Price">Price</label>
        <div >
          <input type="text" name="Price" class="form-control" id="Price" placeholder="Price">
        </div>
      </div>







      <fieldset class="form-group">
        <div >
          <legend class="col-form-label col-sm-2 pt-0">Category:</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Category" id="Clothing" value="Clothing" checked>
              <label class="form-check-label" for="Clothing">
                Clothing
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="Category" id="Electronics" value="Electronics">
              <label class="form-check-label" for="Electronics">
                Electronics
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="Category" id="Crafts" value="Crafts" >
              <label class="form-check-label" for="Crafts">
                Crafts
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="Category" id="Art" value="Art" >
              <label class="form-check-label" for="Art">
                Art
              </label>
            </div>
          </div>
        </div>
      </fieldset>



      <div class="form-group">
        <label for="productsphoto">Up load product's photo</label>
        <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
      </div>

      
      <div class="form-group">
        <div>
          <button type="submit" class="btn btn-primary">Add Product</button>
          <a style=" padding:0 20%; " href="products.php"><button type="button" class="btn btn-dark">Go To Products Page</button></a>
        </div>
        </div>


</form>
</div>
</div>


<div id="container-div-table" >
    <table id="products" class="table-responsive" style="border: 2px solid gray; text-align: center; padding: 5%; margin: 5%;">
        <thead>
            <tr>
                <th>Time & Date </th>
                <th>Product Name </th>
                <th>Model </th>
                <th>Brand </th>
                <th>Color </th>
                <th>Condition </th>
                <th>Price </th>
                <th>Category </th>
                <th>Photo </th>
            </tr>

        </thead>

        <tbody>
        <?php
        foreach ($_SESSION['products'] as $product){
            echo  "<tr>";
            
            
            echo    "<td>". $product ['product_add_time'] . "</td>";
            echo    "<td>". $product ['product_name']. "</td>";
            echo    "<td>". $product ['product_model'] . "</td>";
            echo    "<td>". $product ['product_brand'] . "</td>";
            echo    "<td>". $product ['product_color'] . "</td>";
            echo    "<td>". $product ['product_condition'] . "</td>";
            echo    "<td>". $product ['product_price'] . "</td>";
            echo    "<td>". $product ['product_category'] . "</td>";
            echo    '<td><img src="' . $product['product_img'] . '"></td>';
            

            
            
            
            // echo '<img src= "upload/".$img>';

                
               
            echo  "</tr>";
            // echo    "<img src='$img'>";

          }
            ?>

            <tr>
                <!-- <td>$now</th>
                <td>$added_ProductName </th>
                <td>$added_Model </th>
                <td>$added_Brand </th>
                <td>$added_Color </th>
                <td>$added_Condition </th>
                <td>$added_Price </th>
                <td>$added_Category </th> -->
               
            </tr>
            
          

        </tbody>
        
    </table>
    <a  href="products.php"><button type="button" class="btn btn-dark btn-block">Go To Products Page</button></a>


</div>






 <!-- =======================footer START===========================================================       -->
<footer class="bg-light text-center text-white" id="footer">
    <!-- Grid container -->
    <div class="container pb-0">
    <section class="mb-4">
    <img id="logo-footer" src="./img/icon.png" alt="logo" srcset="" >
        </section>
      <!-- Section: Social media -->
      <section class="mb-4">
      
        <!-- Facebook -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #3b5998;"
          href="https://web.facebook.com/husam0dat/"
          role="button"
          ><i class="fa fa-facebook"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #55acee;"
          href="#!"
          role="button"
          ><i class="fa fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #dd4b39;"
          href="mailto:husamaldean.odat@gmail.com"
          role="button"
          ><i class="fa fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #ac2bac;"
          href="https://www.instagram.com/husam0dat/"
          role="button"
          ><i class="fa fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #0082ca;"
          href="https://www.linkedin.com/in/husam-odat-b6312127a/"
          role="button"
          ><i class="fa fa-linkedin"></i
        ></a>
        <!-- Github -->
        <a
          class="btn text-white btn-floating m-1"
          style="background-color: #333333;"
          href="https://github.com/Husam-Odat"
          role="button"
          ><i class="fa fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">DBMarket.com</a>
    </div>
    <!-- Copyright -->
  </footer>



  <!-- =======================footer END===========================================================       -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
       
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>