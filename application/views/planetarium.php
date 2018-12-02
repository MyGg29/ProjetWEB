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


        // Se rendre aux coordonnées des objets de Messier (amas)
        //En utilisant les coordonnées des amas
        $('a#150').on('click',function(){planetarium.panTo(56.8690917, 24.1053111,3000)});

        $('a#1').on('click',function(){planetarium.panTo(83.6330833, 22.014500,3000)});

        $('a#2').on('click',function(){planetarium.panTo(323.362583, -0.823250,3000)});

        $('a#3').on('click',function(){planetarium.panTo(205.548416, 28.377277,3000)});

        $('a#4').on('click',function(){planetarium.panTo(245.896750, -26.52575,3000)});

        $('a#5').on('click',function(){planetarium.panTo(229.638416, 2.0810278,3000)});

        $('a#6').on('click',function(){planetarium.panTo(265.083300, -32.25330,3000)});

        $('a#7').on('click',function(){planetarium.panTo(268.462500, -34.79330,3000)});

        $('a#8').on('click',function(){planetarium.panTo(270.904200, -24.38670,3000)});

        $('a#9').on('click',function(){planetarium.panTo(259.799083, -18.51625,3000)});

        $('a#10').on('click',function(){planetarium.panTo(254.287708, -4.100305,3000)});

        $('a#11').on('click',function(){planetarium.panTo(282.770800, -6.270000,3000)});

        $('a#12').on('click',function(){planetarium.panTo(251.809083, -1.948527,3000)});

        $('a#13').on('click',function(){planetarium.panTo(250.423475, 36.461319,3000)});

        $('a#14').on('click',function(){planetarium.panTo(264.400625, -3.245916,3000)});

        $('a#15').on('click',function(){planetarium.panTo(322.493041, 12.167000,3000)});

        $('a#16').on('click',function(){planetarium.panTo(274.700000, -13.80670,3000)});

        $('a#17').on('click',function(){planetarium.panTo(275.195800, -16.17170,3000)});

        $('a#18').on('click',function(){planetarium.panTo(274.991700, -17.10170,3000)});

        $('a#19').on('click',function(){planetarium.panTo(255.657041, -26.26794,3000)});

        $('a#20').on('click',function(){planetarium.panTo(270.675000, -22.97170,3000)});

        $('a#21').on('click',function(){planetarium.panTo(271.054200, -22.49000,3000)});

        $('a#22').on('click',function(){planetarium.panTo(279.099750, -23.90475,3000)});

        $('a#23').on('click',function(){planetarium.panTo(269.266700, -18.98500,3000)});

        $('a#24').on('click',function(){planetarium.panTo(274.200000, -18.55000,3000)});

        $('a#25').on('click',function(){planetarium.panTo(277.945800, -19.11670,3000)});

        $('a#26').on('click',function(){planetarium.panTo(281.325000, -9.383300,3000)});

        $('a#27').on('click',function(){planetarium.panTo(299.901579, 22.721041,3000)});

        $('a#28').on('click',function(){planetarium.panTo(276.137041, -24.86983,3000)});

        $('a#29').on('click',function(){planetarium.panTo(305.983300, 38.523300,3000)});

        $('a#30').on('click',function(){planetarium.panTo(325.092166, -23.17986,3000)});

        $('a#31').on('click',function(){planetarium.panTo(10.6847083, 41.268750,3000)});

        $('a#32').on('click',function(){planetarium.panTo(10.6742708, 40.865169,3000)});

        $('a#33').on('click',function(){planetarium.panTo(23.4621000, 30.659941,3000)});

        $('a#34').on('click',function(){planetarium.panTo(40.5208000, 42.761700,3000)});

        $('a#35').on('click',function(){planetarium.panTo(92.2250000, 24.333300,3000)});

        $('a#36').on('click',function(){planetarium.panTo(84.0750000, 34.140000,3000)});

        $('a#37').on('click',function(){planetarium.panTo(88.0750000, 32.553300,3000)});

        $('a#38').on('click',function(){planetarium.panTo(82.1792000, 35.855000,3000)});

        $('a#39').on('click',function(){planetarium.panTo(322.950000, 48.433300,3000)});

        $('a#40').on('click',function(){planetarium.panTo(185.552208, 58.082944,3000)});

        $('a#41').on('click',function(){planetarium.panTo(101.504200, -20.75670,3000)});

        $('a#42').on('click',function(){planetarium.panTo(83.8220792, -5.391111,3000)});

        $('a#43').on('click',function(){planetarium.panTo(83.8792000, -5.270000,3000)});

        $('a#44').on('click',function(){planetarium.panTo(130.100000, 19.666700,3000)});

        $('a#45').on('click',function(){planetarium.panTo(56.7500000, 24.116700,3000)});

        $('a#46').on('click',function(){planetarium.panTo(115.441700, -14.81000,3000)});

        $('a#47').on('click',function(){planetarium.panTo(114.145800, -14.48330,3000)});

        $('a#48').on('click',function(){planetarium.panTo(123.429200, -5.750000,3000)});

        $('a#49').on('click',function(){planetarium.panTo(187.444991, 8.0004111,3000)});

        $('a#50').on('click',function(){planetarium.panTo(105.697920, -8.337780,3000)});

        $('a#51').on('click',function(){planetarium.panTo(202.469575, 47.195258,3000)});

        $('a#52').on('click',function(){planetarium.panTo(351.200000, 61.593300,3000)});

        $('a#53').on('click',function(){planetarium.panTo(198.230208, 18.168166,3000)});

        $('a#54').on('click',function(){planetarium.panTo(283.763875, -30.47986,3000)});

        $('a#55').on('click',function(){planetarium.panTo(294.998791, -30.96475,3000)});

        $('a#56').on('click',function(){planetarium.panTo(289.148208, 30.183472,3000)});

        $('a#57').on('click',function(){planetarium.panTo(283.396162, 33.029175,3000)});

        $('a#58').on('click',function(){planetarium.panTo(189.431654, 11.818088,3000)});

        $('a#59').on('click',function(){planetarium.panTo(190.509675, 11.646930,3000)});

        $('a#60').on('click',function(){planetarium.panTo(190.916700, 11.552611,3000)});

        $('a#61').on('click',function(){planetarium.panTo(185.478958, 4.4735889,3000)});

        $('a#62').on('click',function(){planetarium.panTo(255.302500, -30.11236,3000)});

        $('a#63').on('click',function(){planetarium.panTo(198.955537, 42.029288,3000)});

        $('a#64').on('click',function(){planetarium.panTo(194.182066, 21.682658,3000)});

        $('a#65').on('click',function(){planetarium.panTo(169.733154, 13.092211,3000)});

        $('a#66').on('click',function(){planetarium.panTo(170.062608, 12.991288,3000)});

        $('a#67').on('click',function(){planetarium.panTo(132.825000, 11.800000,3000)});

        $('a#68').on('click',function(){planetarium.panTo(189.866583, -26.74405,3000)});

        $('a#69').on('click',function(){planetarium.panTo(277.846250, -32.34808,3000)});

        $('a#70').on('click',function(){planetarium.panTo(280.803166, -32.29211,3000)});

        $('a#71').on('click',function(){planetarium.panTo(298.443708, 18.779194,3000)});

        $('a#72').on('click',function(){planetarium.panTo(313.365416, -12.53730,3000)});

        $('a#73').on('click',function(){planetarium.panTo(314.750000, -12.63300,3000)});

        $('a#74').on('click',function(){planetarium.panTo(24.1740500, 15.783461,3000)});

        $('a#75').on('click',function(){planetarium.panTo(301.520170, -21.92226,3000)});

        $('a#76').on('click',function(){planetarium.panTo(25.5820417, 51.575472,3000)});

        $('a#77').on('click',function(){planetarium.panTo(40.6698792, -0.013288,3000)});

        $('a#78').on('click',function(){planetarium.panTo(86.6908292, 0.0791694,3000)});

        $('a#79').on('click',function(){planetarium.panTo(81.0441250, -24.52425,3000)});

        $('a#80').on('click',function(){planetarium.panTo(244.260041, -22.97608,3000)});

        $('a#81').on('click',function(){planetarium.panTo(148.888220, 69.065294,3000)});

        $('a#82').on('click',function(){planetarium.panTo(148.968458, 69.679702,3000)});

        $('a#83').on('click',function(){planetarium.panTo(204.253829, -29.86576,3000)});

        $('a#84').on('click',function(){planetarium.panTo(186.265595, 12.886983,3000)});

        $('a#85').on('click',function(){planetarium.panTo(186.350220, 18.191080,3000)});

        $('a#86').on('click',function(){planetarium.panTo(186.549225, 12.945969,3000)});

        $('a#87').on('click',function(){planetarium.panTo(187.705929, 12.391122,3000)});

        $('a#88').on('click',function(){planetarium.panTo(187.996733, 14.420411,3000)});

        $('a#89').on('click',function(){planetarium.panTo(188.915900, 12.556300,3000)});

        $('a#90').on('click',function(){planetarium.panTo(189.207566, 13.162869,3000)});

        $('a#91').on('click',function(){planetarium.panTo(188.860125, 14.496319,3000)});

        $('a#92').on('click',function(){planetarium.panTo(259.280791, 43.135944,3000)});

        $('a#93').on('click',function(){planetarium.panTo(116.125000, -23.85670,3000)});

        $('a#94').on('click',function(){planetarium.panTo(192.721450, 41.120152,3000)});

        $('a#95').on('click',function(){planetarium.panTo(160.990554, 11.703611,3000)});

        $('a#96').on('click',function(){planetarium.panTo(161.690600, 11.819938,3000)});

        $('a#97').on('click',function(){planetarium.panTo(168.698754, 55.019088,3000)});

        $('a#98').on('click',function(){planetarium.panTo(183.451216, 14.900469,3000)});

        $('a#99').on('click',function(){planetarium.panTo(184.706770, 14.416488,3000)});

        $('a#100').on('click',function(){planetarium.panTo(185.728745, 15.822380,3000)});

        $('a#101').on('click',function(){planetarium.panTo(210.802429, 54.348750,3000)});

        $('a#102').on('click',function(){planetarium.panTo(226.623170, 55.763308,3000)});

        $('a#103').on('click',function(){planetarium.panTo(23.3458000, 60.650000,3000)});

        $('a#104').on('click',function(){planetarium.panTo(189.997633, -11.62305,3000)});

        $('a#105').on('click',function(){planetarium.panTo(161.956666, 12.581630,3000)});

        $('a#106').on('click',function(){planetarium.panTo(184.740083, 47.303719,3000)});

        $('a#107').on('click',function(){planetarium.panTo(248.132750, -13.05377,3000)});

        $('a#108').on('click',function(){planetarium.panTo(167.879041, 55.674111,3000)});

        $('a#109').on('click',function(){planetarium.panTo(179.399933, 53.374519,3000)});

        $('a#110').on('click',function(){planetarium.panTo(10.0919792, 41.685300,3000)});


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