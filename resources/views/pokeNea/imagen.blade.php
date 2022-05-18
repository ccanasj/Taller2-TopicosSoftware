<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PokeNeas</title>
</head>
<body>
    <div>
        <img src= {{ $viewData["imagen"] }} style="width:360px;height:360px;">
        <p>{{ $viewData["frase"] }}</p>
        <h2>IP contenedor: {{ $viewData["server_ip"] }}</h2>
    </div>
</body>
</html>