<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
  <body>
    <div id="app" data-page="{{ json_encode($page)}}"></div>
  </body>
</html>