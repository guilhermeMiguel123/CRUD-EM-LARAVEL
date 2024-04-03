@include('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Minha Aplicação</title>
    
</head>
<body>
    <div class="container">
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/logo.png" alt="">
                    <span>CruD</span>
                </a>
            </div>
         </header>

       

        <main id="main">
    <section class="breadcrumbs">
      <div class="container">
          <h2>Bem-vindo à minha aplicação de controle de clientes e assistências.</h2>
      </div>
    </section>

    <section class="inner-page">
      <div class="container">
  
        <p>Nossa plataforma foi projetada para facilitar o controle e o acompanhamento das assistências prestadas pela sua assistência técnica.</p>
      </div>
    </section>
 

    <footer id="footer" class="footer">

        <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h4>Com a nossa CRUD (Create, Read, Update, Delete), você pode adicionar, visualizar, atualizar e excluir assistências de forma eficiente e organizada.</h4>
                
            </div>
            </div>
        </div>
        </div>

        <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a>
                <img src="assets/img/logo.png" alt="">   
                </a>
            </div>
            </div>
            @yield('content')
        </div>
        </div>

        <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        <footer>
            <p>&copy; 2024 Minha Aplicação. Todos os direitos reservados.</p>
            <p>Desenvolvido por <a href="https://github.com/guilhermeMiguel123">Guilherme Miguel</a></p>
        </footer>
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        </div>
</footer><!-- End Footer -->

</main>
       
    </div>

    <script src="/assets/js/app.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
