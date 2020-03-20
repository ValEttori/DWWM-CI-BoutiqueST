<!DOCTYPE html>
<html lang="Fr">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!--Référencement (toutes pages)-->
  <meta name="description" content="??????????????"> 
  <meta name="keywords" content="???????????"> 
  <meta name="robots" content="index, follow">
  <title>Boutique ST</title>
  <!--Liens et scripts (css/ajax/jquery/bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>

<section id="mysect1">
    <div class="container">
        <div class="row" style="margin-left: 0px; margin-right: 0px">
  <!-- Affichage de la barre de navigation -->
  <body>   
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 1.7%; margin-top: -2px;"> 
  <a  href="#"><img class="img-responsive" src="<?= base_url('assets/Img/bann.bmp'); ?>"></a>
        <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
        <li><a href="<?php echo site_url('welcome/home')?>">
        <li class="op-v-item"><a class="op-v-link" href="#mysect1">Accueil</a></li>
        <li class="op-v-item"><a class="op-v-link" href="#mysect2">Homme</a></li>
        <li class="op-v-item"><a class="op-v-link" href="#mysect3">Femme</a></li>
        <li class="op-v-item"><a class="op-v-link" href="#mysect4">Enfant</a></li>
        <li><a href="https://dev.amorce.org/valentin/AFPA/ST/home">Retour
      </a>            
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">     
      <?php 
      echo '<li><a href="'.site_url('http://localhost/prestashop/').'"><span class="glyphicon glyphicon-shopping-cart"></span>';
      {echo ' Panier';}

      //Si pas connecté,  on affiche les liens pour s'enregistrer et se logguer
      if (!$this->session->userdata('connected')) {
        
              echo '<li><a href="'.site_url('welcome/register').'"><span class="glyphicon glyphicon-user"></span> ';
             {echo 'S\'enregistrer';}


              echo '<li><a href="'.site_url('welcome/login').'"><span class="glyphicon glyphicon-log-in"></span>';
             {echo ' Se connecter';}
             }    
        //Si connecté, on affiche le nom, et le lien pour se délogguer
        else
        {
          echo '<li><a><span class="glyphicon glyphicon-user"></span>&nbsp '.$this->session->userdata('email').'</a></li>';
          echo '<li><a href="'.site_url('welcome/logout').'"><span class="glyphicon glyphicon-log-in"></span>';
                 {
                  echo '&nbsp Se déconnecter';
                 }
                }           
        ?>
	</li><a href="?lang=fr"><img src="<?= base_url('assets/Img/fr.png'); ?>" title="Fr" style="margin-top: 10px; margin-left: 10px;"></a></li>
      <a href="?lang=en"><img src="<?= base_url('assets/Img/en.png'); ?>" title="En" style="margin-top: 10px; margin-right: 20px;"></a>
      </a></li>
      </ul>
      </div>
</nav>
</header>