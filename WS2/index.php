<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">
    <?php

    require_once "lib/nusoap.php";
    require_once "lib/functions.php";

    ?>
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <div class="container">
        <a class="navbar-brand" href="#">Projecto</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">



          <div class="jumbotron">
            <h1>Projeto de Engenharia de Software</h1>
            <p>David Sousa & Gonçalo Silva</p>
          </div>
          <div class="row">



            <div class="col-xs-12 col-lg-6">

              <div class="card">
              <div class="card-header">
                Google Directions
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listapontos" role="tab">Procurar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#criarponto" role="tab">Criar Novo Ponto</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div class="tab-pane" id="criarponto" role="tabpanel">


                    <form action="interface.php" method="get">

                        <label> <span>Origem</span><input type="text" name="origem" value=""/></label>
                        <label> <span>Destino</span><input type="text" name="destino" value=""/></label>
                        <input id="submit" type="submit" value="submit"/>
                    </form>

                  </div>
                </div>
              </div>
              </div>

            </div>
             <div class="col-xs-12 col-lg-6">
              <div class="card">
              <div class="card-header">
                Meteorologia
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listapontos" role="tab">Procurar</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  
                  <div class="tab-pane" id="criarponto" role="tabpanel">

                    <form action="interface.php" method="get">

                        <label> <span>Local</span><input type="text" name="local" value=""/></label>
                        <input id="submit" type="submit" value="submit"/>
                    </form>
                  </div>
                </div>
              </div>
              </div>
            </div>	
						
			
			<div class="col-xs-12 col-lg-6">
              <div class="card">
              <div class="card-header">
                Conversor
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listaconversor" role="tab">Procurar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#criarconversor" role="tab">Inserir valor</a>
                  </li>
                </ul>
                <!-- Tab panes -->
                       <div class="tab-content">
                  
                  <div class="tab-pane" id="criarconversor" role="tabpanel">


                    <form action="interface.php" method="get">

                        <label> <span>Valor</span><input type="text" name="origem" value=""/></label>
                        <input name="action" value="novo" hidden="true"/>
                        <input id="submit" type="submit" value="submit"/>
                    </form>
					
					</div>
                  </div>
                </div>
              </div>
              </div>
            </div>
			

			
			
			</div><!--/row-->




      <hr>

      <footer>
        <p>&copy; Company 2016</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
