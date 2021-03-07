$(".linea").dblclick(function(){
		$(this).remove();
	});

	function cambiarG(){
		var URLactual = window.location;
		URLactual=String(URLactual);
		var res = URLactual.replace("producciones2", "producciones");
		window.location.href = res;
	}

	$("#footing").click(function(){
		$("#viewport").attr("content", "width=device-width, initial-scale=0");
		var src = document.getElementById("paquete");
		takeHighResScreenshot(src, 2,0);
	});

	$(function() { 
		$("#crearimagen").click(function() { 
			$("#viewport").attr("content", "width=device-width, initial-scale=0");
			var src = document.getElementById("paquete");
			takeHighResScreenshot(src, 2,1);
			
		});
	});

	function takeHighResScreenshot(srcEl, scaleFactor,accion) {
		$(".modal-body").html("");

		var URLactual             = window.location;
		URLactual                 = String(URLactual);
		URLactual                 = URLactual.replace("https://www.animecream.com/producciones2", "animecream.com");
		URLactual                 = URLactual.replace("https://", "");
		URLactual                 = URLactual.replace("/", "-");
		URLactual                 = URLactual.replace("?", "-");
		URLactual                 = URLactual.replace("=", "-");
		URLactual                 = URLactual.substring(URLactual, 51)
		
		var originalWidth         = srcEl.offsetWidth;
		var originalHeight        = srcEl.offsetHeight;
		
		srcEl.style.width         = originalWidth + "px";
		srcEl.style.height        = originalHeight + "px";
		
		srcEl.style.position      = "absolute";
		srcEl.style.top           = "0";
		srcEl.style.left          = "0";
		
		var scaledCanvas          = document.createElement("canvas");
		scaledCanvas.width        = originalWidth * scaleFactor;
		scaledCanvas.height       = originalHeight * scaleFactor;
		scaledCanvas.style.width  = originalWidth + "px";
		scaledCanvas.style.height = originalHeight + "px";
		var scaledContext         = scaledCanvas.getContext("2d");
		scaledContext.scale(scaleFactor, scaleFactor);

		if (accion==0) {
			html2canvas(document.getElementById("paquete"), {
				canvas: scaledCanvas,
				onrendered: function(canvas) {
				// document.body.appendChild(canvas);
				$(".modal-body").append(canvas);
				$( "#paquete" ).removeAttr( 'style' );
				// console.log(canvas.toDataURL());

				canvas.toBlob(function(blob) {
					/*saveAs(blob, URLactual+".png");*/ 
				});	
			}

		});

		}else{
			html2canvas(document.getElementById("paquete"), {
				canvas: scaledCanvas,
				onrendered: function(canvas) {
				// document.body.appendChild(canvas);
				/*$(".modal-body").append(canvas);*/
				$( "#paquete" ).removeAttr( 'style' );

				canvas.toBlob(function(blob) {
					saveAs(blob, URLactual+".png"); 
				});	
			}

		});

		}

		setTimeout(function(){
			$("#viewport").attr("content", "width=device-width, initial-scale=1");
		}, 1700);

	};