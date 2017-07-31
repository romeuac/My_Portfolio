
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RomeuAC</title>

    <!-- bootstrap - local link -->
    <!--<link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/general_style.css" rel="stylesheet">


    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon//favicon-96x96.png">
    <link rel="manifest" href="img/favicon//manifest.json">
    <meta name="msapplication-TileImage" content="img/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--<script>
      $(document).ready(function(

        $('.carousel').carousel();

      ));
    </script>-->

  </head>
  <body>
  
    <!--FOOTER-->
    <?php
        include_once("menu.php");
    ?>


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border: 3px solid rgba(2, 31, 78, 0.7); "></li>
        <li data-target="#myCarousel" data-slide-to="1" style="border: 3px solid rgba(2, 31, 78, 0.7); "></li>
        <li data-target="#myCarousel" data-slide-to="2" style="border: 3px solid rgba(2, 31, 78, 0.7); "></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide img-fluid" src="img/Agile_Waterfall.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <!--<h1 style="color:black; padding: 40px 40px 0 0">Expérience dans les methodologies Agiles et Cascades.</h1>-->
              <!--<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
              <p><a class="btn btn-lg btn-primary" href="experience.php" role="button">Expériences professionnelles</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide img-fluid" src="img/Carousel_Formations.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <!--<h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
              <p><a class="btn btn-lg btn-primary" href="formation.php" role="button">Les Formations</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide img-fluid" src="img/index_connaissances.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <!--<h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
              <p><a class="btn btn-lg btn-primary" href="connaissances.php" role="button" style="padding-left:40px">Connaissances techniques</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row" >
        <div class="col-xs-12 col-md-12 col-lg-12">
          
        <h1 class="First_Title"><b>Principaux qualités</b></h1>
        </div>
      </div>

      <div class="row">

        <!-- Ser focado nas missões dadas, tratar aquilo como seu e dar o seu melhor-->
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/index_objective.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2 style="margin-bottom:20px">Sens du Résultat at Autonomie</h2>
          <p>Romeu a la capacité à détecter des opportunités potentielles et de mettre en œuvre les actions nécessaires pour les concrétiser, toujours en proposant d’actions pour renforcer la performance ou pour contourner les obstacles visant à atteindre l’objectif fixé. La confiance en soi, responsabilisation et autonomie sont présentes à son mode de travail</p>
          <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->

        <!-- Trabalhar bem em equipe e autonome-->
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/index_equipe.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2 style="margin-bottom:30px">Esprit d'équipe</h2>
          <p>Romeu a une grande facilité pour travailler avec les autres dû à une bonne capacité de communication. En partageant les connaissances parmi les membres de l'équipe, on va tous gagner ! Pendant son parcours il a pu pratiquer sa capacité de leadership, toujours avec le sens de l'écoute et à travers le sens du but à ses collègues</p>
          <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->


        <div class="col-lg-4">
          <img class="rounded-circle" src="img/index_coding.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2 style="margin-bottom:30px">Passionné et motivé</h2>
          <p>Quand on parle de technologie, Romeu est quelqu'un très curieux et proactif pour apprendre les nouvelles techniques, outils et façon de faire évoluer le monde à partir de l'informatique. La technologie et comment elle s'intègre aux divers domaines, soit du marché de travail ou de notre vie, lui motive à faire son mieux.</p>
          <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


       <!--

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>-->



      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php
        include_once("footer.php");
      ?>

    
  </body>
</html>
