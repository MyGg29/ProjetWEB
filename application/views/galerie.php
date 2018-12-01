<div class="contentGalerie">
  <h1>Galerie</h1>
  <div class="gridGalerie">
  <?php 
    ksort($this->imgLinks);
    foreach($this->imgLinks as $key => $imgLink){
      $legend=$this->legends[$key];
      include("../application/layout/galerieBlock.php");
    }
  ?>
  </div>
</div>
<?php include("../application/layout/socialbar.php")?>
<?php include("../application/layout/boutonPdf.php")?>