/**
 * @author alteredq / http://alteredqualia.com/
 * @author mr.doob / http://mrdoob.com/
 */

var Detector = {

	canvas: !! window.CanvasRenderingContext2D,
	webgl: ( function () { try { var canvas = document.createElement( 'canvas' ); return !! window.WebGLRenderingContext && ( canvas.getContext( 'webgl' ) || canvas.getContext( 'experimental-webgl' ) ); } catch( e ) { return false; } } )(),
	workers: !! window.Worker,
	fileapi: window.File && window.FileReader && window.FileList && window.Blob,

	getWebGLErrorMessage: function () {

		var element = document.createElement( 'div' );
		element.className = 'webgl-error';

		if ( !this.webgl ) {

			element.innerHTML = window.WebGLRenderingContext ? [
				'Votre carte graphique ne permet pas d\afficher les éléments <a href="http://khronos.org/webgl/wiki/Getting_a_WebGL_Implementation"> WebGL</a>. <br /> ', 'Découvrez comment l\'obtenir <a href="http://get.webgl.org/"> ici</a>.'
			].join( '\n' ) : [
				'Votre navigateur ne permet pas d\afficher les éléments <a href="http://khronos.org/webgl/wiki/Getting_a_WebGL_Implementation"> WebGL</a>. <br /> ', 'Découvrez comment l\'obtenir <a href="http://get.webgl.org/"> ici</a>.'
			].join( '\n' );

		}

		return element;

	},

	addGetWebGLMessage: function (parent ) {

		parent.appendChild( Detector.getWebGLErrorMessage() );

	}

};