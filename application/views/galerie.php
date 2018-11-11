<div class="contentGalerie">
  <h1>Galerie</h1>
  <div class="gridGalerie">
  <?php 
    foreach($this->imgLinks as $key => $imgLink){
      $legend=$this->legends[$key];
      include("../application/layout/galerieBlock.php");
    }
  ?>
  </div>
</div>