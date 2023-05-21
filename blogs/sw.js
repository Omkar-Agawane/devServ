self.addEventListener('push', function (event) {
  let data=  event.data.json();
     self.registration.showNotification(data.title, {
       body: data.body,
       icon: data.icon,
       badge: data.badge,
       data: data.d,
       image: data.image,
       actions: [
         {
           action: 'Read more',
           title: 'Read Out',
           icon:''
         }
       ],
       vibrate: [200, 100, 200, 100, 200, 100, 200],
     //tag: 'vibration-sample'


       /*body: "tada",
       icon: "http://localhost/teafweb.com/public_html/blog.teafweb.com/assets/images/favi.png",
       badge: "http://localhost/teafweb.com/public_html/blog.teafweb.com/assets/images/favi.png",
       data: 'data.d',
       image: "http://localhost/teafweb.com/public_html/blog.teafweb.com/assets/images/images.png",
       actions: [
         {
           action: 'Read more',
           title: 'Read',
           icon:''
         }
       ]
     //  vibrate: [200, 100, 200, 100, 200, 100, 200],
     //  tag: 'vibration-sample'*/
     });
     self.addEventListener('notificationclick', function(event) {
       event.waitUntil(self.clients.openWindow('https://tguide.live'));
       event.notification.close();
   });
 });






 /*self.addEventListener('install', (e) => {
   e.waitUntil(
     caches.open('fox-store').then((cache) => cache.addAll([
       '/'
     ])),
   );
 });

 self.addEventListener('fetch', (e) => {
   console.log(e.request.url);
   e.respondWith(
     caches.match(e.request).then((response) => response || fetch(e.request)),
   );
 });*/