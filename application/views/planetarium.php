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


        // Se rendre aux coordonnées des amas
        // Trouvables dans messier.json
        $('a#150').on('click',function(){
                planetarium.panTo(56.8690917,24.1053111,3000)
        });
        $('a#1').on('click',function(){
                planetarium.panTo(83.6330833,22.0145000,3000)
        });



        $('a#82').on('click',function(){
                planetarium.panTo(148.9684583,69.6797028,3000)
        });
        $('a#83').on('click',function(){
                planetarium.panTo(204.2538292,-29.8657611,3000)
        });


    });


    </script>

    <div id="starmap1" class="virtualSky"></div>

    <button id="collapse-sidebar">Paramètres</button>

     <div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    Aller vers... (Vue Gnomonique)
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#" id="150">Pléiades</a>
    <a class="dropdown-item" href="#" id="1">M1</a>
    <a class="dropdown-item" href="#" id="2">M2</a>
    <a class="dropdown-item" href="#" id="3">M3</a>
    <a class="dropdown-item" href="#" id="4">M4</a>
    <a class="dropdown-item" href="#" id="5">M5</a>
    <a class="dropdown-item" href="#" id="6">M6</a>
    <a class="dropdown-item" href="#" id="7">M7</a>
    <a class="dropdown-item" href="#" id="8">M8</a>
    <a class="dropdown-item" href="#" id="9">M9</a>
    <a class="dropdown-item" href="#" id="10">M10</a>
    <a class="dropdown-item" href="#" id="11">M11</a>
    <a class="dropdown-item" href="#" id="12">M12</a>
    <a class="dropdown-item" href="#" id="13">M13</a>
    <a class="dropdown-item" href="#" id="14">M14</a>
    <a class="dropdown-item" href="#" id="15">M15</a>
    <a class="dropdown-item" href="#" id="16">M16</a>
    <a class="dropdown-item" href="#" id="17">M17</a>
    <a class="dropdown-item" href="#" id="18">M18</a>
    <a class="dropdown-item" href="#" id="19">M19</a>
    <a class="dropdown-item" href="#" id="20">M20</a>
    <a class="dropdown-item" href="#" id="21">M21</a>
    <a class="dropdown-item" href="#" id="22">M22</a>
    <a class="dropdown-item" href="#" id="23">M23</a>
    <a class="dropdown-item" href="#" id="24">M24</a>
    <a class="dropdown-item" href="#" id="25">M25</a>
    <a class="dropdown-item" href="#" id="26">M26</a>
    <a class="dropdown-item" href="#" id="27">M27</a>
    <a class="dropdown-item" href="#" id="28">M28</a>
    <a class="dropdown-item" href="#" id="29">M29</a>
    <a class="dropdown-item" href="#" id="30">M30</a>
    <a class="dropdown-item" href="#" id="31">M31</a>
    <a class="dropdown-item" href="#" id="32">M32</a>
    <a class="dropdown-item" href="#" id="33">M33</a>
    <a class="dropdown-item" href="#" id="34">M34</a>
    <a class="dropdown-item" href="#" id="35">M35</a>
    <a class="dropdown-item" href="#" id="36">M36</a>
    <a class="dropdown-item" href="#" id="37">M37</a>
    <a class="dropdown-item" href="#" id="38">M38</a>
    <a class="dropdown-item" href="#" id="39">M39</a>
    <a class="dropdown-item" href="#" id="40">M40</a>
    <a class="dropdown-item" href="#" id="41">M41</a>
    <a class="dropdown-item" href="#" id="42">M42</a>
    <a class="dropdown-item" href="#" id="43">M43</a>
    <a class="dropdown-item" href="#" id="44">M44</a>
    <a class="dropdown-item" href="#" id="45">M45</a>
    <a class="dropdown-item" href="#" id="46">M46</a>
    <a class="dropdown-item" href="#" id="47">M47</a>
    <a class="dropdown-item" href="#" id="48">M48</a>
    <a class="dropdown-item" href="#" id="49">M49</a>
    <a class="dropdown-item" href="#" id="50">M50</a>
    <a class="dropdown-item" href="#" id="51">M51</a>
    <a class="dropdown-item" href="#" id="52">M52</a>
    <a class="dropdown-item" href="#" id="53">M53</a>
    <a class="dropdown-item" href="#" id="54">M54</a>
    <a class="dropdown-item" href="#" id="55">M55</a>
    <a class="dropdown-item" href="#" id="56">M56</a>
    <a class="dropdown-item" href="#" id="57">M57</a>
    <a class="dropdown-item" href="#" id="58">M58</a>
    <a class="dropdown-item" href="#" id="59">M59</a>
    <a class="dropdown-item" href="#" id="60">M60</a>
    <a class="dropdown-item" href="#" id="61">M61</a>
    <a class="dropdown-item" href="#" id="62">M62</a>
    <a class="dropdown-item" href="#" id="63">M63</a>
    <a class="dropdown-item" href="#" id="64">M64</a>
    <a class="dropdown-item" href="#" id="65">M65</a>
    <a class="dropdown-item" href="#" id="66">M66</a>
    <a class="dropdown-item" href="#" id="67">M67</a>
    <a class="dropdown-item" href="#" id="68">M68</a>
    <a class="dropdown-item" href="#" id="69">M69</a>
    <a class="dropdown-item" href="#" id="70">M70</a>
    <a class="dropdown-item" href="#" id="71">M71</a>
    <a class="dropdown-item" href="#" id="72">M72</a>
    <a class="dropdown-item" href="#" id="73">M73</a>
    <a class="dropdown-item" href="#" id="74">M74</a>
    <a class="dropdown-item" href="#" id="75">M75</a>
    <a class="dropdown-item" href="#" id="76">M76</a>
    <a class="dropdown-item" href="#" id="77">M77</a>
    <a class="dropdown-item" href="#" id="78">M78</a>
    <a class="dropdown-item" href="#" id="79">M79</a>
    <a class="dropdown-item" href="#" id="80">M80</a>
    <a class="dropdown-item" href="#" id="81">M81</a>
    <a class="dropdown-item" href="#" id="82">M82</a>
    <a class="dropdown-item" href="#" id="83">M83</a>
    <a class="dropdown-item" href="#" id="84">M84</a>
    <a class="dropdown-item" href="#" id="85">M85</a>
    <a class="dropdown-item" href="#" id="86">M86</a>
    <a class="dropdown-item" href="#" id="87">M87</a>
    <a class="dropdown-item" href="#" id="88">M88</a>
    <a class="dropdown-item" href="#" id="89">M89</a>
    <a class="dropdown-item" href="#" id="90">M90</a>
    <a class="dropdown-item" href="#" id="91">M91</a>
    <a class="dropdown-item" href="#" id="92">M92</a>
    <a class="dropdown-item" href="#" id="93">M93</a>
    <a class="dropdown-item" href="#" id="94">M94</a>
    <a class="dropdown-item" href="#" id="95">M95</a>
    <a class="dropdown-item" href="#" id="96">M96</a>
    <a class="dropdown-item" href="#" id="97">M97</a>
    <a class="dropdown-item" href="#" id="98">M98</a>
    <a class="dropdown-item" href="#" id="99">M99</a>
    <a class="dropdown-item" href="#" id="100">M100</a>
    <a class="dropdown-item" href="#" id="101">M101</a>
    <a class="dropdown-item" href="#" id="102">M102</a>
    <a class="dropdown-item" href="#" id="103">M103</a>
    <a class="dropdown-item" href="#" id="104">M104</a>
    <a class="dropdown-item" href="#" id="105">M105</a>
    <a class="dropdown-item" href="#" id="106">M106</a>
    <a class="dropdown-item" href="#" id="107">M107</a>
    <a class="dropdown-item" href="#" id="108">M108</a>
    <a class="dropdown-item" href="#" id="109">M109</a>
    <a class="dropdown-item" href="#" id="110">M110</a>
  </div>
</div> 
    
</div>