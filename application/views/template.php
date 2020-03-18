<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bienvenu</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url('assets/');  ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');  ?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?php echo base_url('assets/');  ?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/');  ?>css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url('assets/');  ?>css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gestion d’une Bibliothèque</a>
            </div>
            <!-- /.navbar-header -->
           <?php $this->load->view('layout/menu'); ?>
         
            <ul class="nav navbar-top-links navbar-right">
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li> 
                            <center> <p><?php  echo $this->session->prenom.' '. $this->session->nom;  ?></p></center>
                         </li>
                        
                        <li><a href="<?php echo site_url("C_acceuil/logout")?>"><i class="fa fa-sign-out fa-fw"></i> Deconnexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

          
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
  if (empty($_GET['key'])==false && $_GET['key']==1) {
    ?>
  <!--   <div class="col-xs-4" style="margin-top: 10px;">
    <div class="callout callout-success" style="margin-bottom: 5px; padding: 10px;">
     <p> Enregistrement effectuer avec succes </p>
    </div>
    </div> -->
    <div class="panel panel-success" style="margin-top: 20px;">
                        <div class="panel-heading" >
                            Success 
                        </div>
                        <div class="panel-body">
                           <p> Enregistrement effectuer avec succes </p>
                        </div>
                    </div>
    <div class="clearfix">
      
    </div>
    <?php
  }
  ?>
    <!-- Content Header (Page header) -->
  <?php 
   //var_dump($row);
    //var_dump($donnees);
    //var_dump($titre_vue);
    //var_dump($vue_a_charger);
    //$data_vue['donnees_vue']=$donnees;
    //$data_vue['titre_vues']=$titre_vue;
  if (empty($data_vue)==true) 
    $this->load->view ($vue_a_charger); 
  else
    
  
  $this->load->view ($vue_a_charger,$data_vue); 
  ?>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url('assets/');  ?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url('assets/');  ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/');  ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?php echo base_url('assets/');  ?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url('assets/');  ?>js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url('assets/');  ?>js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?php echo base_url('assets/');  ?>js/demo/dashboard-demo.js"></script>


</body>

</html>
