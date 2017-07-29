
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RomeuAC</title>

    <!-- bootstrap - local link -->
    <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/general_style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link href="css/mdb.min.css" rel="stylesheet">


    <!--Favicon-->
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon//apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon//apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon//apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon//apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon//apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon//apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon//apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon//apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon//apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon//favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon//favicon-16x16.png">
    <link rel="manifest" href="img/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon//ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


  </head>
  <body>
  
    <!--FOOTER-->
    <?php
        include_once("menu.php");
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img class="first-slide" src="img/agile.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="img/data_image.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="img/data_image.gif" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
          
        <h1 class="First_Title">Principaux qualités</h1>
        </div>
      </div>

      <div class="row">

        <!-- Ser focado nas missões dadas, tratar aquilo como seu e dar o seu melhor-->
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/circle_focus.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Heading</h2>
          <p>.</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <!-- Trabalhar bem em equipe e autonome-->
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/data_image.gif" alt="Generic placeholder image" width="140" height="140">
          <h2>Autonomie et Esprit d'équipe</h2>
          <p>Romeu a une grande facilité pour travailler avec les autres dû à une bonne capacité de communication. En partageant les connaissances parmi les membres de l'équipe, on va tous gagner ! </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->


        <div class="col-lg-4">
          <img class="rounded-circle" src="img/data_image.gif" alt="Generic placeholder image" width="140" height="140">
          <h2>Passionné et motivé</h2>
          <p>Quand on parle de technologie, Romeu est quelqun qui aime apprendre les nouvelles techniques, outils et façon de faire évoluer le monde à partir de l'informatique. </p>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

     
      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <?php
        include_once("footer.php");
      ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>

    <!--<script>window.jQuery || document.write('<script src="js/js/jquery-3.2.1.min.js"><\/script>')</script>-->

    <script src="js/tether.min.js"></script>

    <!--<script src="../../dist/js/bootstrap.min.js"></script>-->
  	<!--<script src="bootstrap-4.0.0-alpha.6/dist/js/bootstrap.min.js"></script>-->
	

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
