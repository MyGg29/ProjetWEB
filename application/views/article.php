<div class="contentArticle">
    <h1><?=$this->titreArticle;?></h1>
    <iframe class="iframe" src="<?=$this->iframe?>"></iframe>
    <div class="text" align="justify">
        <?=$this->texteArticle;?>
    </div>
    <div class="boutonHaut">
        <div class="tags">
            <?php
                foreach($this->tags as $tag){
                    $this->tagName = $tag["texte"];
                    $this->tagOccurence = $tag["occurence"];
                    include("../application/layout/tag.php");
                }
            ?>
            <button type="button" data-toggle="modal" data-target="#addTagModal" class="badge badge-warning tag">Ajouter un tag <span class="badge badge-light">+</span></button>
        </div>
        <img class="favs" id="favs" src="public/icon/etoileFavEmpty.svg" alt="ajouter un favoris !"/>
    </div>
</div>


<!-- Modal, affiché par le bouton ajouter un tag -->
<div class="modal fade" id="addTagModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Proposer un tag supplémentaire</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
                <label for="addTagText">Veuillez indiquer le tag que vous souhaitez soumettre :</label>
                <input type="text" name="addTagText" id="addTagText">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="saveChanges">Envoyer !</button>
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
    $(
        $("#favs").click(function(){
            var url = new URL(window.location.href);
            var idArticle = url.searchParams.get("id");
            $.ajax({url: "article", method:"POST", data:{fav:idArticle}, success:ajouterFav})
        })
    )
    $(function(){
        if(<?=$this->isFav ? 'true':'false'?>){
           ajouterFav(); 
        }
    })

    function ajouterFav(data){
        console.log(data);
        if($("#favs").attr("src") == "public/icon/etoileFavFull.png"){
            $("#favs").attr("src", "public/icon/etoileFavEmpty.svg");
        }
        else{
            $("#favs").attr("src", "public/icon/etoileFavFull.png");
        }
    }
</script>

