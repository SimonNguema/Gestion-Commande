
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FlexStart Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('layouts.header')

    
<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
     
       
            
        <header class="section-header" style="margin-bottom: 5px;">
         
          <p>Contactez-nous</p>
        </header>
          
      
    </div>

    
  </footer><!-- End Footer -->

  <style>
    body{
    margin-top:20px;
    background: #f6f9fc;
}
.account-block {
    padding: 0;
    background-image: url('https://img.freepik.com/photos-premium/rump-steak-fourche-fond-bois-fonce-image-verticale-vue-dessus-place-pour-texte_114941-7069.jpg?size=626&ext=jpg&ga=GA1.2.925752488.1689266416&semt=sph');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}

input {
    margin-top: 15px;
}
textarea{
    margin-top: 15px;
}
  </style>

  

  <main id="main">
   

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 font-weight-bold text-theme">Avez-vous des questions? </h3>
                                        </div>
        
                                      
                                        <form action="{{ route('contact.envoyerMessage') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                               
                                                <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Votre nom" required>
                                            </div>
                                            <div class="form-group">
                                               
                                                <input type="email" name="email"  class="form-control" id="exampleInputEmail1" placeholder="@exemple.com" required>
                                            </div>
                                            <div class="form-group">
                                               
                                                <input type="text" name="sujet" class="form-control" id="exampleInputEmail1" placeholder="Votre Sujet" required>
                                            </div>
                                            <div class="form-group mb-5">

                                                
                                                <textarea class="form-control" name="message" rows="6" placeholder="Votre Message" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-theme">Envoyer</button>
                                            
                                        </form>
                                    </div>
                                </div>
        
                                <div class="col-lg-6 d-none d-lg-inline-block">
                                    <div class="account-block rounded-right">
                                        <div class="overlay rounded-right"></div>
                                        <div class="account-testimonial">
                                            <h4 class="text-white mb-4">TELEPHONE: +221771086691</h4>
                                            <p class="lead text-white">"ADRESSE: Avenue 253, Pointe Almadies, Dakar Senagal "</p>
                                            <a href="#"><p>saucecreoldakar@gmail.com</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
                        <!-- end card-body -->
                    </div>
                   
        
                </div>
                <!-- end col -->
            </div>
            <!-- Row -->
        </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Simon</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="#">Simon</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
