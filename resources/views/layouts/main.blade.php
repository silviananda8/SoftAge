<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link href="../font-awesome/css/fontawesome.css" rel="stylesheet">
    <link href="../font-awesome/css/brands.css" rel="stylesheet">
    <link href="../font-awesome/css/solid.css" rel="stylesheet">

    <title>Silvia blog</title>

</head>
<body>

    

    @include('partials.navbar')
    

        {{-- ketik halaman @section yang ingin digunakan harus sesuai dengan yang ada pada halaman childnya --}}
        @yield('content')


    <script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>