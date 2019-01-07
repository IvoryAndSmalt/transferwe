self.addEventListener('install', function(){
    console.log("sw installed")
});
self.addEventListener('activate', function(){
    console.log("sw activated")
});
self.addEventListener('fetch', function(e){
    console.log("sw fetching", e.request.url)
});