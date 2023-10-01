<!DOCTYPE html>
<html lang="en">

   
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panier</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
       
     
        <script src="https://kit.fontawesome.com/fa96f6bb6f.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">







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



<!-- Lien Modal -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    </head>

<body>
   
@include('layouts.header')




<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            
        <header class="section-header" style="margin-top: 65px;">
         
          <p>Votre Panier</p>
        </header>
           
          </div>
         
        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->


  <section class="h-100" style="color: #444444;">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    

                    @if ($paniers->isEmpty())
                    <div class="alert alert-info" role="alert" style="text-align: center">
                       <h4>Votre panier est vide</h4>
                       <img src="https://www.icone-png.com/png/13/13336.png" alt="">
                       Veillez ajouter des produits <a href="{{route('categories')}}">ici<i class="bi bi-arrow-right"></i></a>
                    </div>
                    @else
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h3 class="fw-normal mb-0 text-black">Produits ajoutes</h3>
                      
                  </div>
                    @foreach ($paniers as $panier)
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{ $panier->produits->image }}" class="img-fluid rounded-3"
                                        alt="{{ $panier->produits->nom }}">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">{{ $panier->produits->nom }}</p>
                                    <p><span class="text-muted"> {{ $panier->produits->description }}</span>
                                    </p>
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                    <input id="form1" min="0" name="quantity" value="{{ $panier->quantite }}"
                                        type="number" class="form-control form-control-sm" />

                                    <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">{{ $panier->produits->prix }}</h5>
                                </div>
                                 <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <form action="{{ route('panier.supprimer') }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit du panier ?')">
                @csrf
                <input type="hidden" name="product_id" value="{{ $panier->produits->id }}">
                
                <button type="submit" class="btn btn-link text-danger"><i class="fas fa-trash fa-lg"></i></button>
                
                
            </form>

            <form action="{{ route('commande.index', $panier->id) }}" method="POST" onsubmit="return">
                @csrf
                
                
                
                <button type="submit" class="btn btn-outline-warning btn-lg ms-3"><i class="bi bi-cart-plus"></i> </button>
                
            </form>
        </div>
                            </div>

                            
                        </div>
                    </div>
                    @endforeach
                    @endif

                    <!-- Autres éléments HTML du panier -->
                 
                    
                    @if (!$paniers->isEmpty())
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-warning btn-block btn-lg">Proceder au paiement</button>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SimonNguema</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="#">@Simon</a>
      </div>
    </div>
  </footer><!-- End Footer -->



 <!-- Modal -->
      <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
</html>






