<div class="contentPlanetarium">
    <div class="sideBar">
        <form class="choixProjection" action="">Choix de projection :
            <br>
            <input type="radio" name="choixProjection" value="polar" onclick="update('projection', 'polar')"> Polaire
            <br>
            <input type="radio" name="choixProjection" value="stereo" onclick="update('projection', 'stereo')"> Stéréo
            <br>
            <input type="radio" name="choixProjection" value="lambert" onclick="update('projection', 'lambert')"> de Lambert
            <br>
            <input type="radio" name="choixProjection" value="equirectangular" onclick="update('projection', 'equirectangular')"> Equirectangulaire
            <br>
            <input type="radio" name="choixProjection" value="mollweide" onclick="update('projection', 'mollweide')"> de Mollweide
            <br>
            <input type="radio" name="choixProjection" value="planechart" onclick="update('projection', 'planechart')" checked> Plane
            <br>
            <input type="radio" name="choixProjection" value="gnomic" onclick="update('projection', 'gnomic')"> Gnomonique
            <br>
        </form>
        <div class="zoneSwitchs">
            <label class="switch">
                <input type="checkbox" onclick="update('constellations', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Lignes des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('constellationlabels', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Noms des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('constellationboundaries', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Limites des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('meteorsshowers', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Pluie de météorites
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showstars', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Etoiles
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showorbits', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Orbites
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('ecliptic', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Ecliptic
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('meridian', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Méridien
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_az', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Grille azimuthale
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_eq', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Grille équatoriale
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_gal', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Grille galactique
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showgalaxy', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Galaxie
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('live', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Ciel en live
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('negative', this.checked.toString())">
                <span class="slider round"></span>
            </label> Negatif
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showstarlabels', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Nom étoiles
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showposition', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Position
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showdate', this.checked.toString())" checked>
                <span class="slider round"></span>
            </label> Date
            <br>

        </div>
    </div>

    
    <script>
    $(document).ready(function() {
        planetarium = S.virtualsky({
            id: 'starmap1',
        /*
            projection: 'planechart',
            constellations: false,
            //constellationlabels : false,
            gridlines_eq : true,
            gridlines_gal : true,
            gridlines_az : true, //marche en polar
            showplanetlabels : false,
            showstarlabels : true,
            negative : false,
            meridian : true //marche en polar
    */

            longitude : -119.86286000000001,
            latitude : 34.4326,
            projection:'planechart',
            constellations : true,
            constellationlabels : true,
            constellationboundaries : true,
            meteorshowers : true,
            showstarlabels : true,
            showorbits : true,
            ecliptic : true,
            meridian : true,
            gridlines_az : true,
            gridlines_eq : true,
            gridlines_gal : true,
            showgalaxy : true,
            live: true,
            showplanetlabels : false,
        }
        );
        $("#collapse-sidebar").click(function(event) {
            var vir = $("#starmap1");
            vir.attr("class", (vir.attr("class") == "virtualSky") ? "virtualSkyFull" : "virtualSky") ;
            vir.resize();
        })
        addEveryPointers();
    });

    $('button#moveit').on('click',function(){
                planetarium.panTo(56.8690917,24.1053111,3000)
        });

    </script>
    <div id="starmap1" class="virtualSky"></div>
    <button id="collapse-sidebar">Paramètres</button>
</div>