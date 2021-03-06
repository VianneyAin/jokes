<?php
  class Header_View {

      function fn_header_view(){
           ?>
          <!DOCTYPE html>
          <html lang="en">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
            <title>This or this</title>

            <!-- CSS  -->
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="<?php echo 'http://localhost/jokes/css/materialize.css' ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="<?php echo 'http://localhost/jokes/css/style.css' ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
            <link href="<?php echo 'http://localhost/jokes/css/custom.css' ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="<?php echo 'http://localhost/jokes/js/materialize.js' ?>"></script>
            <script src="<?php echo 'http://localhost/jokes/js/init.js' ?>"></script>
            <script src="<?php echo 'http://localhost/jokes/js/validate.js' ?>"></script>
          </head>
          <body>
            <nav id="main-menu" class="light-blue darken-2" role="navigation">
              <div class="nav-wrapper container"><a id="logo-container" href="http://localhost/jokes" class="brand-logo">[...]</a>
                <ul class="right hide-on-med-and-down">
                      <li><a href="http://localhost/jokes/connexion">Connexion</a></li>
                </ul>

                <!--CATEGORIES SIDEBAR -->
                <ul id="cat-sidebar" class="side-nav" style="z-index:999">
                    <li><a><i class="material-icons">format_list_bulleted</i>Liste des catégories</a></li>
                </ul>
                <!-- END OF CATEGORIES SIDEBAR -->

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="http://localhost/jokes/connexion">Connexion</a></li>


                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="material-icons">menu</i></a>
              </div>
            </nav>
        <?php

      }
  }
?>
