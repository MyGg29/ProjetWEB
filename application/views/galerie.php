<div class="contentGalerie">
  <h1>Galerie</h1>
  <div class="gridGalerie">

  
    <script>
        var doc = new jsPDF('p','pt','a4');

        function extraction(){
          doc.addHTML(document.body,function(){
            doc.save('document.pdf');
          });
        }
    </script>

    <button class="btnPDF" type="submit" id="boutonPDF" onclick="extraction()">
          <img src="public/icon/pdf.svg" alt="" class="" style="width:50px;height:50px;">
      </button>



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