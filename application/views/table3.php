<!-- Tableau enfants -->
<div class="col-xs-12" style="padding-bottom: 2%">
<img src="<?= base_url('assets/Img/bannE.bmp'); ?>" class="img-responsive" style="margin: 0 auto; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">  
</div>

<section id='tableaux' style="margin-top: 5%">
  <table class="table">
     <tbody>
     <?php 
     // On boucle sur la liste des produits
     foreach ($liste_produits as $row): ?>
     <!-- Libellés des photos référencés -->
     <div class="card_shop">
<div class="justify-content-center">
     <img src="<?= base_url('assets/Img/enfant/'); ?><?= $row->pro_id?>.<?= $row->pro_photo ?>" id="photo" alt="<?= $row->pro_libelle ?>">
     <button type="button" style="width: 100%; background-color: #555555; color: white; font-size: 15px; border: 2px solid #555555; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);"><?= $row->pro_prix ?> €</button>
     <button type="button" style="width: 100%; background-color: #555555; color: white; font-size: 15px; border: 2px solid #555555; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);"><?= $row->pro_libelle ?></button>
     <p></p>
<button type="button" style="margin-top: 10px;" class="btn btn-default"> Ajouter au panier 
  <span class=" glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
</button>

     </div>
  </div>
     
    <?php
    // Fin de boucle
    endforeach; 
    ?>

 </tbody>
 </table>
 </section>
 </section>
