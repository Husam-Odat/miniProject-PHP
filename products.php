<?php
session_start();


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
            margin: 5%  ; padding: 5% ; border: 5px solid gray; border-radius: 10%;
            
        }
        
        /* table, th, td {
        border: 5px solid;
        } */

        /* #container-div-table{
            margin: 5% ; 
            padding: auto ;
            width: 90%;
            border: 5px solid gray; 
            border-radius: 10%;
        } */
        .card{
            width: 15rem !important;
            margin-bottom:3% ;
        }
        img{
            /* width: 100%; */
            height: 25%;
        }
        #logo{
            height: 40px;
            
          }

          #logo-footer{
            height: 50px;
          }
        #hero1{
            width: 100%;
            height: 57%;
            background-image: url("./img/background.png");
            background-size: cover;
            /* background:#232223; */
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;


         
            
          }
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
            <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="#addproduct">Add Product</a>
            <a class="nav-item nav-link " href="#products">Products Table</a>
            <a class="nav-item nav-link" href="products.php">Products Page</a>
            <a class="nav-item nav-link" href="#footer">Footer</a>
            
          </div>
        </div>
      </nav>
<!-- ==========================END NAV BAR======================================================================================= -->
<div id="hero1">
  
  </div>


<div class="container-div" style="display: flex; flex-direction: row; flex-wrap: wrap; gap: 3%; justify-items: center; align-items: center; justify-content: center; align-content: center;" >

    <!-- ==========================Start card 1======================================================================================= -->
    <!-- <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div> -->
<!-- ========================== end card 1======================================================================================= -->
     



<?php
        foreach ($_SESSION['products'] as $product){
         echo   '<div class="card" style="width: 18rem;">
        <img class="card-img-top" src="' . $product['product_img'] . '" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">'.$product ['product_name'].'</h5>
          
        </div>
        <ul class="list-group list-group-flush" >
          <li class="list-group-item"><b>model : </b>'. $product ['product_model'] .'</li>
          <li class="list-group-item"><b>brand : </b>'. $product ['product_brand'] .'</li>
          <li class="list-group-item"><b>color : </b>'. $product ['product_color'] .'</li>
          <li class="list-group-item"><b>condition : </b>'. $product ['product_condition'] .'</li>
          <li class="list-group-item"><b>price : </b>'. $product ['product_price'] .' <b> JOD</b></li>
          <li class="list-group-item"><b>category : </b>'. $product ['product_category'] .'</li>
        </ul>
       
        
      </div>';
        }
        ?>
<!-- ========================== end card 1======================================================================================= -->
<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
<div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div> -->
<!-- ========================== end card 1======================================================================================= -->
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