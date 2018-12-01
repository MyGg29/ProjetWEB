<button class="btnPDF" type="submit" id="boutonPDF" onclick="extraction()">
  <img src="public/icon/pdf.svg" alt="" class="" style="width:50px;height:50px;">
</button>
<script>
    var doc = new jsPDF('p','pt','a4');
    function extraction(){
    doc.addHTML(document.body,function(){
    doc.save('document.pdf');
    });
  }
</script>