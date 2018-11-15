<?php require("../application/layout/header.php"); ?>
<?php include("../application/layout/navbar.php") ?>


  <iframe width="1400" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://virtualsky.lco.global/embed/?longitude=-119.86286000000001&latitude=34.4326&projection=gnomic&constellations=true&constellationlabels=true&constellationboundaries=true&meteorshowers=true&showstarlabels=true&showorbits=true&ecliptic=true&meridian=true&gridlines_az=true&gridlines_eq=true&gridlines_gal=true&showgalaxy=true&az=125.25855333708353" allowTransparency="true"></iframe>

 <!--
"https://virtualsky.lco.global/embed/?


longitude=-119.86286000000001&
latitude=34.4326&
projection=gnomic&

//polar, stereo, lambert, equirectangular, mollweide, planechart, gnomic

constellations=true&
constellationlabels=true&
constellationboundaries=true&
meteorshowers=true&
showstarlabels=true&
showorbits=true&
ecliptic=true&
meridian=true&
gridlines_az=true&
gridlines_eq=true&
gridlines_gal=true&
showgalaxy=true&
background=rgba(255,255,255,0)&
live=true&
az=309.6831492755458"
-->

<form class="choixProjection" action="">Choix de projection :<br>
  <input type="radio" name="choixProjection" value="polar"> Polar<br>
  <input type="radio" name="choixProjection" value="stereo"> Stereo<br>
  <input type="radio" name="choixProjection" value="lambert"> Lambert<br>
  <input type="radio" name="choixProjection" value="equirectangular"> Equirectangular<br>
  <input type="radio" name="choixProjection" value="mollweide"> Mollweide<br>
  <input type="radio" name="choixProjection" value="planechart"> Planechart<br>
  <input type="radio" name="choixProjection" value="gnomic"> Gnomic<br>
</form>

<div class="zoneSwitchs">
<label class="switch">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label> Lignes des constellations<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Noms des constellations<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Limites des constellations<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Pluie de météorites<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Noms des étoiles<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Orbites<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Ecliptic<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Méridien<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Grille azimuthale<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Grille équatoriale<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Grille galactique<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Galaxie<br>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label> Ciel en live<br>
</div>


<!--
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Lignes des constellations
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Noms des constellations
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Limites des constellations
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Pluie de météorites
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Noms des étoiles
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Orbites
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Ecliptic
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Méridien
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Grille azimuthale
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Grille équatoriale
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Grille galactique
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Galaxie
  <span class="checkmark"></span>
</label><br>
<label class="selectionAffichagePlanet">
  <input type="checkbox" id=""> Ciel en live
  <span class="checkmark"></span>
</label><br>
-->

<?php require("../application/layout/footer.php"); ?>