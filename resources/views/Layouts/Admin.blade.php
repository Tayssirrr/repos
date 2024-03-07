<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
</head>
<body>
    <div class="row w-100">
    <x-menubar />
   <div class="col-md-10 py-5 ">
    @yield('main')
   </div>
    </div>
</body>
</html>