  <div id="lateral">

    <div id="zona1" class="targetalateral">
      <div class="bs-example" data-example-id="simple-nav-stacked">
        <div class="contenedor">
          <div class="cabecera">Sígueme en otros proyectos</div>
          <div class="centrar2">
            <span title="YouTube: Ander Innervideo" class="you"><a aria-label="sigueme en" href="https://www.youtube.com/channel/UC1tCm6nZothAhbp_9dFzmNQ" target="_blank" rel="noopener"></a></span>
            <span title="YouTube: Ander Okgo" class="okgo"><a aria-label="sigueme en" href="https://www.youtube.com/channel/UC1vwlA2l20nsH2XcyM891hw" target="_blank" rel="noopener"></a></span>
            <span title="Knight of Lamunes DX" class="g"><a aria-label="sigue este proyecto" href="https://mega.nz/#F!zwRkFapJ!V9IPs45HUUyb4BFbRdWlPA" target="_blank" rel="noopener"></a></span>
            <span title="Modo Cuadricula" class="g2"></span>
          </div>
        </div>
      </div>
    </div>



  </div>

  <div class="targetalateral">
    <div class="bs-example" data-example-id="simple-nav-stacked">
      <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
        <li class="active"><?= $this->Html->link(__("Top Especiales"), ["controller" => "Productions", "action" => "app"]) ?></li>
        <li><?= $this->Html->link(__("Top 100 All TIme"), ["controller" => "Productions", "action" => "app","top100"]) ?></li>
        <li><?= $this->Html->link(__("Top Animes Favoritos"), ["controller" => "Productions", "action" => "app","favoritos"]) ?></li>
        <li><?= $this->Html->link(__("Super Top!"), ["controller" => "Productions", "action" => "app","supertop"]) ?></li>
      </div>
    </div>



    <div class="targetalateral">
      <div class="bs-example" data-example-id="simple-nav-stacked">
        <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
          <li class="active"><?= $this->Html->link(__("Top Décadas"), ["controller" => "Productions", "action" => "app"]) ?></li>
          <li><?= $this->Html->link(__("Top Animes 70s"), ["controller" => "Productions", "action" => "app","70s"]) ?></li>
          <li><?= $this->Html->link(__("Top Animes 80s"), ["controller" => "Productions", "action" => "app","80s"]) ?></li>
          <li><?= $this->Html->link(__("Top Animes 90s"), ["controller" => "Productions", "action" => "app","90s"]) ?></li>
          <li><?= $this->Html->link(__("Top Animes 00s"), ["controller" => "Productions", "action" => "app","00s"]) ?></li>
          <li><?= $this->Html->link(__("Top Animes 10s"), ["controller" => "Productions", "action" => "app","10s"]) ?></li>
        </div>
      </div>

      <div class="targetalateral">
        <div class="bs-example" data-example-id="simple-nav-stacked">
          <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
            <li class="active"><?= $this->Html->link(__("Top Demografias"), ["controller" => "Productions", "action" => "app"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Kodomo"), ["controller" => "Productions", "action" => "app","kodomo"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Shōnen"), ["controller" => "Productions", "action" => "app","shonen"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Shōnen-Seinen"), ["controller" => "Productions", "action" => "app","shonen-seinen"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Seinen"), ["controller" => "Productions", "action" => "app","seinen"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Shōjo"), ["controller" => "Productions", "action" => "app","shojo"]) ?></li>
            <li><?= $this->Html->link(__("Top Animes Josei"), ["controller" => "Productions", "action" => "app","josei"]) ?></li>


          </div>
        </div>

        <div class="targetalateral">
          <div class="bs-example" data-example-id="simple-nav-stacked">
            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
              <li class="active"><?= $this->Html->link(__("Top Géneros"), ["controller" => "Productions", "action" => "app"]) ?></li>
              <li><?= $this->Html->link(__("Top Animes Ciencia Ficción"), ["controller" => "Productions", "action" => "app","ciencia-ficcion"]) ?></li>
              <li><?= $this->Html->link(__("Top Animes Fantasía"), ["controller" => "Productions", "action" => "app","fantasia"]) ?></li>
              <li><?= $this->Html->link(__("Top Animes Romance"), ["controller" => "Productions", "action" => "app","romance"]) ?></li>
              <li><?= $this->Html->link(__("Top Animes Comedia-Parodia"), ["controller" => "Productions", "action" => "app","comedia"]) ?></li>
              <li><?= $this->Html->link(__("Top Animes Acción"), ["controller" => "Productions", "action" => "app","accion"]) ?></li>
            </div>
          </div>

          <div class="targetalateral">
            <div class="bs-example" data-example-id="simple-nav-stacked">
              <div class="nav nav-pills nav-stacked nav-pills-stacked-example">
                <div class="cabecera">Top por año</div>
                <br>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1970"), ["controller" => "Productions", "action" => "app",1970]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1971"), ["controller" => "Productions", "action" => "app",1971]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1972"), ["controller" => "Productions", "action" => "app",1972]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1973"), ["controller" => "Productions", "action" => "app",1973]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1974"), ["controller" => "Productions", "action" => "app",1974]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1975"), ["controller" => "Productions", "action" => "app",1975]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1976"), ["controller" => "Productions", "action" => "app",1976]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1977"), ["controller" => "Productions", "action" => "app",1977]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1978"), ["controller" => "Productions", "action" => "app",1978]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1979"), ["controller" => "Productions", "action" => "app",1979]) ?></button>
                <hr>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1980"), ["controller" => "Productions", "action" => "app",1980]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1981"), ["controller" => "Productions", "action" => "app",1981]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1982"), ["controller" => "Productions", "action" => "app",1982]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1983"), ["controller" => "Productions", "action" => "app",1983]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1984"), ["controller" => "Productions", "action" => "app",1984]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1985"), ["controller" => "Productions", "action" => "app",1985]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1986"), ["controller" => "Productions", "action" => "app",1986]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1987"), ["controller" => "Productions", "action" => "app",1987]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1988"), ["controller" => "Productions", "action" => "app",1988]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1989"), ["controller" => "Productions", "action" => "app",1989]) ?></button>
                <hr>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1990"), ["controller" => "Productions", "action" => "app",1990]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1991"), ["controller" => "Productions", "action" => "app",1991]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1992"), ["controller" => "Productions", "action" => "app",1992]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1993"), ["controller" => "Productions", "action" => "app",1993]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1994"), ["controller" => "Productions", "action" => "app",1994]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1995"), ["controller" => "Productions", "action" => "app",1995]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1996"), ["controller" => "Productions", "action" => "app",1996]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1997"), ["controller" => "Productions", "action" => "app",1997]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1998"), ["controller" => "Productions", "action" => "app",1998]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("1999"), ["controller" => "Productions", "action" => "app",1999]) ?></button>
                <hr>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2000"), ["controller" => "Productions", "action" => "app",2000]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2001"), ["controller" => "Productions", "action" => "app",2001]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2002"), ["controller" => "Productions", "action" => "app",2002]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2003"), ["controller" => "Productions", "action" => "app",2003]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2004"), ["controller" => "Productions", "action" => "app",2004]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2005"), ["controller" => "Productions", "action" => "app",2005]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2006"), ["controller" => "Productions", "action" => "app",2006]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2007"), ["controller" => "Productions", "action" => "app",2007]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2008"), ["controller" => "Productions", "action" => "app",2008]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2009"), ["controller" => "Productions", "action" => "app",2009]) ?></button>
                <hr>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2010"), ["controller" => "Productions", "action" => "app",2010]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2011"), ["controller" => "Productions", "action" => "app",2011]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2012"), ["controller" => "Productions", "action" => "app",2012]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2013"), ["controller" => "Productions", "action" => "app",2013]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2014"), ["controller" => "Productions", "action" => "app",2014]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2015"), ["controller" => "Productions", "action" => "app",2015]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2016"), ["controller" => "Productions", "action" => "app",2016]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2017"), ["controller" => "Productions", "action" => "app",2017]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2018"), ["controller" => "Productions", "action" => "app",2018]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2019"), ["controller" => "Productions", "action" => "app",2019]) ?></button>
                <hr>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2020"), ["controller" => "Productions", "action" => "app",2020]) ?></button>
                <button type="button" class="btn btn-sm"><?= $this->Html->link(__("2021"), ["controller" => "Productions", "action" => "app",2021]) ?></button>
                <p></p>
              </div>
            </div>


            <div class="targetalateral">
              <div class="bs-example" data-example-id="simple-nav-stacked">
                <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                  <li class="active"><?= $this->Html->link(__("Top Cantidad de Capitulos"), ["controller" => "Productions", "action" => "app"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 1 y 6"), ["controller" => "Productions", "action" => "app","entre-1-6-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 7 y 13"), ["controller" => "Productions", "action" => "app","entre-7-13-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 14 y 26"), ["controller" => "Productions", "action" => "app","entre-14-26-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 27 y 52"), ["controller" => "Productions", "action" => "app","entre-27-52-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 53 y 100"), ["controller" => "Productions", "action" => "app","entre-53-100-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Entre 101 y 200"), ["controller" => "Productions", "action" => "app","entre-101-200-capitulos"]) ?></li>
                  <li><?= $this->Html->link(__("Mas de 200 y en emision"), ["controller" => "Productions", "action" => "app","mas-de-200-capitulos"]) ?></li>

                </div>
              </div>

            </div>

<div class="targetalateral">
     
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3195928796594139"
          crossorigin="anonymous"></script>
     <!-- AsideLateral -->
     <ins class="adsbygoogle"
          style="display:block"
          data-ad-client="ca-pub-3195928796594139"
          data-ad-slot="9885418014"
          data-ad-format="auto"
          data-full-width-responsive="true"></ins>
     <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
     </script>

</div>


            <script>
              var code=$("#lateral").html();
              var URLactual = window.location;
                  URLactual=String(URLactual);
              if (parseInt(URLactual.indexOf("producciones2")) !== -1) {
                var code = code.replace(/producciones/g, "producciones2");
                $("#lateral").html(code);
              }
            </script>
