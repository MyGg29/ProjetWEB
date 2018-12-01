<div class="card" style="width:100%;">
  <img class="card-img-top" src="<?=$this->image;?>" alt="Card image cap">
  <div class="card-body d-flex flex-column">
    <h5 class="card-title"><?=$this->titre;?></h5>
    <p class="card-text"><?=$this->description;?></p>
    <a href="article?id=<?=$this->id?>" class="btn btn-primary boutonCard mt-auto">Voir l'article</a>
  </div>
</div>