<?php
    include('functions_ccg.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Como calcular tu aguinaldo - Calcular aguinaldo</title>
    <meta name="description" content="Como calcular tu aguinaldo 2016, aun no sabes cuanto te corresponde de aguinalo este año, En www.calcularaguinaldo.com te decimos como y cuano te corresponde. El aguinaldo es una prestación que opr ley te corresponde">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- Stroke 7 font by Pixeden (http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set)-->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/helper.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- plugins-->
    <link rel="stylesheet" href="css/simpletextrotator.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
        <div id="get-started" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                <h4 class="modal-title text-center">Resultado para tu aguinaldo</h4>
              </div>
              <div class="modal-body">
                <p class="text-center text-muted">El aguinaldo correspondiente es de: <b id="total_aguinaldo"></b></p>
                <!-- Solo enlaces adaptable -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-3122338729474694"
                     data-ad-slot="4429109230"
                     data-ad-format="link"
                     style="width: 100%"></ins>
              </div>
            </div>
          </div>
        </div>
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="img/logo.png" alt="logo calcular aguinaldo" height="60px"><span class="sr-only">Calcular aguinaldo</span></a>
              <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="pe-7s-menu"></i></button>
              </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#inicio_aguinaldo" class="scroll-to">Inicio</a></li>
                <li><a href="#informacion_aguinaldo" class="scroll-to">Aguinaldo</a></li>
            </div>
          </div>
        </div>
      </header>
      <section id="inicio_aguinaldo" class="text-intro no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>No sabes cuanto te toca de aguinaldo, <span class="rotate">aprende a sacarlo, te decimos cuanto es, calculalo aquí</span></h1>
                  <h3 class="weight-300">Un pago que por ley tienes.</h3>
            </div>
          </div>
          <div class="row margin-bottom-100">
            <div class="col-md-12">
              <p>Este 2016, no olvides cobrar tu aguinaldo, tienen hasta el 20 de diciembre para pagarte...<br />Ingresa la siguiente información y averigualo.</p>
              <form  id="frm_aguinaldo" class="form-inline margin-top" method="post">
                  <div class="input-group">
                      <input id="sueldo_mensual" name="sueldo_mensual" type="text" placeholder="Ingresa tu sueldo mensual" class="form-control" width="50px;">
                  </div>
                  <div class="input-group">
                      <input id="dias_aguinaldo" name="dias_aguinaldo" type="text" placeholder="Días de aguinaldo (15)" class="form-control" width="50px;">
                  </div>
                  <div class="input-group">
                      <input id="dias_laborados" name="dias_laborados" type="text" placeholder="Días laborados (365)" class="form-control">
                  </div>
                  <div class="input-group">
                      <input id="calcular_aguinaldo" type="submit" value="Calcular aguinaldo" class="btn btn-primary">
                  </div>

              </form>
            </div>
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS ***-->
      <section id="customers" class="section background-gray-lightest padding--small">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-4 col-xs-4">
              <div class="customer"><img src="img/calculator-128.png" title="Calcula tu aguinaldo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
              <div class="customer"><img src="img/finance-hammer-128.png" title="El aguinaldo es un derecho" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-4 col-xs-4">
              <div class="customer"><img src="img/hand-coins-128.png" title="Obten tu aguinaldo proporcional" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS END ***-->
      <!--   *** TEXT ***-->
      <section id="informacion_aguinaldo" class="text-page section-inverse background-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">¿Que es el aguinaldo?</h2>
              <p class="lead text-center">Aprende un poco de la prestación del aguinaldo y como calcularlo.</p>
              <div class="row">
                <div class="col-sm-6">
                  <p>
                      El <b>aguinaldo</b> es una prestación anual que se describe en el artículo 87 de la Ley Federal del Trabajo, consiste en el <b>pago de 15 días de salario</b>, mismo que deberá pagarse antes del día <b>20 de diciembre</b> de cada año.
                  </p>
                  <p>
                      Si aun no cumples con un año de servicios, o entraste en cualquier parte del año a trabajar, se te deberá de dar la parte proporcional a los dias trabajados.
                  </p>
                </div>
                <div class="col-sm-6">
                  <p> Para realizar el calculo del aguinaldo, se toman los días que se tengan pactados como aguinaldo, por ejemplo: <b>15</b> (que son los días que marca el artículos 87 de la Ley  Federal del Trabajo) <b>entre 365</b> días (que son los días del año) nos da como resultado <b>0.041</b>. Este resultado se <b>multiplica por el salario diario</b> y el <b>resultado se multiplica</b> a su vez por los <b>días que laboró</b> el trabajador. </p>
                </div>
                <div class="col-sm-12 text-center">
                  <p>Ejemplo: <br>
                      <?php
                         $residuo = residuo(15, 3);
                      ?>
                      Sueldo diario: <?= sueldo_diario(10000); ?> pesos<br>
                      Dias de aguinaldo: 15 días<br>
                      Dias labobrados: 365 (Todo el año)<br><br>
                      <b>Entonces se entiende que: </b>
                      <div class="row">
                          <div class="col-sm-offset-3 col-sm-6">
                              <table class="table">
                                  <tr>
                                      <td>15 dias de aguinaldo / 365 = <b><?= $residuo; ?></b></td>
                                  </tr>
                                  <tr>
                                      <td><?= $residuo.' * '.sueldo_diario(10000).' de sueldo diario = <b>'.residuo_por_salario($residuo, sueldo_diario(10000)).'</b>' ?></td>
                                  </tr>
                                  <tr>
                                      <td><?= residuo_por_salario($residuo, sueldo_diario(10000)).' * 365 dias laborados = <b>'.calcular_aguinaldo(365, 15, 10000).' de aguinaldo</b>'?></td>
                                  </tr>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** TEXT END ***-->
      <!--   *** FEATURES END ***  -->
      <footer class="footer">
        <div class="footer__copyright">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <p>&copy;2016 www.calcularaguinaldo.com</p>
                  </div>
                  <div class="col-md-4 text-center">
                      <p><a href="http://www.vermiip.com.mx">Conoce cual es tu dirección IP</a></p>
                  </div>
                  <div class="col-md-4">
                      <p class="credit pull-right">Creado por <a href="http://wwww.ccruz.ga" class="external">CCRUZ</a></p>
                  </div>
              </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-54256427-5', 'auto');
      ga('send', 'pageview');
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </body>
</html>
