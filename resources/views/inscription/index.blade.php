<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/fa96f6bb6f.js" crossorigin="anonymous"></script>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <title>Page inscription</title>
    



    !-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
       
     
        <script src="https://kit.fontawesome.com/fa96f6bb6f.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">





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



  <!--Main Navigation-->
  <header >
    <style>
      #intro {
        background-image: url(https://www.sogeres.fr/wp-content/uploads/2018/01/sogeres-repas-convivial-ensemble.jpg);
       
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      } 

      form{
        margin-bottom: 50px;
      }

      form h2{
        text-align: center;
        padding-bottom: 50px;
      }

    </style>


      @include('layouts.header')
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container" style="margin-top: 160px;  ">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded-5 shadow-5-strong p-5" action="{{ route('inscription.enregistrer') }}" method="POST">
                   @csrf
                <h2 class="fw-bold mb-2 text-uppercase">Inscrivez-vous</h2>
               <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example1" class="form-control" name="name" />
                    <label class="form-label" for="form1Example1">Nom</label>
                </div>
                

                
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="form1Example2" class="form-control" name="email" />
                    <label class="form-label" for="form1Example2">Adresse e-mail</label>
                </div>

               <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="form1Example3" class="form-control" name="password" />
                    <label class="form-label" for="form1Example3">Mot de passe</label>
                </div>

                

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Mot de passe oubie?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>

                <!--Footer-->
  <footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
      <a role="button" class="btn btn-primary btn-lg m-2"
        href="{{ route('connexion') }}">
        Connectez-vous ici si vous etes deja inscrit
      </a>
    
    </div>

    <hr class="m-0" />

  </footer>
  <!--Footer-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->



  </header>
  <!--Main Navigation-->

  
</body>
</html>
