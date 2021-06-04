// Animação css imagem de fundo
$(document).ready(function(){
	var mouseX, mouseY;
	var ww = $( window ).width();
	var wh = $( window ).height();
	var traX, traY;
	$(document).mousemove(function(e){
	  mouseX = e.pageX;
	  mouseY = e.pageY;
	  traX = ((4 * mouseX) / 570) + 40;
	  traY = ((4 * mouseY) / 570) + 50;
	  
	  $(".title").css({"background-position": traX + "%" + traY + "%"});
	});
  });
  

//INIT WOW JS
new WOW().init();


//SCRIPT NAVBAR
$(document).ready(function () {
	if ($(window).width() > 991){
	$('.navbar-light .d-menu').hover(function () {
			$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
		}, function () {
			$(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
		});
		}
	});
//END SCRIPT NAVBAR




// PLAYER VÍDEO
$('#play-video').on('click', function(e){
	e.preventDefault();
	$('#video-overlay').addClass('open');
	$("#video-overlay").append('<iframe width="960" height="715" src="https://www.youtube.com/embed/AaQL-aMhhoo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
  });
  
  $('.video-overlay, .video-overlay-close').on('click', function(e){
	e.preventDefault();
	close_video();
  });
  
  $(document).keyup(function(e){
	if(e.keyCode === 27) { close_video(); }
  });
  
  function close_video() {
	$('.video-overlay.open').removeClass('open').find('iframe').remove();
  };

  
  function MostrarREDD1(){
	document.getElementById("redd1").style.display = 'block';
	document.getElementById("redd2").style.display = 'none';
	document.getElementById("redd3").style.display = 'none';
	document.getElementById("divredd2").style.filter = "grayscale(1)";
	document.getElementById("divredd1").style.filter = "grayscale(0)";
	document.getElementById("divredd3").style.filter = "grayscale(1)";
}
  
function MostrarREDD2(){
	  document.getElementById("redd2").style.display = 'block';
	  document.getElementById("redd1").style.display = 'none';
	  document.getElementById("redd3").style.display = 'none';
	  document.getElementById("divredd1").style.filter = "grayscale(1)";
	  document.getElementById("divredd2").style.filter = "grayscale(0)";
	  document.getElementById("divredd3").style.filter = "grayscale(1)";
  }

function MostrarREDD3(){
	document.getElementById("redd3").style.display = 'block';
	document.getElementById("redd1").style.display = 'none';
	document.getElementById("redd2").style.display = 'none';
	document.getElementById("divredd1").style.filter = "grayscale(1)";
	document.getElementById("divredd3").style.filter = "grayscale(0)";
	document.getElementById("divredd2").style.filter = "grayscale(1)";
}
