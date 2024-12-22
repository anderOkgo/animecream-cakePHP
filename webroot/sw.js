const VERSION = "1.1.20";
const CACHE_NAME = `animecream-${VERSION}`;
const imagenes = [];
let appfiles = [];

for (let i = 1; i <= 456; i++) {
    imagenes.push(`./img/tarjeta/${i}.jpg`);
}

appfiles = [
    `./index.php`,
    `./favicon.ico`,
    `./sw.js`,
    `./android-icon-192x192.ico`,
    `./js/jquery-2.2.4.min.js`,
    `./js/jquery-ui.min.js`,
    `./js/bootstrap.min.js`,
    `./js/animecream.js`,
    `./js/filesaver.js`,
    `./js/html2canvas.js`,
    `./js/app.js`,
    `./js/app2.js`,
    `./css/bootstrap.min.css`,
    `./css/animecream.css`,
    `./css/jquery-ui.min.css`,
    `./css/app.css`,
    `./css/app2.css`,
];

let contentToCache = appfiles.concat(imagenes);

self.addEventListener("install", (e) => {
    e.waitUntil(
        caches
            .open(CACHE_NAME)
            .then((cache) => {
                return cache
                    .addAll(contentToCache)
                    .then(() => self.skipWaiting());
            })
            .catch((err) => console.log("Falló registro de cache", err))
    );
});

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener("activate", (e) => {
    const cacheWhitelist = [CACHE_NAME];

    e.waitUntil(
        caches
            .keys()
            .then((cacheNames) => {
                return Promise.all(
                    cacheNames.map((cacheName) => {
                        //Eliminamos lo que ya no se necesita en cache
                        if (cacheWhitelist.indexOf(cacheName) === -1) {
                            return caches.delete(cacheName);
                        }
                    })
                );
            })
            // Le indica al SW activar el cache actual
            .then(() => self.clients.claim())
    );
});

//cuando el navegador recupera una url
self.addEventListener("fetch", (e) => {
    //Responder ya sea con el objeto en caché o continuar y buscar la url real
    e.respondWith(
        caches.match(e.request).then((res) => {
            if (res) {
                //recuperar del cache
                return res;
            }
            //recuperar de la petición a la url
            return fetch(e.request);
        })
    );
});
