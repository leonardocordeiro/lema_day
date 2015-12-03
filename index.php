<!DOCTYPE html>
<html ng-app="main">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LemaDay</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->   
    <link href="css/custom.css" rel="stylesheet">

</head>

<body ng-controller="HomeController">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">LemaDay</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Pdalestras</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="jumbotron" style="height: 400px;">
        <div class="container">
            <div class="row" style="text-align: center; padding: 7%">
                <div class="col-lg-12">
                   <h1>11/12</h1>
                   <h3>14:00 às 20:00 </h3>
                </div>
            </div>
        </div>        
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>LemaDay</h2>
                <p>Um dia em que você vai conhecer as principais idéias e tecnologias ligadas aos projetos realizados no Laboratório Multidisciplinar de Estatística Aplicada.</p>               
            </div>
            <div class="col-sm-4">
                <h2>Onde?</h2>
                <address>
                    <strong>Centro Universitário Estadual da Zona Oeste</strong>
                    <br>
                    <br>Av. Manuel Caldeira de Alvarenga, 1203 - Campo Grande, Rio de Janeiro - RJ, 23070-200
                    <br>
                </address>                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="img/palestrantes/luiz_bruno.jpg" alt="O que aprendemos com as startups?">
                <h2>O que aprendemos com as startups?</h2>
                <p>Conheça as principais idéias por trás das empresas de tecnologia que estão mudando o mundo. O que é fundamental e o que é apenas modismo?</p>
                <p>
                    <strong>
                        <p align="center">
                            Luiz Bruno Vianna
                        </p>
                    </strong>
                </p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="img/palestrantes/carlos.png" alt="Wordpress para iniciantes">
                <h2>Wordpress para iniciantes</h2>
                <p>A palestra abordará pontos iniciais de Wordpress, passando primeiro por um panorama sobre o que são os Sistemas de Gerenciamento de Conteúdo, instalação do XAMPP e do Wordpress, conceitos de: Temas, Plugins, Posts e Páginas e Widgets, a conversa também irá mostrar a estrutura de separação dos códigos de um tema de Wordpress.</p>
                <p>
                    <strong>
                        <p align="center">
                            Carlos Alberto Oliveira
                        </p>
                    </strong>
                </p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
                <h2>Mercado de jogos</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                <p>
                    <strong>
                        <p align="center">
                            Danilo Gila Santana
                        </p>
                    </strong>
                </p>
            </div>
            
        </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive img-center" src="img/palestrantes/paulo_victor.jpg" alt="Realidade Virtual">
                <h2>Realidade Virtual</h2>
                <p>O que é Realidade Virtual? Quais são suas áreas de atuação? Abordaremos algumas tendências de mercado, qual o objetivo e seus impactos no futuro.</p>
                <p>
                    <strong>
                        <p align="center">
                            Paulo Victor de Sousa
                        </p>
                    </strong>
                </p>
            </div>
        </div>



        <!-- /.row -->

        <hr>

    </div>

    <div id="inscricao" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Inscrição</h4>
              </div>
              <div class="modal-body">
                <div class="alert alert-warning" ng-show="{{cadastrado}}">Usuário cadastrado com sucesso!</div>
                
                <form action="inscricao.php" method="post" novalidate>
                    <div class="form-group">
                        <label>Nome completo:</label>
                        <input type="text" class="form-control" ng-model="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label>Sobrenome:</label>
                        <input type="text" class="form-control" ng-model="sobrenome" name="sobrenome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" ng-model="email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" id="email" 
                        ng-click="cadastrar()" value="Cadastrar">
                    </div>
                </form>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar
                </button>
              </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/angular.js"></script>

    <script src="js/main.js"></script>
    <script src="js/controller/home.js"></script>
</body>

</html>
