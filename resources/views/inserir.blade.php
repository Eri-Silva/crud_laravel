<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CREAT - CRUD LARAVEL</title>
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
        <form action="{{route('salvar')}}" method="post">
            @csrf
            <center>
                <h1>Formulário de um item qualquer</h1>
            </center>

            <!-- Nome do item input -->
            <div class="form-outline mb-4">
                <input type="text" id="form7Example1" class="form-control" name="nome" />
                <label class="form-label" for="form7Example1">Nome do item</label>
            </div>

            <!-- Descrição do item input -->
            <div class="form-outline mb-4">
                <input type="text" id="form7Example2" class="form-control" name="descricao" />
                <label class="form-label" for="form7Example2">Descrição do item</label>
            </div>

            <!-- Quantidade do item input -->
            <div class="form-outline mb-4">
                <input type="number" id="form7Example2" class="form-control" name="quantidade" />
                <label class="form-label" for="form7Example2">Quantidade do item</label>
            </div>
            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>