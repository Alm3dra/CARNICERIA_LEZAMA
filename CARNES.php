<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
<style>
body{
    background-image: url(images/fondoeb.png);
    background-size: 100vw 100vh;
    background-attachment: fixed;
    margin: 0;
    font-family: sans-serif;
}
</style>
    <title>PRODUCTOS:CARNES</title>

  </head>
  <body>
<!-- SLIDER -->


 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 85vh">
      <img class="d-block w-100" src="images/2.jpg">
       <div class="carousel-caption d-none d-md-block">
    <h1 class="display-1" ><strong>CARNICERÍA LEZAMA</strong></h1>
    <p>Más de 20 años a su servicio</p>
  </div>
    </div>
    <div class="carousel-item" style="height: 85vh">
      <img class="d-block w-100 img-fluid" src="images/1.0.png" alt="Responsive image">
       <div class="carousel-caption d-none d-md-block">
    <h1 class="display-1" ><strong>EXPERIENCIA</strong></h1>
    <p>Tenemos la experincia que usted necesita para brindarnos su total confianza </p>
  </div>
    </div>
    <div class="carousel-item" style="height: 85vh">
      <img class="d-block w-100" src="images/3.0.png" alt="Third slide Responsive image">
       <div class="carousel-caption d-none d-md-block">
    <h1 class="display-1" ><strong>CALIDAD</strong></h1>
    <p>Nuestra carne es seleccionada para ser la mejor y asi brindarle un mejor producto</p>
  </div>
    </div>
    <div class="carousel-item" style="height: 85vh">
      <img class="d-block w-100" src="images/2.0.png">
       <div class="carousel-caption d-none d-md-block">
    <h1 class="display-1" ><strong>LA MEJOR</strong></h1>
    <p>Sin duda la mejor opción</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" id="lista" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- MENU -->
<nav class="navbar navbar-expand-lg sticky-top navbar navbar-dark" style="background:  linear-gradient(#000000, #3C1212,#4C4040,#726C6C)">
   <!--LOGO-->
    <a class="navbar-brand d-xl-none d-dm-none d-sm-block" href="#">
    <img src="images/elbueno.png" width="220" height="70" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
  <a class="nav-link" href="#">NOSOTROS</a>
</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCTOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="PRODUCTOS.html#">CARNES</a>
          <a class="dropdown-item" href="#">PRODUCTOS VARIOS</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
    <!--LOGO-->
    <a class="navbar-brand d-sm-none d-xl-block d-dm-block" href="#">
    <img src="images/elbueno.png" width="220" height="70" class="d-inline-block align-top" alt="">
  </a>
<!--Otro ul-->
 <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SESIÓN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">INICIAR SESIÓN</a>
          <a class="dropdown-item" href="#">REGISTRATE</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
       <li class="nav-item">
  <a class="nav-link" href="#">CARRITO</a>
</li>
    </ul>
  </div>
</nav>
<font size="8" face="Cooper Black" color=#2D0808>
<section><p class="mt-5 pt-4 text-center font-weight-bold " style="text-shadow: 7px 5px 10px gray">CARNES<br><br></p></section>
</font> 


<!-- PRODUCTOS -->
<section class="container"> 
<div class="card-deck">
  <div class="card">
    <img class="card-img-top img-fluid" src="images/chicharron.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
     <div class="card-footer">
      <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>
  </div>

<?php 
  
  include 'conexion.php';
  $re=mysql_query("select*from productos")or die(mysql_error());
  while ($f=mysql_fetch_array($re)) {


?>

  <div class="card">
    <img alt="Card image cap" class="card-img-top img-fluid" src="images/<?php echo $f ['imagen']; ?> "> <br> 


    <div class="card-body">
      <h5 class="card-title"> </h5>
      <p class="card-text" ./detalles.php ></p>
      </div>
      <?php

       }
    ?>
    
     <div class="card-footer">
     <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>

  </div>

  <div class="card">
    <img class="card-img-top img-fluid" src="images/espinazo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title" ><?php echo $f['nombre'];?></h5>
      <p class="card-text"> This is a wider card with supporting text below as a natural lead-in to additional cLorem  ggggggggggggggggggggontent. This card has even longer content than the first to show that equal height action.</p>
       </div>
      <div class="card-footer">
     <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>
    </div>
</div>
</section>

<section class="container"> 
<div class="card-deck">
  <div class="card">
    <img class="card-img-top img-fluid" src="images/chicharron.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
     <div class="card-footer">
      <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top img-fluid" src="images/costilla.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
     <div class="card-footer">
     <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top img-fluid" src="images/espinazo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional cLorem  ggggggggggggggggggggontent. This card has even longer content than the first to show that equal height action.</p>
       </div>
      <div class="card-footer">
     <a class="btn btn-primary" href="#" role="button">Link</a>
    </div>
    </div>
</div>
</section>

 <p ><br> <br> <br> <br></p>

<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5"style="background-color: #0C0000; ">

<font  color="white">
  <div style="background-color: #5A0E0E; ">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">¡La mejor carniceria en todo el pueblo!</h6>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5"style="background-color: #0C0000; ">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">CARNICERÍA LEZAMA<br></h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <font size="2" color="white">
        <p>Más de 20 años a su servicio, contamos con altas disciplinas en la higiene y calidad del producto
         para que usted se sienta saticfecho con nuestros productos</p>
        </font>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h7 class="text-uppercase font-weight-bold">PRODUCTOS</h7>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="text-secondary" href="#!">CARNES</a>
        </p>
        <p>



          
          <a class="text-secondary" href="#!">PRODUCTOS VARIOS</a>
        </p>
          </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h7 class="text-uppercase font-weight-bold">¡COMPRA YA!</h7>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="text-secondary" href="#!">CARRITO</a>
        </p>
          </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
         <h7 class="text-uppercase font-weight-bold">¡CONTACTANOS!</h7>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> <BR>Avenida Nicolas Bravo #36, sección cuarta,Zacatelco Tlaxcala</p>
        <p>
          <i class="fas fa-phone mr-3"></i>Telefono fijo: 49-7-47-54</p>
        <p>
          <i class="fas fa-print mr-3"></i>Telefono movil: 246-191-8748</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-white-50 py-3">Elaborado por:
    <a class="text-secondary" href="#"> Brenda Lezama Gutiérrez</a>
  </div>
  <!-- Copyright -->
</font>
</footer>
<!-- Footer -->

<!--MÁS
<div class="row">
  <div class="col-sm-2">
    <div class="dropdown open">
  <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu3" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
   
  </button>
  <div class="dropdown-menu">
   <a class="dropdown-item" href="#!">RENTA</a>
    <a class="dropdown-item" href="#!">COMPRA</a>
    <a class="dropdown-item" href="#!">CONTACTO</a>
  </div>
</div>
  </div>
  <div class="col-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-light  navbar-dark bg-dark ">
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto nav flex-column">
          <li class="nav-item active">
            <a class="d-flex justify-content-start d-flex flex-wrap align-content-around nav-link" href="#">RENTA<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="d-flex justify-content-start d-flex flex-wrap align-content-around nav-link" href="#">COMPRA</a>
          </li>
          <li class="nav-item">
            <a class="d-flex justify-content-start d-flex flex-wrap align-content-around nav-link" href="#">CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>-->

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>