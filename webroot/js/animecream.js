$(document).ready(function () {
    document.addEventListener("click", (e) => {
        if (e.target.matches(".g2")) {
            if (location.pathname.includes("producciones2")) {
                let URLactual = window.location;
                URLactual = String(URLactual);
                let res = URLactual.replace("producciones2", "producciones");
                window.location.href = res;
            } else {
                document.getElementById("btnCambiarCuadricula").click();
            }
        }
    });

    cargarOption();
    listaactual();

    $("#Anderin").dblclick(function () {
        window.location.href = "/users/" + "login";
    });

    $("#InpBuscar").bind("enterKey", function (e) {
        buscar();
    });

    $("#btnBuscar").click(function () {
        buscar();
    });

    var cambio = true;
    $("button.leer").click(function () {
        if (cambio == true) {
            cambio = false;
            h = new SpeechSynthesisUtterance();
            h.lang = "es-ES";
            h.text = $(this).siblings(".hidden-xs-down ").text();
            speechSynthesis.speak(h);
        } else {
            var synth = window.speechSynthesis;
            synth.cancel();
            cambio = true;
        }
    });

    $("#btnCambiarCuadricula").click(function () {
        cambiarG();
    });

    $("#InpBuscar").keyup(function (e) {
        if (e.keyCode == 13) {
            $(this).trigger("enterKey");
        }
    });

    $("#sortable").disableSelection();
    imprimirLista($("#selector option:selected").text());

    $("#selector").change(function () {
        imprimirLista($("#selector option:selected").text());

        localStorage.setItem(
            "listaActual",
            $("#selector option:selected").text()
        );
    });

    $(".media-body > span > span").click(function () {
        agregarRegistro($(this).attr("numero"), $(this).attr("nombre"));
    });

    $("#actualizar").click(function () {
        actulizarLista();
    });

    $("#borrar").click(function () {
        if ($("#selector option:selected").text() == "") {
        } else {
            $(function () {
                $("#dialog-confirm").dialog({
                    resizable: false,
                    height: "auto",
                    width: 270,
                    modal: true,
                    buttons: {
                        Aceptar: function () {
                            $(this).dialog("close");
                            borrarLista($(this).siblings("ol"));
                        },
                        Cancelar: function () {
                            $(this).dialog("close");
                        },
                    },
                });
            });
            $("button.ui-dialog-titlebar-close").remove();
            $("div.ui-dialog-titlebar").addClass("cabecera");
            $("#dialog-confirm p").remove();
            $("#dialog-confirm").append(
                '<p><span class="ui-icon ui-icon-alert"></span>¿Desea eliminar esta lista?</p>'
            );
        }
    });

    $("#agregarLista").click(function () {
        agregarLista();
    });

    $("#ordenar").click(function () {
        habilitarOrden();
        agregarEventoEliminarLi();
        $("#sortable li span").attr(
            "class",
            "ui-icon ui-icon-arrowthick-2-n-s"
        );

        $("#ordenar").css({
            display: "none",
        });

        $("#cancelar").removeClass("hidden");
    });

    $("#cancelar").click(function () {
        imprimirLista($("#selector option:selected").text());

        $("#ordenar").css({
            display: "inline",
        });

        $("#cancelar").addClass("hidden");
    });

    function cargarOption() {
        $("#selector option").remove();
        for (x = 0; x <= localStorage.length - 1; x++) {
            clave = localStorage.key(x);
            if (clave !== "listaActual") {
                $("#selector").append(
                    '<option value="' + clave + '">' + clave + "</option>"
                );
            }
        }
    }

    function agregarRegistro(id, nombre) {
        var final = "";
        if ($("#selector option:selected").text() == "") {
            alert(
                'Por Favor, agrega una lista nueva en el panel: "Mis listas" '
            );
            irZona();
        } else {
            valor =
                "{" +
                '"id"' +
                ":" +
                id +
                "," +
                '"nombre"' +
                ":" +
                '"' +
                nombre +
                '"' +
                "}";
            var alma = localStorage.getItem(
                $("#selector option:selected").text()
            );
            if (!alma) {
                alma = "*";
            }
            localStorage.setItem(
                $("#selector option:selected").text(),
                alma + "-~-" + valor
            );
            $("#result").html(
                localStorage.getItem($("#selector option:selected").text())
            );
            $("#sortable").append(
                '<li id="' +
                    id +
                    '" class="ui-sortable-handle"><span ></span>' +
                    nombre +
                    "</li>"
            );
        }
    }

    function actulizarLista() {
        if ($("#selector option:selected").text() == "") {
        } else {
            localStorage.removeItem($("#selector option:selected").text());
            $("#sortable li").each(function () {
                valor =
                    "{" +
                    '"id"' +
                    ":" +
                    $(this).attr("id") +
                    "," +
                    '"nombre"' +
                    ":" +
                    '"' +
                    $(this).text() +
                    '"' +
                    "}";
                var alma = localStorage.getItem(
                    $("#selector option:selected").text()
                );
                if (!alma) {
                    alma = "*";
                }
                localStorage.setItem(
                    $("#selector option:selected").text(),
                    alma + "-~-" + valor
                );
            });

            var cadena = "lista";
            var strg = localStorage.getItem(
                $("#selector option:selected").text()
            );
            if (!strg || strg == "*") {
                strg = "*";
                localStorage.setItem(
                    $("#selector option:selected").text(),
                    "*"
                );
            }
            if (strg !== "*") {
                res = strg.replace("*-~-", "");
                array = res.split("-~-");
                $.each(array, function (index, value) {
                    val = JSON.parse(value);
                    cadena = cadena + "," + val.id;
                });

                URLactual = "/producciones/" + cadena;
                window.location.href = URLactual;
            }
        }
    }

    function imprimirLista(lista) {
        var res = "";
        var array = "";
        $("#sortable").remove();
        $("#actualizar").before('<ol id="sortable"></ol> ');
        var strg = localStorage.getItem(lista);
        if (!strg) {
            strg = "*";
        }
        if (strg !== "*") {
            res = strg.replace("*-~-", "");
            array = res.split("-~-");
            $.each(array, function (index, value) {
                val = JSON.parse(value);
                suma = parseInt(index) + parseInt(1);
                $("#sortable").append(
                    '<li id="' +
                        val.id +
                        '" class="ui-sortable-handle"><span ></span>' +
                        val.nombre +
                        "</li>"
                );
            });

            $("#sortable").disableSelection();
        }
    }

    function borrarLista(elemento) {
        localStorage.removeItem($("#selector option:selected").text());
        cargarOption();
        imprimirLista($("#selector option:selected").text());
    }

    function agregarLista() {
        $("#nolista").remove();
        clave = $("#inpAgregar").val();
        if (clave !== "") {
            localStorage.setItem(clave, "*");
            $("#selector").append(
                '<option selected value="' + clave + '">' + clave + "</option>"
            );
            imprimirLista(clave);
            $("#inpAgregar").val("");
            localStorage.setItem(
                "listaActual",
                $("#selector option:selected").text()
            );
        }
    }

    function habilitarOrden() {
        $("#sortable").sortable();
        $("#sortable").disableSelection();
    }

    function agregarEventoEliminarLi() {
        $("li").click(function () {
            $(this).remove();
        });
    }

    function listaactual() {
        $("#selector").val(localStorage.getItem("listaActual"));
    }

    function irZona() {
        var final = "";
        var dirActual = "";
        dirActual = window.location;
        dirActual = String(dirActual);
        final = dirActual.replace("#zona1", "");
        window.location.href = final + "#zona1";
    }

    function cambiarG() {
        var URLactual = window.location;
        URLactual = String(URLactual);
        if (
            URLactual == "https://www.animecream.com/" ||
            URLactual == "https://www.animecream.com/?utm_source=homescreen" ||
            URLactual == "https://animecream.com/" ||
            URLactual == "https://animecream.com/?utm_source=homescreen"
        ) {
            URLactual = "/producciones";
        }
        var res = URLactual.replace("producciones", "producciones2");
        window.location.href = res;
    }

    function buscar() {
        window.location.href =
            "/producciones/" + "nombre-" + $("#InpBuscar").val();
    }
});
