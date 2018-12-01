<button class="btnPDF" type="submit" id="boutonPDF" onclick="extraction()">
  <img src="public/icon/pdf.svg" alt="" class="" style="width:50px;height:50px;">
</button>
<script>
  function extraction() {
  	var pdf = new jsPDF('p','pt','a4');
  	pdf.internal.scaleFactor = 3;
  	pdf.addHTML(document.body,{pagesplit:true},function() {
      pdf.save('document.pdf');
  	});
  }
</script>