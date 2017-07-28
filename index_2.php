<?php 
    // session_start();

    // // Ao fazer este teste verifica se existe um usuario ja autorizado que foi inscrito anteriorment na variavel de sessao, caso contratio manda para home.php
    // if (!$_SESSION["usuario"]){
    //     header("Location: index.php?erro=2");
    // }


?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"> 

		<title>RomeuAC</title>
		
		<!-- jquery - local link -->
		<script src="js/jquery-3.2.1.min.js"></script>

		<!-- bootstrap - local link -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	
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

        <script type="text/javascript">
            $(document).ready( function() {
                // Associar o evento de click ao envio do texto ao BD
                $("#btn_tweet").click( function () {
                    // var tweet = $("#texto_tweet").val();

                    if (tweet.length > 0 ){

                        $.ajax({
                            url: "inclui_tweet.php",

                            method: "post",
                            
                            // data: {chave1: valor1, chave2: valor2,...}
                            //data: {texto_tweet: tweet},
                            // Boa forma de agilizar processo quando existe um grande formulario e vao ser todos passados para o script php, ou seja la onde
                            data: $("#form_tweet").serialize(),

                            success: function (data){
                                
                            }
                        });

                    }

                });



            });
        </script>

	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a href="home.php"><img src="imagens/icone_twitter.png" /></a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="exit.php">Exit</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	    	<div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        

                    </div>
                </div>
            </div>

            <!--Coluna do meio, dos Tweets-->
	    	<div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <form class="input-group" id="form_tweet">
                            <input type="text" placeholder="What's happening now..?" maxlength="140" class="form-control" id="texto_tweet" name="texto_tweet">

                            <span class="input-group-btn">
                            <button type="submit" id="btn_tweet" class="btn btn-default">Tweet</button></span>
                            
                        </form>
                    </div>
                </div>

                <div class="list-groups" id="tweets">
                    
                </div>

			</div>

			<div class="col-md-3">

                <div class="panel panel-default text-center">
                    <div class="panel-body">
                        <h4><a href="procurar_pessoas.php">Look <span class="glyphicon glyphicon-envelope"></span> for other users</a></h4>
                    </div>
                </div>
            
            </div>

		</div>


	    </div>
	
		<!-- a ideia de colocar no final eh que deve-se esperar que todos os elementos estejam renderizados ao incluir o JS do bootstrap-->
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
	</body>
</html>