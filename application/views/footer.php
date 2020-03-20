<!-- Barre de navigation de bas de page -->
</body>
<div class="container">
        <div class="row">
  <footer class="navbar navbar-default" style="margin-left: 15px; margin-right: 15px; margin-top: -20px; ">
    <div class="container-fluid">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
    <li><a href="https://www.google.fr/" title="legale">
      <?php 
  // Langue: Français
     echo 'Mentions légales';
      ?>
      </a></li>
      
      <li><a href="https://www.google.fr/" title="horaire">
      <?php 
  // Langue: Français
     echo 'Horaires';
      ?>
      </a></li>

      <li><a href="https://www.google.fr/" title="plan" style="margin-right: 97px;">
      <?php 
  // Langue: Français
     echo 'Plan du site';
      ?>
      </a>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
      <li><a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a></li>
      <li><a href="https://www.youtube.com/" class="fa fa-youtube" target="_blank"></a></li>
      <li><a href="https://www.twitter.com/" class="fa fa-twitter" target="_blank"></a></li>
      <li><a href="https://www.pinterest.com/" class="fa fa-pinterest" target="_blank"></a></li>
      <li><a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost" target="_blank" style="margin-right: 15px;"></a></li>
      </ul>
      <a  href="#"><img style="width: 35%;" class="img-responsive" src="<?= base_url('assets/Img/footer.png');?>"></a>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </footer>


  <div class="row">
<div class="col-xs-12 text-right" style="margin-bottom: 20px; margin-top: 20px; margin-left: 34px;">
<div class="col-xs-3 text-right">
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/a.png');?>"></a>
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/b.png');?>" style="margin-top: 30px; margin-right: 17px;"></a>
</div>
<div class="col-xs-3 text-right">
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/c.png');?>"></a>
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/d.png');?>" style="margin-top: 30px; margin-left: 12px;"></a>
</div>
<div class="col-xs-3 text-right">
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/e.png');?>"></a>
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/i.png');?>" style="margin-top: 30px; margin-left: 40px"></a>
</div>
<div class="col-xs-3 text-right">
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/g.png');?>"></a>
<a href="#" target="_blank"><img class="img-responsive" src="<?= base_url('assets/Img/sponsors/h.png');?>" style="margin-top: 30px; margin-left: 10px"></a>
</div>
</div>
</div>


<!-- Start vertical navigation -->
<div id="op-verticalnav">
<ul class="op-sectionlist">
<li class="op-v-item"><a class="op-v-link" href="#mysect1"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Accueil</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#mysect2"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Homme</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#mysect3"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Femme</span></span></a></li>
<li class="op-v-item"><a class="op-v-link" href="#mysect4"><span class="v-marker"></span><span class="op-v-itemdesc"><span class="op-v-itembg">Enfant</span></span></a></li>
</ul>
</div>
<script>
/* ====== Add Smooth effect ===== */
$(function() {
  var scrollToAnchor = function( id ) {
    var elem = $("section[id='"+ id +"']"); // on crée une balise d'ancrage
    if ( typeof elem.offset()  === "undefined" ) { // on verifie si l'élément existe
		elem = $("#"+id); }
    if ( typeof elem.offset()  !== "undefined" ) { // si l'élément existe, on continue
      $('html, body').animate({
              scrollTop: elem.offset().top }, 600 );} // on défini un temps de défilement de page
  };
  $("a").click(function( event ) { // on attache la fonction au click
    if ( $(this).attr("href").match("#") ) { // on vérifie qu'il s'agit d'une ancre
      event.preventDefault();
      var href = $(this).attr('href').replace('#', '') // on scroll vers la cible
      scrollToAnchor( href ); }
  });
});
</script>
</body>

</html>