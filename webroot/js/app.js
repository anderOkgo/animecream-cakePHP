  !function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
  var nombreURL;
  $(".targeta").dblclick(function(){
    src = $(this)[0];
    nombreURL=$(this).find( "h3" ).text();
    //takeHighResScreenshot(src, 2,1);
  });


    function takeHighResScreenshot(srcEl, scaleFactor,accion) {

    var URLactual             = window.location;
    URLactual                 = String(URLactual);
    URLactual                 = URLactual.replace("https://www.animecream.com/producciones2", "animecream.com");
    URLactual                 = URLactual.replace("https://", "");
    URLactual                 = URLactual.replace("/", "-");
    URLactual                 = URLactual.replace("?", "-");
    URLactual                 = URLactual.replace("=", "-");
    URLactual                 = URLactual.substring(URLactual, 51)

    var originalWidth = srcEl.offsetWidth;
    var originalHeight = srcEl.offsetHeight;

    srcEl.style.width = originalWidth + "px";
    srcEl.style.height = originalHeight + "px";

    srcEl.style.position = "absolute";
    srcEl.style.top = "0";
    srcEl.style.left = "0";

    var scaledCanvas = document.createElement("canvas");
    scaledCanvas.width = originalWidth * scaleFactor;
    scaledCanvas.height = originalHeight * scaleFactor;
    scaledCanvas.style.width = originalWidth + "px";
    scaledCanvas.style.height = originalHeight + "px";
    var scaledContext = scaledCanvas.getContext("2d");
    scaledContext.scale(scaleFactor, scaleFactor);

    if (accion==0) {
      html2canvas(srcEl, {
        canvas: scaledCanvas,
        onrendered: function(canvas) {
        // document.body.appendChild(canvas);
        $(".modal-body").append(canvas);
        srcEl.removeAttr( 'style' );
        // console.log(canvas.toDataURL());

        canvas.toBlob(function(blob) {
          /*saveAs(blob, URLactual+".png");*/ 
        }); 
      }

    });

    }else{
      html2canvas(srcEl, {
        canvas: scaledCanvas,
        onrendered: function(canvas) {
        // document.body.appendChild(canvas);
        /*$(".modal-body").append(canvas);*/
         $(".targeta").removeAttr( 'style' );

        canvas.toBlob(function(blob) {
          saveAs(blob, nombreURL+".png"); 
        }); 
      }

    });

    }

    setTimeout(function(){
      $("#viewport").attr("content", "width=device-width, initial-scale=1");
    }, 1700);

  };

    $("#btnSuprTop").click(function() {
    buscartop();
   });

    function buscartop(){
    window.location.href = '/producciones/top100';
  }