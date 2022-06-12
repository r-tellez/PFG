<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<footer class="footer-section set-bg" style="background-image: url('images/bg_fondo01.jpg'); padding-left:1em;" >
    <div class="footer-warp">
        <div class="footer-widgets">
            <div class="row" style="margin-right:0em;">
                <div class="col-xl-7 col-lg-7">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="footer-widget about-widget">
                                <div class="footer-widget list-widget">
                                    <h5 class="fw-title" style="color:#f59aad">Web</h5>
                                    <dl>
                                        <dt><a href="index.php">Inicio</a></dt>
                                        <dt><a href="about.php">Historia</a></dt>
                                        <dt><a href="services.php">Servicios</a></dt>
                                        <dt><a href="contact.php">Contacto</a></dt>
                                    </dl>
                                </div>
                                <div>
                                    <?php
                                    $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus' ");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($ret)) {
                                    ?>
                                        <p>
                                            <?php echo substr($row['PageDescription'], 0, 199); ?>...
                                        </p>
                                    <?php } ?>
                                </div>

                            </div>
                            <!--                             <div class="fw-social" style="color:#f59aad">
                                <a href="https://www.instagram.com/laura.peluqueria.estetica"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.facebook.com/Laura-peluquer%C3%ADa-since-1969-2322146051388956/"><i class="fa fa-facebook"></i></a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 offset-xl-2 offset-lg-1 offset-md-0">
                        <center>
                            <img src="images/logo2.png" alt="" width="30%">
                            <h5 class="fw-title logo" style="color:#f59aad">Laura Peluquería</h5>
                        </center>
                        <center>
                            <div style="color:#fff" class="fw-title logo">
                                <?php
                                $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                                $cnt = 1;
                                while ($row = mysqli_fetch_array($ret)) {
                                ?>
                                    <dl>
                                        <span class="timetable-card"> <?php echo $row['PageDescription']; ?></span>
                                        </dt>
                                        <dt class="icon icon-phone">
                                            <span class="timetable-card"> +34 <?php echo $row['MobileNumber']; ?></span>
                                        </dt>
                                        <dt class="icon icon-envelope">
                                            <span class="timetable-card"> <?php echo $row['Email']; ?></span>
                                        </dt>
                                        <dt><i class="fa fa-instagram"></i></dt>
                                    </dl>
                                <?php } ?>
                            </div>
                        </center>

                    </div>
                    <div class="fw-social" style="color:#f59aad">
                        <a href="https://www.instagram.com/laura.peluqueria.estetica">
                            <i class="fa-instagram-square"></i>
                        </a>
                        <a href="https://www.facebook.com/Laura-peluquer%C3%ADa-since-1969-2322146051388956/">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 offset-xl-1 offset-lg-0 offset-md-0">
                <div class="col-lg-6">
                    <!-- 	                    <center>
	                        <img src="images/clock.png" alt="" width="25%">
	                    </center> -->
                    <h5 class="ts-title" style="color:#f59aad">Horario</h5>
                    <div class="timetable-card">
                        <dl>
                            <dt><span>Lunes:</span> 09.30-19.00</dt>
                            <dt><span>Martes:</span> 09.30-19.00</dt>
                            <dt><span>Miércoles:</span> 10.00-19.00</dt>
                            <dt><span>Jueves:</span> 09.30-19.00</dt>
                            <dt><span>Viernes:</span> 09.30-17.00</dt>
                            <dt><span>Sábado:</span> 09.30-19.00</dt>
                            <dt><span>Domingo:</span> Cerrado</dt>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
               <center>
                    <div class="copyright">
                        <p>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | Realizado por <a href="https://www.linkedin.com/in/cinthia-tellez/" target="_blank">Rebeca Téllez Castañeda</a>
                        </p>
                    </div>
                </center>
            </div>
        </div>
</footer>

</html>
<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>