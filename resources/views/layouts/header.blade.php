
<header>
  <!-- Navbar -->


  <style>
    /* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon,
.navbar-scroll .navbar-brand {
  color: #fff;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler-icon,
.navbar-scrolled .navbar-brand {
  color: #fff;
}

/* Color of the navbar AFTER scroll */
.navbar-scroll,
.navbar-scrolled {
  background-color: #cbbcb1;
}

.mask-custom {
  backdrop-filter: blur(5px);
  background-color: #fff;
  
}

.navbar-brand {
  font-size: 1.75rem;
  letter-spacing: 3px;
}
  </style>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <div class="container">
      <a class="navbar-brand" href="#!"><span style="color: #5e9693;">Creol</span><span style="color: #fff;">FOOD</span></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Acceuil</a>
          </li>  

           <li class="nav-item">
            <a class="nav-link" href="{{ route('allcategories') }}"><i class="fa-solid fa-list-check"></i>Categorie
</a>
          </li>  

          <li class="nav-item">
            <a class="nav-link" href="{{ route('panier.index') }}"><i class="fa-solid fa-cart-shopping"></i>Panier</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('apropos') }}"><i class="fas fa-info-circle"></i>
A propos</a>
          </li>


           <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i>

Contactez-nous</a>
          </li>
         

          

        </ul>

        @if(Session::has('success'))
         <div class="alert alert-success">
        {{Session::get('success',)}}
     </div>
      @endif
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>

           @guest
           <li class="nav-item">
            <a class="nav-link" href="{{ route('connexion') }}"><i class="fa-solid fa-user-check"></i>Connexion</a>
          </li>
          @endguest
          

          @auth
           <li class="nav-item">
            <a class="nav-link" href="{{ route('connexion') }}"><i class="fa-solid fa-user-check"></i>{{Auth::user()->name}}</a>
          </li>
          @endauth
          
         @auth
          <li class="nav-item">
            <form action="{{ route('deconnexion') }}" method="POST">
              @csrf
              <button type="submit" class="nav-link btn btn-link">Déconnexion</button>
            </form>
          </li>
        @endauth

        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->


</header>