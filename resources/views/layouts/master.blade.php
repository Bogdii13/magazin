<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista Sarcini</title>
    <!-- Bootstrap CSS File -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 2 meta tags *must* come first in the head; any other head
   content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>--}}
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
           <a class="navbar-brand" href="{{ url('/home') }}">
                Home
           </a>
            <a class="navbar-brand" href="{{ url('/') }}">
                Florarie
            </a>
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Gestiune produse</a>
            </div>
            <ul class="nav navbar-nav">
            </ul>
        </div>
    </nav>
    <head>
        <h1></h1>
    </head>
    @yield('content')
</div>
</body>
</html>

{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}
{{--    <title>Employee Crud Repository</title>--}}
{{--</head>--}}
{{--<body>--}}

{{--@yield('content')--}}

{{--</body>--}}
{{--</html>--}}
