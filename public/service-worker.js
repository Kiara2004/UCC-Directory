// UCC IT PWA Service Worker
// Handles offline functionality, caching, and background sync

const CACHE_NAME = 'ucc-it-pwa-v1';
const ASSETS_CACHE = 'ucc-it-assets-v1';
const API_CACHE = 'ucc-it-api-v1';

// Assets to cache on install
const STATIC_ASSETS = [
  '/',
  '/index.php',
  '/css/app.css',
  '/js/app.js',
  'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'
];

// Install event: Cache essential assets
self.addEventListener('install', (event) => {
  console.log('Service Worker installing...');
  
  event.waitUntil(
    caches.open(CACHE_NAME).then((cache) => {
      console.log('Caching static assets');
      return cache.addAll(STATIC_ASSETS).catch((err) => {
        console.warn('Some assets could not be cached:', err);
      });
    })
  );
  
  self.skipWaiting(); // Activate immediately
});

// Activate event: Clean up old caches
self.addEventListener('activate', (event) => {
  console.log('Service Worker activating...');
  
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheName !== CACHE_NAME && cacheName !== ASSETS_CACHE && cacheName !== API_CACHE) {
            console.log('Deleting old cache:', cacheName);
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
  
  self.clients.claim(); // Take control immediately
});

// Fetch event: Network-first or Cache-first strategies
self.addEventListener('fetch', (event) => {
  const { request } = event;
  const url = new URL(request.url);
  
  // Skip cross-origin requests
  if (url.origin !== location.origin) {
    return;
  }
  
  // API requests: Network first, fallback to cache
  if (request.url.includes('/api/')) {
    event.respondWith(
      fetch(request)
        .then((response) => {
          // Don't cache non-200 responses
          if (!response || response.status !== 200) {
            return response;
          }
          
          // Cache successful API responses
          const responseClone = response.clone();
          caches.open(API_CACHE).then((cache) => {
            cache.put(request, responseClone);
          });
          
          return response;
        })
        .catch(() => {
          // Return cached version if offline
          return caches.match(request).then((cachedResponse) => {
            return cachedResponse || new Response(
              JSON.stringify({ error: 'Offline' }),
              { status: 503, statusText: 'Service Unavailable' }
            );
          });
        })
    );
    return;
  }
  
  // HTML pages: Network first, fallback to cache
  if (request.method === 'GET' && request.headers.get('accept').includes('text/html')) {
    event.respondWith(
      fetch(request)
        .then((response) => {
          if (!response || response.status !== 200) {
            return response;
          }
          
          // Cache successful HTML responses
          const responseClone = response.clone();
          caches.open(CACHE_NAME).then((cache) => {
            cache.put(request, responseClone);
          });
          
          return response;
        })
        .catch(() => {
          // Return cached version or offline page
          return caches.match(request).then((cachedResponse) => {
            if (cachedResponse) {
              return cachedResponse;
            }
            
            // Offline fallback page
            return new Response(
              `<html>
                <head>
                  <title>Offline</title>
                  <style>
                    body { font-family: system-ui; padding: 2rem; text-align: center; }
                    h1 { color: #003d82; }
                    p { color: #666; }
                  </style>
                </head>
                <body>
                  <h1>🔌 You're Offline</h1>
                  <p>This page is not available offline. Please check your connection.</p>
                  <p><a href="/">Go to home page</a></p>
                </body>
              </html>`,
              { status: 503, statusText: 'Service Unavailable', headers: { 'Content-Type': 'text/html' } }
            );
          });
        })
    );
    return;
  }
  
  // Static assets: Cache first, fallback to network
  if (request.method === 'GET') {
    event.respondWith(
      caches.match(request).then((cachedResponse) => {
        if (cachedResponse) {
          return cachedResponse;
        }
        
        return fetch(request).then((response) => {
          if (!response || response.status !== 200) {
            return response;
          }
          
          // Cache successful asset responses
          const responseClone = response.clone();
          caches.open(ASSETS_CACHE).then((cache) => {
            cache.put(request, responseClone);
          });
          
          return response;
        }).catch(() => {
          // Return a placeholder for failed assets
          console.warn('Failed to fetch asset:', request.url);
          return new Response('Asset not available offline', { status: 503 });
        });
      })
    );
  }
});

// Background sync for future implementation
self.addEventListener('sync', (event) => {
  if (event.tag === 'sync-emails') {
    event.waitUntil(syncEmails());
  }
});

async function syncEmails() {
  try {
    // Implement email sync logic here
    console.log('Syncing emails...');
  } catch (error) {
    console.error('Sync failed:', error);
  }
}

// Push notification handler
self.addEventListener('push', (event) => {
  const options = {
    body: event.data ? event.data.text() : 'New notification from UCC IT',
    icon: '/images/icon-192.png',
    badge: '/images/icon-96.png',
    tag: 'ucc-it-notification',
    requireInteraction: false
  };
  
  event.waitUntil(
    self.registration.showNotification('UCC IT Department', options)
  );
});

// Notification click handler
self.addEventListener('notificationclick', (event) => {
  event.notification.close();
  
  event.waitUntil(
    clients.matchAll({ type: 'window' }).then((clientList) => {
      // Check if window already open
      for (let i = 0; i < clientList.length; i++) {
        const client = clientList[i];
        if (client.url === '/' && 'focus' in client) {
          return client.focus();
        }
      }
      // Open new window
      if (clients.openWindow) {
        return clients.openWindow('/');
      }
    })
  );
});

console.log('UCC IT Service Worker loaded successfully');
