var current_pageInvetario=1;
$(document).ready(function (){
	$('#cmdRecargarInventario').click(function(){
		$.ajax({
			url:'/api/inventario',
			method:'get',
			data:{'page':current_pageInvetario},

		})
 		.done(function( data) {
 			if(data==""){
				alert("La sesión ha expirado");
				location.href='/';
			}
 			console.log(data);
			$('.paginaInventario').removeClass('active');
			$('#paginaInvenatario1').children('a').html('');
			$('#paginaInvenatario2').children('a').html('');
			$('#paginaInvenatario3').children('a').html('');
     		var result=$.parseJSON(data);
			current_pageInvetario=result.current_page;
			if(result.current_page==1){
				$('#paginaInvenatario1').addClass('active');
				var index=1;
				for(var i=current_pageInvetario;i<=result.last_page;i++){
					$('#paginaInvenatario' + index).children('a').html(i);
					index++;
				}
			}
			else if(result.current_page==result.last_page){
				$('#paginaInvenatario3').addClass('active');
				var index=3;
				for(var i=current_pageInvetario;i>=1;i--){
					$('#paginaInvenatario' + index).children('a').html(i);
					index--;
				}
			}
			else{
				$('#paginaInvenatario2').addClass('active');
				var index=1;
				for(var i=current_pageInvetario-1;i<=result.last_page;i++){
					$('#paginaInvenatario' + index).children('a').html(i);
					index++;
				}
			}
			$('.carro').remove();
			var carros=result.data;
			for(var i=0;i<carros.length;i++){
				var carro=agregarCardInventario(carros[i]);
				$('#carrosContainer').append(carro);
			}

			$('.carousel').carousel({
				interval: 2000
			});

			$('#inventarioContainer').block({
				message: '<div class="icon-spinner9 icon-spin icon-lg"></div>',
				timeout: 10, //unblock after 2 seconds
				overlayCSS: {
					backgroundColor: '#FFF',
					cursor: 'wait',
				},
				css: {
					border: 0,
					padding: 0,
					backgroundColor: 'none'
				}

			});

 		})
 		.fail(function( jqXHR, textStatus, errorThrown ) {
     		console.log(jqXHR);
			console.log(jqXHR.responseText);
		});
	});

	$('.paginaInventario').click(function(e){
		e.preventDefault();
		if(parseInt($(this).children('a').html())!=current_pageInvetario){
			current_pageInvetario=parseInt($(this).children('a').html());
			$('#cmdRecargarInventario').click();
		}
	});

	$('#cmdRecargarInventario').click();

});

function agregarCardInventario(carro){
	var container=$('<div style="overflow: hidden" class="col-xl-4 col-md-6 carro" id="car' + carro.id + '"></div>');
	var card=$('<div class="card"></div>');
	var cardHeader=$('<div class="card-header"><h4 class="card-title">' + carro.marca + ' ' + carro.modelo + ' ' + carro.anio + '</h4></div>');
	var cardBody=$('<div class="card-body"></div>');

	var carousel=$('<div id="carouselCarro' + carro.id + '" class="carousel slide" data-ride="carousel"></div>');
	var imgs=$('<div  class="carousel-inner" role="listbox"></div>');
	var item;
	var img;
	item=$('<div class="carousel-item" style="display:inline-block;width:100%;height: 250px;"></div>');
	img=$('<img style="width:100%;" src="http://autohispano.com/images/carros/' + carro.id + '/' + 0 +'">');
	item.append(img);
	imgs.append(item);
	carousel.append(imgs);
	cardBody.append(carousel);

	var cardBlock=$('<div class="card-block">' + carro.comentarios + '</div>');

	cardBody.append(cardBlock);

	card.append(cardHeader).append(cardBody);
	container.append(card);

	return container;
}