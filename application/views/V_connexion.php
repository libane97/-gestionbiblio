<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bienvenu</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/');  ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');  ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url('assets/');  ?>css/sb-admin.css" rel="stylesheet">
  
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Connecter Vous</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo site_url("C_acceuil/login"); ?>"   method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                                             <?php 
                                      if (empty($_GET['erreur'])==false):
                                      ?>
                                      <div class="col-xs-12 text-danger text-center">
                                         Login ou mot de passe incorrect !!!
                                         <br><br>
                                      </div>
                                      <?php 
                                       endif;
                                      ?>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Connexion</button> 
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('assets/');  ?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url('assets/');  ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');  ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

</body>

</html>
