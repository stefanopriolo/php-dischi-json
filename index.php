<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div id="app1">
        <nav class="navbar nav-color">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./imgs/logo.png" alt="Bootstrap" width="30" height="24">
                </a>
            </div>
        </nav>
        <main class="bg-main">
            <div class="container">
                <div class="row p-5">
                    <div class="card bg-card text-white" style="width: 18rem;">
                        <img src="./imgs/discosole.jpg" class="card-img-top p-3" alt="...">
                        <div class="card-body text-center pb-4">
                            <h4 class="card-title">Disco Sole</h4>
                            <p class="card-text">Nu Genea</p>
                            <h5 class="card-text">2018</h5>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>

</html>



<style>
    .nav-color {
        background-color: #06131f;
    }

    .bg-main {
        background-color: #1d2d3c;
    }

    .bg-card {
        background-color: #112030;
    }
</style>