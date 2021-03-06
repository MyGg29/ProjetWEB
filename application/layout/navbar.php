<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="logo"><a class="logoLink" href="<?=$config["urls"]["baseUrl"]?>"><img src="public/icon/logovect.svg" alt="Logo" class="logovectClass" style="width:60px;height:60px;"><h1>Stellar'ISEN</h1></a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$config["urls"]["baseUrl"]?>"><img src="public/icon/home.svg" alt="LogoAccueil" class="navbarLogos" style="width:20px;height:20px;"> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$config["urls"]["baseUrl"]?>galerie"><img src="public/icon/gallery.svg" alt="LogoAccueil" class="navbarLogos" style="width:20px;height:20px;"> Galerie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="<?=$config["urls"]["baseUrl"]?>wiki"><img src="public/icon/open-book.svg" alt="LogoAccueil" class="navbarLogos" style="width:20px;height:20px;"> Wiki</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$config["urls"]["baseUrl"]?>planetarium"><img src="public/icon/planetarium.svg" alt="LogoAccueil" class="navbarLogos" style="width:20px;height:20px;"> Planétarium</a>
      </li>
    </ul>
    <form action="wiki" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-field" name="search" type="search" placeholder="Rechercher..." aria-label="Search" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="boutonRecherche">
          <img src="public/icon/search.svg"> 
      </button>
    </form>
     
    <a href="<?=$config["urls"]["baseUrl"]?>connexion"><button type="button" class="btn btn-primary btn-space couleurCI"><?php echo empty($_SESSION) ? "Connexion":"Mon Compte"?> </button></a>
    <?php 
    if(empty($_SESSION)){ 
    ?>
      <a href="<?=$config["urls"]["baseUrl"]?>inscrire"><button type="button" class="btn btn-primary btn-space couleurCI">S'inscrire</button></a>
    <?php 
    }
    else{?>
      <a href="<?=$config["urls"]["baseUrl"]?>deconnexion"><button type="button" class="btn btn-primary btn-space couleurCI">Deconnexion</button></a>
    <?php
    }
    ?>
  </div>
</nav>