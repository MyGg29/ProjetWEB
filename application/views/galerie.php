<div class="contentGalerie">
  <h1>Galerie</h1>
  <div class="gridGalerie">
  <?php 
    foreach($this->imgLinks as $key => $imgLink){
      $legend=$this->legends[$key];
      include("../application/layout/galerieBlock.php");
    }
  ?>
	<div>
		<iframe src="https://www.planete-astronomie.eu/files/rotation-planete/mars.html" frameborder=0 allowtransparency="true"></iframe>
	</div>
  
  </div>
</div>