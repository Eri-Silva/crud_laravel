<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT - CRUD LARAVEL</title>
    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container px-10">
        <form action="{{ route('salvar', ['id' => $item->id]) }}" method="post">
            @csrf
            <center>
                <h1>Dados do item:</h1>
            </center>

            <!-- Nome do item -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form7Example1">Nome do item</label>
                <input type="text" id="form7Example1" class="form-control" value="{{ $item->nome }}" name="nome"/>
            </div>

            <!-- Descrição do item -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form7Example1">Descrição do item</label>
                <input type="text" id="form7Example1" class="form-control" value="{{ $item->descricao }}" name="descricao"/>
            </div>

            <!-- Quantidade do item -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form7Example1">Quantidade do item</label>
                <input type="text" id="form7Example1" class="form-control" value="{{ $item->quantidade }}" name="quantidade"/>
            </div>

            <button class="btn btn-success">Salvar</button>
        </form>
    </div>

</body>

</html>