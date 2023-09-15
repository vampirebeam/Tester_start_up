<!doctype html>

<html>

<head>
   @include('layouts.head')
</head>

<body>
    @include('layouts.header')
<div class="container">
   <div id="main" class="row">
           @yield('content')
   </div>
</div>
</body>
</html>
