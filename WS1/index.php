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
        <a class="navbar-brand" href="#">Project name</a>
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">



          <div class="jumbotron">
            <h1>Projeto de Engenharia</h1>
            <p>David Sousa & Gonçalo Silva</p>
          </div>
          <div class="row">




            <div class="col-xs-12 col-lg-6">

              <div class="card">
              <div class="card-header">
              Associar Ponto a Percurso
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listaatribuicoesp" role="tab">Linhas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#addnovalinhap" role="tab">Adicionar nova linha</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listaatribuicoesp" role="tabpanel">
          <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                        $result = $client->call('WS1_webservice.query_all_percurso_ponto', array(null, null));
                      //echo $result . 'teste';
                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'> ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="addnovalinhap" role="tabpanel">


                    <form action="interface_percurso_ponto.php" method="get">

                        <label> <span>id_percurso</span><input type="text" name="id_percurso" value=""/></label>
                        <label> <span>id_ponto</span><input type="text" name="id_ponto" value=""/></label>
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
                Pontos de Interesse
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listapontos" role="tab">Lista de Pontos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#criarponto" role="tab">Criar Novo Ponto</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listapontos" role="tabpanel">
  <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                      $result = $client->call('WS1_webservice.query_all_ponto', array(null));

                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'>". $key." - ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="criarponto" role="tabpanel">


                    <form action="interface_ponto.php" method="get">

                        <label> <span>Descricao</span><input type="text" name="descricao" value=""/></label>
                        <input name="action" value="novo" hidden="true"/>
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
                Percursos
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listapercurso" role="tab">Lista de Pontos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#criarpercurso" role="tab">Criar Novo Ponto</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listapercurso" role="tabpanel">
            <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                      $result = $client->call('WS1_webservice.query_all_percurso', array(null));

                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'>". $key." - ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="criarpercurso" role="tabpanel">


                    <form action="interface_percurso.php" method="get">

                        <label> <span>Descricao</span><input type="text" name="descricao" value=""/></label>
                        <input name="action" value="novo" hidden="true"/>
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
                Localizações
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listalocalizacoes" role="tab">Lista de Localizacoes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#criarlocalizacao" role="tab">Criar Nova Localizacao</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#atualizarlocalizacao" role="tab">Atualizar Localizacao</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listalocalizacoes" role="tabpanel">
          <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                        $result = $client->call('WS1_webservice.query_all_localizacao', array(null, null));

                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'>". $key." - ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="criarlocalizacao" role="tabpanel">


                    <form action="interface_localizacao.php" method="get">

                        <label> <span>Latitude</span><input type="text" name="latitude" value=""/></label>
                        <label> <span>Longitude</span><input type="text" name="longitude" value=""/></label>
                        <input name="action" value="novo" hidden="true"/>
                        <input id="submit" type="submit" value="submit"/>
                    </form>

                  </div>

                  <div class="tab-pane" id="atualizarlocalizacao" role="tabpanel">


                    <form action="interface_localizacao.php" method="get">
                        <label> <span>id_localizacao</span><input type="text" name="id_localizacao" value=""/></label>
                        <label> <span>Latitude</span><input type="text" name="latitude" value=""/></label>
                        <label> <span>Longitude</span><input type="text" name="longitude" value=""/></label>
                        <input name="action" value="update" hidden="true"/>
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
              Associar Veiculo a Condutor
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listaatribuicoes" role="tab">veiculos atribuidos aos condutores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#addnovalinha" role="tab">Adicionar novo linha</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listaatribuicoes" role="tabpanel">
          <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                        $result = $client->call('WS1_webservice.query_all_condutor_veiculo', array(null, null));

                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'> ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="addnovalinha" role="tabpanel">


                    <form action="interface_condutor_veiculo.php" method="get">

                        <label> <span>id_condutor</span><input type="text" name="id_condutor" value=""/></label>
                        <label> <span>id_veiculo</span><input type="text" name="id_veiculo" value=""/></label>
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
                Veiculos
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#home" role="tab">Lista</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Criar Veiculo</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="home" role="tabpanel">
  <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                      $result = $client->call('WS1_webservice.query_all_veiculo', array(null, null, null, null, null,null));

                      echo "<ul class='list-group' style='margin-top:10px;'>";
                      foreach($result as $key => $value)
                      {

                      echo  " <li class='list-group-item'>". $key." - ". $value ."</li>" ;
                      }
                        echo "</ul>";

                      ?>

                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel">


                      <form action="interface_veiculo.php" method="get">

                          <label> <span>Marca</span><input type="text" name="marca" value=""/></label>
                          <label> <span>Modelo</span><input type="text" name="modelo" value=""/></label>
                          <label> <span>Matricula</span><input type="text" name="matricula" value=""/></label>
                          <label> <span>Capacidade</span><input type="text" name="capacidade" value=""/></label>
                          <label> <span>Autonomia</span><input type="text" name="autonomia" value=""/></label>
                          <label> <span>Estado</span><input type="text" name="estado" value=""/></label>
                          <input name="action" value="novo" hidden="true"/>
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
                Condutores
              </div>
              <div class="card-block">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#listacondutores" role="tab">Todos os Condutores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#novocondutor" role="tab">Adicionar Novo Condutor</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="listacondutores" role="tabpanel">
              <?php
                      $client = new nusoap_client("http://127.0.0.1:80/WS1/class.webservice.php");
                      $result = $client->call('WS1_webservice.query_all_condutor', array(null, null, null, null, null,null));

                  echo "<ul class='list-group' style='margin-top:10px;'>";
                  foreach($result as $key => $value)
                  {

                  echo  " <li class='list-group-item'>". $key." - ". $value ."</li>" ;
                  }
                    echo "</ul>";
          ?>

                  </div>
                  <div class="tab-pane" id="novocondutor" role="tabpanel">


                    <form action="interface_condutor.php" method="get">

                        <label> <span>Nome</span><input type="text" name="nome" value=""/></label>
                        <label> <span>BI</span><input type="text" name="bi" value=""/></label>
                        <label> <span>Carta de Conducao</span><input type="text" name="carta_conducao" value=""/></label>
                        <input name="action" value="novo" hidden="true"/>
                        <input id="submit" type="submit" value="submit"/>
                    </form>

                  </div>
                </div>
              </div>
              </div>
            </div>




          </div><!--/row-->




      <hr>

      <footer>
        <p>&copy; Company 2014</p>
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
