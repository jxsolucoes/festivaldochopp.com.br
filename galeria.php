<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Galeria | 47&deg; Festival do Chopp</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="favicon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="styles/vendor/normalize.css"/>

  <link rel="stylesheet" href="styles/vendor/font-awesome.css"/>

  <link rel="stylesheet" href="styles/vendor/lightbox.css"/>

  <link rel="stylesheet" href="styles/main.css"/>
</head>
<body>
  <header>
    <div class="header">
      <div class="wrapper">
        <!-- ================================= DATE ================================= -->
        <div class="date date-box">
          <div class="date-inner-box">
            <h5>05 e 12 de Abril de 2014</h5>
          </div>
        </div> <!-- end date -->
        <!-- ================================= END DATE ================================= -->


        <!-- ================================= ILLUSTRATION ================================= -->
        <div class="illustration">
          <img src="images/illustration.png" alt="">
        </div> <!-- end illustration -->
        <!-- ================================= END ILLUSTRATION ================================= -->


        <!-- ================================= BRAND ================================= -->
        <div class="brand">
          <a href="index.php">
            <img src="images/festival-logo.png" alt="">
          </a>
        </div> <!-- end brand -->
        <!-- ================================= END BRAND ================================= -->
      </div> <!-- end wrapper -->
    </div> <!-- end header -->

    <!-- ================================= NAVIGATION ================================= -->
    <div class="navigation">
      <div class="wrapper">
        <nav>
          <ul class="menu pull-left">
            <li><a>a festa</a>
              <ul class="sub-menu">
                <li><a href="historico.php">hist&oacute;rico</a></li>
                <li><a href="curiosidades.php">curiosidades</a></li>
                <li><a href="infraestrutura.php">infraestrutura</a></li>
                <li><a href="soberanas.php">soberanas</a></li>
              </ul>
            </li>
            <li><a href="noticias.php">not&iacute;cias</a></li>
            <li><a href="programacao.php">programa&ccedil;&atilde;o</a></li>
          </ul>
          <ul class="menu pull-right">
            <li><a>informa&ccedil;&otilde;es</a>
              <ul class="sub-menu">
                <li><a href="excursoes.php">excurs&otilde;es</a></li>
                <li><a href="dicas.php">dicas</a></li>
                <li><a href="ingressos.php">ingressos</a></li>
                <li><a href="localizacao.php">localiza&ccedil;&atilde;o</a></li>
                <li><a href="hoteisrestaurantes.php">hot&eacute;is e restaurantes</a></li>
              </ul>
            </li>
            <li><a href="galeria.php">galeria</a></li>
            <li><a href="contato.php">contato</a></li>
          </ul>
        </nav>
      </div> <!-- end wrapper -->
    </div> <!-- end navigation -->
    <!-- ================================= END NAVIGATION ================================= -->
  </header>

  <!-- ================================= MAIN ================================= -->
  <section class="main">
    <div class="wrapper">
      <div class="main-box">
        <div class="main-inner-box">
          <div class="row">
            <div class="col-xs-12">
              <h2>Galeria</h2>
              <?php
				include 'classes/pageClass.php';
				$page= new Page();
				$out;
				
				if(isset($_GET["id"])){
					$dados = $page->getPageContent("*", "fotos", "id_galeria=".$_GET["id"]);
					if(gettype($dados)!="array"){
						$out = "<p>Nenhuma foto encontrada para esta galeria.</p>";
					}else{
						$out="<div class='row galeria'>";
						foreach($dados as $arrayItem) {
							$out .= 
									"<div class='col-xs-3'>
										<a href='uploads/".$arrayItem['imagem']."' data-lightbox='galeria'>
		          							<img src='uploads/medias/".$arrayItem['imagem']."' width='240' height='180' class='image-border'>
		          						</a>
									</div>";
						}
						$out.="</div>";
					}
				}else{
					$dados = $page->getPageContent("*", "galerias", null);
					if(gettype($dados)!="array"){
						$out = "<p>Em breve</p>";
					}else{
						$out="<div class='row galeria'>";
						foreach($dados as $arrayItem) {
							$out .= "<div class='col-xs-3'>
        								<a href='galeria.php?id=".$arrayItem['id']."'>
											<img src='uploads/medias/".$arrayItem['imagem']."' width='240' height='180' class='image-border'>
          								</a>
										<h5>".$arrayItem['titulo']."</h5>
									</div>";
						}
						$out.="</div>";
					}
				}// fim else
				print $out;
				
              ?>
                <!-- <div class="col-xs-3">
                  <img src="images/galeria.jpg" width="240" height="180" class="image-border">
                  <h5>Galeria de Rainhas</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/people/" width="240" height="180" class="image-border">
                  <h5>Lorem ipsum</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/fashion/" width="240" height="180" class="image-border">
                  <h5>Dolor sit amet</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/nature/" width="240" height="180" class="image-border">
                  <h5>Consectetur adipisicing</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/city/" width="240" height="180" class="image-border">
                  <h5>Voluptas optio esse</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/sports/" width="240" height="180" class="image-border">
                  <h5>Blanditiis id ad</h5>
                </div>

                <div class="col-xs-3">
                  <img src="http://lorempixel.com/240/180/cats/" width="240" height="180" class="image-border">
                  <h5>Incidunt ipsam alias</h5>
                </div> -->
            </div> <!-- end col-xs-12 -->
          </div> <!-- end row -->
        </div> <!-- end main-inner-box -->
      </div> <!-- end main-box -->

      <!-- ================================= SUPPORT ================================= -->
      <div class="row">
        <div class="col-xs-2">
          <p>Apoio:</p>
          <img src="images/prefeitura.png" alt="Prefeitura">
        </div>
        <div class="col-xs-10">
          <p>Patroc&iacute;nio:</p>
          <img src="images/patrocinio.png" alt="Patrocinios">
        </div>
      </div>
      <!-- ================================= END SUPPORT ================================= -->

    </div> <!-- end wrapper -->
  </section> <!-- end main -->
  <!-- ================================= END MAIN ================================= -->

  <footer>
    <div class="credits">
      <!-- ================================= CREDITS ================================= -->
      <div class="wrapper">
        <p class="pull-left">Festival do Chopp © 2014 - Todos os direitos reservados</p>
        <p class="pull-right">Desenvolvido por <a class="publins" href="http://www.publins.com.br/" target="_blank">Publins</a></p>
      </div> <!-- end wrapper -->
      <!-- ================================= END CREDITS ================================= -->
    </div>
  </footer>


  <!-- ================================= JAVASCRIPT LOADS ================================= -->
  <script src="scripts/vendor/jquery.min.js"></script>

  <script src="scripts/vendor/plugins.min.js"></script>

  <script src="scripts/vendor/slidesjs.min.js"></script>

  <script src="scripts/vendor/lightbox.min.js"></script>

  <script src="scripts/main.min.js"></script>
  <!-- ================================= END JAVASCRIPT LOADS ================================= -->
  

  <script>

  </script>
</body>
</html>