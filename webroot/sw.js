const version = "1.1.12";
const cacheName = `animecream-${version}`;

var images = [];
for(var i=1; i<434; i++) {
  images.push('/img/tarjeta/'+ i +'.jpg');
}
appShellFiles = [
        `/`,
        `/index.php`,
        `/js/jquery-2.2.4.min.js`,
        `/js/jquery-ui.min.js`,
        `/js/bootstrap.min.js`,
        `/js/animecream.js`,
        `/js/filesaver.js`,
        `/js/html2canvas.js`,
        `/js/app.js`,
        `/js/app2.js`,
        `/css/bootstrap.min.css`,
        `/css/animecream.css`,
        `/css/jquery-ui.min.css`,
        `/css/app.css`,
        `/css/app2.css`
];


contentToCache = appShellFiles.concat(images);

self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(cacheName).then(cache => {
      return cache.addAll(contentToCache)
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

   


self.addEventListener('fetch', (e) => {
    console.log('[Servicio Worker] Recurso obtenido ' + e.request.url);
});



/*self.addEventListener('fetch', (e) => {
  e.respondWith(
    caches.match(e.request).then((r) => {
          console.log('[Servicio Worker] Obteniendo recurso: '+e.request.url);
      return r || fetch(e.request).then((response) => {
                return caches.open(cacheName).then((cache) => {
          console.log('[Servicio Worker] Almacena el nuevo recurso: '+e.request.url);
          cache.put(e.request, response.clone());
          return response;
        });
      });
    })
  );
});*/

/*self.addEventListener('fetch', event => {
  event.respondWith(
    caches.open(cacheName)
      .then(cache => cache.match(event.request, {ignoreSearch: true}))
      .then(response => {
      return response || fetch(event.request);
    })
  );
});*/
