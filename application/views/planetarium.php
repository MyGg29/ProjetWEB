<div class="contentPlanetarium">
    <div class="sideBar">
        <form class="choixProjection" action="">Choix de projection :
            <br>
            <input type="radio" name="choixProjection" value="polar" onclick="update('projection', 'polar')"> Polar
            <br>
            <input type="radio" name="choixProjection" value="stereo" onclick="update('projection', 'stereo')"> Stereo
            <br>
            <input type="radio" name="choixProjection" value="lambert" onclick="update('projection', 'lambert')"> Lambert
            <br>
            <input type="radio" name="choixProjection" value="equirectangular" onclick="update('projection', 'equirectangular')"> Equirectangular
            <br>
            <input type="radio" name="choixProjection" value="mollweide" onclick="update('projection', 'mollweide')"> Mollweide
            <br>
            <input type="radio" name="choixProjection" value="planechart" onclick="update('projection', 'planechart')"> Planechart
            <br>
            <input type="radio" name="choixProjection" value="gnomic" onclick="update('projection', 'gnomic')"> Gnomic
            <br>
        </form>
        <div class="zoneSwitchs">
            <label class="switch">
                <input type="checkbox" onclick="update('constellations', this.checked.toString())">
                <span class="slider round"></span>
            </label> Lignes des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('constellationlabels', this.checked.toString())">
                <span class="slider round"></span>
            </label> Noms des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('constellationboundaries', this.checked.toString())">
                <span class="slider round"></span>
            </label> Limites des constellations
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('meteorsshowers', this.checked.toString())">
                <span class="slider round"></span>
            </label> Pluie de météorites
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showstars', this.checked.toString())">
                <span class="slider round"></span>
            </label> Etoiles
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showorbits', this.checked.toString())">
                <span class="slider round"></span>
            </label> Orbites
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('eliptic', this.checked.toString())">
                <span class="slider round"></span>
            </label> Ecliptic
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('meridian', this.checked.toString())">
                <span class="slider round"></span>
            </label> Méridien
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_az', this.checked.toString())">
                <span class="slider round"></span>
            </label> Grille azimuthale
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_eq', this.checked.toString())">
                <span class="slider round"></span>
            </label> Grille équatoriale
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('gridlines_gal', this.checked.toString())">
                <span class="slider round"></span>
            </label> Grille galactique
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('showgalaxy', this.checked.toString())">
                <span class="slider round"></span>
            </label> Galaxie
            <br>
            <label class="switch">
                <input type="checkbox" onclick="update('live', this.checked.toString())">
                <span class="slider round"></span>
            </label> Ciel en live
            <br>
        </div>
    </div>

    
    <script>
    $(document).ready(function() {
        planetarium = S.virtualsky({
                id: 'starmap1',
                projection: 'planechart',
                constellations: false,
                constellationlabels : false,
                gridlines_eq : true,
                showplanetlabels: false,
                showstarlabels: true
        }
        );
        $("#collapse-sidebar").click(function(event) {
            var vir = $("#starmap1");
            vir.attr("class", (vir.attr("class") == "virtualSky") ? "virtualSkyFull" : "virtualSky") ;
            vir.resize();
        })
        addEveryPointers();
    });
    </script>
    <div id="starmap1" class="virtualSky"></div>
    <button id="collapse-sidebar">Paramètres</button>
</div>