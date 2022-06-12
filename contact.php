<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Contacto</title>


  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include_once('includes/header.php'); ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg-2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5">
          <h2 class="mb-0 bread">Contacto</h2>
          <!-- <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Contacto <i class="ion-ios-arrow-forward"></i></span></p> -->
        </div>
      </div>
    </div>
  </section>
  <section>
    <section class="contact-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 contact-content">
            <br>
            <h2 class="contact-title">Peluquería y Estética Laura</h2>
            <p>Ofrecemos los mejores servicios de peluquería en Vélez-Málaga con los mejores precios y el mejor trato.</p>
            <p>Servicios ofrecidos:</p>
            <ul>
              <li>Coloración</li>
              <li>Tinte</li>
              <li>Peinados</>
              <li>Alisado con ácido hialurónico</li>
              <li>Extensiones de cabello</>
              <li>y mucho más...</li>
            </ul>
            <br>
            <div class="ci-item">
              <?php
              $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
              $cnt = 1;
              while ($row = mysqli_fetch_array($ret)) {
              ?>
            </div>
          </div>
        <?php } ?>
        <div class="col-lg-6">
          <div class="appointment-wrap">
            <span class="subheading">Pide tu cita</span>
            <h3 class="mb-2">Cita</h3>
            <form action="#" method="post" class="appointment-form">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email" required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="services" id="services" required="true" class="form-control">
                        <option value="">Servicio</option>
                        <?php $query = mysqli_query($con, "select * from tblservices");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                          <option value="<?php echo $row['ServiceName']; ?>">
                            <?php echo $row['ServiceName']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-control appointment_date" placeholder="Fecha" name="adate" id='adate' required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-control appointment_time" placeholder="Hora" name="atime" id='atime' required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required="true" maxlength="10" pattern="[0-9]+">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Pide tu cita" class="btn btn-primary">
              </div>
            </form>
            <br>
          </div>
        </div>
        <br>
        </div>
    </section>

    <section class="contact-section bg-light">
      <div class="container">
        <div class="row no-gutters d-flex contact-info">
          <?php
          $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
          $cnt = 1;
          while ($row = mysqli_fetch_array($ret)) {
          ?>
            <div class="col-md-4 d-flex">
              <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-map-signs"></span>
                </div>
                <h3 class="mb-4">Dirección</h3>
                <p><a href="description"><?php echo $row['PageDescription']; ?></a></p>
              </div>
            </div>
            <div class="col-md-4 d-flex">
              <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-phone2"></span>
                </div>
                <h3 class="mb-4">Teléfono</h3>
                <p><a href="teléfono">+34 <?php echo $row['MobileNumber']; ?></a></p>
              </div>
            </div>
            <div class="col-md-4 d-flex">
              <div class="align-self-stretch box p-4 py-md-5 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="icon-paper-plane"></span>
                </div>
                <h3 class="mb-4">Email</h3>
                <p><a href="mailto:hola@hola.com"><?php echo $row['Email']; ?></a></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>



    <?php include_once('includes/footer.php'); ?>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
      </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>