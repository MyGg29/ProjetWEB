<div class="contentArticle">
    <h1><?=$this->titreArticle;?></h1>
    <iframe class="iframe" src="<?=$this->iframe?>"></iframe>
    <div class="text">
        <?=$this->texteArticle;?>
    </div>
    <div class="tags">
        <?php
            foreach($this->tags as $tag){
                $this->tagName = $tag["texte"];
                $this->tagOccurence = $tag["occurence"];
                include("../application/layout/tag.php");
            }
        ?>

        <button type="button" data-toggle="modal" data-target="#addTagModal" class="badge badge-warning tag"><span class="badge badge-light">+</span></button>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                <label for="addTagText">Ajouter un label à cet article ! </label>
                <input type="text" name="addTagText" id="addTagText">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(
        $("#saveChanges").click(function(){
            var url = new URL(window.location.href);
            var idArticle = url.searchParams.get("id");
            var tagText = $("#addTagText").val(); 
            $.ajax({url: "article", method:"POST", data:{id:idArticle,tagText:tagText}, success:function(result){
                location.reload();
            }})
        })
    )
</script>