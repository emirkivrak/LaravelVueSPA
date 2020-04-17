<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="/js/app.js" defer></script>
        
        <!-- Styles -->
    </head>
    <body>
    <div id="app">
        <h1>Hello App!</h1>
        <p>
          <!-- use router-link component for navigation. -->
          <!-- specify the link by passing the `to` prop. -->
          <!-- `<router-link>` will be rendered as an `<a>` tag by default -->
          <router-link to="/foo">Go to foo</router-link>
          <router-link to="/bar">Go to Bar</router-link>
        </p>
        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <router-view></router-view>
        
      </div>
    </body>
</html>
