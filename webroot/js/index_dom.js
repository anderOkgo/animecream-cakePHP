import hanburgerMenu from "./menu_hamburguesa.js";

const d = document;
d.addEventListener("DOMContentLoaded" , e => {
    hanburgerMenu(".panel-btn", ".panelx", ".cabecera button");
})