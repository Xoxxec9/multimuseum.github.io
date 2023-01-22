

/* Please ❤ this if you like it! */


(function($) { "use strict";

	$(function() {
		var header = $(".start-style");
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();
		
			if (scroll >= 10) {
				header.removeClass('start-style').addClass("scroll-on");
			} else {
				header.removeClass("scroll-on").addClass('start-style');
			}
		});
	});		
		
	//Animation
	
	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');
	  });

	


			
	//Menu On Hover
		
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
			if ($(window).width() > 750) {
				var _d=$(e.target).closest('.nav-item');_d.addClass('show');
				setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
				},1);
			}
	});	
	
	//Switch light/dark
	
	$("#switch").on('click', function () {
		if ($("body").hasClass("dark")) {
			$("body").removeClass("dark");
			$("#switch").removeClass("switched");
		}
		else {
			$("body").addClass("dark");
			$("#switch").addClass("switched");
		}
	});  
	
  })(jQuery); 
  (function ($) {
	$(function () {
  
	  var agSlideFlickity = $('.js-flickity-slider').flickity({
		autoPlay: 2000,
		imagesLoaded: true,
		wraparound: true,
		percentPosition: false,
		prevNextButtons: false,
		initialIndex: 5,
		pageDots: false,
		groupCells: 1
	  });
  
	  var agCard = agSlideFlickity.find('.js-carousel-cell .js-card-bg'),
		agTransform = 'string' == typeof document.documentElement.style.transform ? 'transform' : 'WebkitTransform',
		agSlide = agSlideFlickity.data('flickity');
  
	  agSlideFlickity.on('scroll.flickity', function () {
		agSlide.slides.forEach(function (t, e) {
		  var n = agCard[e],
			i = -1 * (t.target + agSlide.x) / 3;
  
		  n.style[agTransform] = 'translateX(' + i + 'px)';
		});
	  });
  
	  agSlideFlickity.on('dragStart.flickity', function (t, e) {
		document.ontouchmove = function (t) {
		  t.preventDefault();
		}
	  });
  
	  agSlideFlickity.on('dragEnd.flickity', function (t, e) {
		document.ontouchmove = function (t) {
		  return true;
		}
	  });
  
	});
  })(jQuery);
  // create a new map
var map = new ol.Map({
	target: 'map',
	view: new ol.View({
	  center: ol.proj.fromLonLat([ 75.05000535457506,15.408007737013905,]),
	  zoom: 12
	})
  });
  
  // add a layer to the map
  var layer = new ol.layer.Tile({
	source: new ol.source.OSM()
  });
  map.addLayer(layer);
  
  // create a marker for each location
  var marker1 = new ol.Feature({
	geometry: new ol.geom.Point(
	  ol.proj.fromLonLat([ 74.99756950552498,15.454459146122556,])
	),
	name: 'Marker 1'
  });
  var marker2 = new ol.Feature({
	geometry: new ol.geom.Point(
	  ol.proj.fromLonLat([ 75.15066706557988,15.354277230971274])
	),
	name: 'Marker 2'
  });
  var marker3 = new ol.Feature({
	geometry: new ol.geom.Point(
	  ol.proj.fromLonLat([ 74.98178388813986,15.445400098941741,])
	),
	name: 'Marker 3'
  });
  /* var marker4 = new ol.Feature({
	geometry: new ol.geom.Point(
	  ol.proj.fromLonLat([longitude, latitude])
	),
	name: 'Marker 4'
  });
  var marker5 = new ol.Feature({
	geometry: new ol.geom.Point(
	  ol.proj.fromLonLat([longitude, latitude])
	),
	name: 'Marker 5'
  }); */
  
  // create a marker style
  var markerStyle = new ol.style.Style({
	image: new ol.style.Icon({
	  src: 'path/to/marker.png',
	  scale: 0.09
	})
  });
  
  // set the marker style to each marker
  marker1.setStyle(markerStyle);
  marker2.setStyle(markerStyle);
  marker3.setStyle(markerStyle);
  /* marker4.setStyle(markerStyle);
  marker5.setStyle(markerStyle); */
  
  // create a vector layer to hold the markers
  var vectorLayer = new ol.layer.Vector({
	source: new ol.source.Vector({
	  features: [marker1, marker2, marker3]
	})
  });
  map.addLayer(vectorLayer);
  
  // create an overlay to hold
  // create an overlay for the marker popups
  var overlay = new ol.Overlay({
	element: document.getElementById('popup'),
	autoPan: true,
	autoPanAnimation: {
	  duration: 250
	}
  });
  map.addOverlay(overlay);
  
  // add a click event to each marker to open the marker's popup
  map.on('pointermove', function(event) {
	var feature = map.forEachFeatureAtPixel(event.pixel, function(feature) {
	  return feature;
	});
	if (feature) {
	  var coordinates = feature.getGeometry().getCoordinates();
	  overlay.setPosition(coordinates);
	  var element = overlay.getElement();
	  element.innerHTML = '<a href="https://www.google.com/maps/place/' + coordinates + '" target="_blank">' + feature.get('name') + '</a>';
	} else {
	  overlay.setPosition(undefined);
	}
  });