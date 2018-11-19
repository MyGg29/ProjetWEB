function update(property, value) {
            console.log("starting to update " + property + " to " + value);
			if(property == 'projection') planetarium.selectProjection(value);
			if(property == 'mouse') planetarium.mouse = (value == "true") ? true: false;
			if(property == 'keyboard') planetarium.keyboard = (value == "true") ? true: false;
			if(property == 'gradient') planetarium.gradient = (value == "true") ? true: false;
			if(property == 'negative') planetarium.negative = (value == "true") ? true: false;
			if(property == 'cardinalpoints') planetarium.cardinalpoints = (value == "true") ? true: false;
			if(property == 'constellations') planetarium.constellation.lines = (value == "true") ? true: false;
			if(property == 'constellationlabels') planetarium.constellation.labels = (value == "true") ? true: false;
			if(property == 'constellationboundaries') planetarium.constellation.boundaries = (value == "true") ? true: false;
			if(property == 'meteorshowers') planetarium.meteorshowers = (value == "true") ? true: false;
			if(property == 'showstars') planetarium.showstars = (value == "true") ? true: false;
			if(property == 'showstarlabels') planetarium.showstarlabels = (value == "true") ? true: false;
			if(property == 'showplanets') planetarium.showplanets = (value == "true") ? true: false;
			if(property == 'showplanetlabels') planetarium.showplanetlabels = (value == "true") ? true: false;
			if(property == 'showorbits') planetarium.showorbits = (value == "true") ? true: false;
			if(property == 'showdate') planetarium.showdate = (value == "true") ? true: false;
			if(property == 'showposition') planetarium.showposition = (value == "true") ? true: false;
			if(property == 'ecliptic') planetarium.ecliptic = (value == "true") ? true: false;
			if(property == 'meridian') planetarium.meridian = (value == "true") ? true: false;
			if(property == 'gridlines_az') planetarium.grid.az = (value == "true") ? true: false;
			if(property == 'gridlines_eq') planetarium.grid.eq = (value == "true") ? true: false;
			if(property == 'gridlines_gal') planetarium.grid.gal = (value == "true") ? true: false;
			if(property == 'showgalaxy') planetarium.showgalaxy = (value == "true") ? true: false;
			if(property == 'clock'){
				if(value){
					planetarium.clock = new Date(value);
					changedtime = true;
				}else{
					planetarium.clock = new Date();
					changedtime = false;
				}
            }
            
			if(property == 'dimensions'){
				dim = value.split('x');
				if(dim.length == 2){
					planetarium.resize(dim[0],dim[1]);
					el = document.getElementById(planetarium.id+'');
					$('#'+planetarium.id+'').css({'height':planetarium.tall,'width':planetarium.wide})
				}
            }
            /*
            In stellarisen, we dont resize on param change
			el = document.getElementById('dimensions');
            el.value = planetarium.wide+'x'+planetarium.tall;
			el = document.getElementById('az_off');
			el.value = ((planetarium.az_off+180)%360);

			el = document.getElementById('position');
			el.value = (planetarium.latitude*planetarium.r2d)+','+(planetarium.longitude*planetarium.r2d);
            */
			if(property == 'position'){
				pos = value.split(',');
				planetarium.setLatitude(pos[0]);
				planetarium.setLongitude(pos[1]);
			}
			if(property == 'background') planetarium.background = value;
			if(property == 'color') planetarium.color = value;
			if(property == 'magnitude') planetarium.magnitude = parseFloat(value);
			if(property == 'scalestars') planetarium.scalestars = parseFloat(value);

            if(property == 'az_off') planetarium.az_off = value;

			//if(typeof jQuery != 'undefined') $('#'+planetarium.id).unbind('click').unbind('mousemove').unbind('mousedown').unbind('mouseup');
			//if(typeof jQuery != 'undefined'){
			//	$('#'+planetarium.id).bind('mouseup',function(){
			//		update();
			//	});
			//}

            planetarium.draw();

            if(property == 'live') planetarium.liveSky();
}

function addEveryPointers() {
    planetarium.addPointer({
        'ra': 83.8220792,
        'dec': -5.3911111,
        'label': 'Orion Nebula',
        'img': 'http://server7.sky-map.org/imgcut?survey=DSS2&w=128&h=128&ra=5.58813861333333&de=-5.3911111&angle=1.25&output=PNG',
        'url': 'http://simbad.u-strasbg.fr/simbad/sim-id?Ident=M42',
        'credit': 'Wikisky',
        'colour': 'rgb(255,220,220)'
    });

}
