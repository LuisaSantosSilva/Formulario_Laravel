<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Principal</title>
</head>
<body>
    @include('layouts.navbar')

    <img src="{{ asset('imagens/Banner.png') }}" alt="Imagem" class="img-fluid">

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-6" >Seja Bem vindo a nossa Loja</h1>
                <br>
                <p class="lead">Bem-vindo à nossa joalheria online, onde o brilho eterno encontra a expressão da sua beleza singular. Deixe-se envolver pelo encanto radiante de nossas peças exclusivas, meticulosamente criadas para iluminar cada momento especial da sua vida. Cada jóia conta uma história, cada pedra preciosa reflete uma emoção, e cada detalhe é uma manifestação de arte e paixão. Explore nossa coleção e descubra a sofisticação atemporal que só as jóias podem oferecer.</p>
            </div>
        </div>
    </div>
    <br>
    @include('layouts.footer')
</body>
</html>
