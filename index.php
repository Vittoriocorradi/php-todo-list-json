<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
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

            <!-- Title -->
            <div class="col-7">
                <h1 class="text-center">Todo List</h1>
            </div>
            <!-- /Title -->

            <!-- Todo List -->
            <div class="col-7">
                <ul class="list-group">
                    <li v-for="(todo, index) in todoList" class="list-group-item d-flex justify-content-between align-items-center">
                        <span :class="{ 'text-decoration-line-through': todo.done }"> {{ todo.text }} </span>
                        <button @click="deleteTodo(index)" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </li>
                </ul>
            </div>
            <!-- /Todo List -->

            <!-- Form -->
            <div class="col-7">
                <form @submit.prevent="addTodo" class="input-group mb-3">
                    <label for="input-text"></label>
                    <input type="text" class="form-control" placeholder="Inserisci elemento..." id="input-text" aria-describedby="button" v-model="newTodo">
                    <button class="btn btn-outline-secondary" id="button">Inserisci</button>
                </form>
            </div>
            <!-- /Form -->

        </div>
    </div>

    <!-- My JS -->
    <script src="main.js"></script>
</body>

</html>