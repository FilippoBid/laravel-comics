<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    

    {{-- importo file di header e footer --}}
    @include("partials.header")

    @yield("main-html")

    @include("partials.footer")
    
</body>
</html>