<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- VueJS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Todo List PHP</title>
</head>

<body>
    <!-- Vue Container -->
    <div id="app" class="p-5">
        <div class="row justify-content-center gy-4">
            <div class="col-7">
                <h1 class="text-center">Todo List</h1>
            </div>
            <div class="col-7">
                <ul class="list-group">
                    <li class="list-group-item">An item</li>
                    <li class="list-group-item">A second item</li>
                    <li class="list-group-item">A third item</li>
                </ul>
            </div>
            <div class="col-7">
                <div class="input-group mb-3">
                    <label for="input-text"></label>
                    <input type="text" class="form-control" placeholder="Inserisci elemento..." id="input-text" aria-describedby="button">
                    <button class="btn btn-outline-secondary" id="button">Button</button>
                </div>
            </div>
        </div>
    </div>

    <!-- My JS -->
    <script src="main.js"></script>
</body>

</html>