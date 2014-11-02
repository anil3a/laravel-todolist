<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>To Do List in Laravel Framework</title>
<link rel="stylesheet" href="/css/style.css">
</head>
<body class=" @if(Request::path() === 'login') loginpage @endif">
    <div class="container">



        @yield('content')



    </div>
</body>
</html>