<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">

    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery-3.2.1.min.js"></script>

    <style>
      body {
        padding-bottom: 60px;
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;
        color: #333;
        font-size: 14px;
        background: #F4F4F4;
      }
      a {
        text-decoration: none;
      }
      a:hover, a:visited, a:link, a:active {

        text-decoration: none!important;

        -webkit-box-shadow: none!important;
        box-shadow: none!important;
      }
      h1 {
        font-size: 2em;
        color: #000;
        margin: 0;
      }
      h2 {
        font-size: 1.3em;
      }
      h3 {
        font-size: 1.4em;
        color: #000;
      }
      footer {
        color: #757575;
      }
      p { 
        margin: 0 0 10px;
      }
      .progress {
        margin-bottom: 20px;
      }
      .card-main {
        padding: 70px 75px;
      }
      hr {
        margin: 40px 0;
      } 
      .card {
            margin: 50px auto;
      }
    </style>

    <!--http://demo.evenfly.com/view?theme=CVstrap-->

  </head>
  <body>
    <div class="container">
        <div class="card">
          <div class="card-main">
            <div class="row">
              <div class="col-md-3">
                <img class="rounded" src="<?php echo base_url(); ?>images/photo.jpg" width="150" />
              </div>
              <div class="col-md-md-auto">
                <h1>Федорова Анастасия</h1>
                <h2>Программный инженер</h2>
                <div class="row">
                  <div class="col-md-4"><a href="https://instagram.com/nsity"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></div>
                  <div class="col-md-4"><a href=""><i class="fa fa-vk" aria-hidden="true"></i> Vkontakte</a></div>
                  <div class="col-md-4"><a href=""></a></div>
                </div>
              </div>
            </div>

            <hr>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-1"><i class="fa fa-user fa-2x" aria-hidden="true"></i></div>
                  <div class="col-md-11">
                    <h3>Приветствие</h3>
                    <div>Привет, меня зовут Анастасия. Я программный инженер.</div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-1"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></div>
                  <div class="col-md-11">
                    <h3>Образование</h3>
                    <div class="row">
                      <div class="col-md-9">
                        <p>Лицей №21</p>
                        <p>Иваново</p>
                        <p>Физико-математический класс</p>
                      </div>
                      <div class="col-md-3 text-right">2000–2011</div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-9">
                        <p>ИГЭУ им. Ленина</p>
                      </div>
                      <div class="col-md-3 text-right">2011-2015</div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  
                </div>
              </div>
              <div class="col-md-4">
                <div class="row">
                  <div class="col-md-1"><i class="fa fa-magic fa-2x" aria-hidden="true"></i></div>
                  <div class="col-md-11">
                    <div>
                      <h3>Ключевые навыки</h3>
                      <p>Photoshop</p>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p>Java под Android</p>
                      <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <footer class="text-center">
      © Designed by <a href="https://vk.com/nsitynastya">Nsity</a>
    </footer>
  </body>
</html>