<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- включваме bootstrap чрез cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <title>Упражнение Laravel</title>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 p-0 mx-auto flex-column">
        <header class="mb-auto pt-3 pb-4 px-5">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <div class="d-flex flex-row">
                    <img src="{{asset('shoes-logo.png')}}" alt="logo" width="80" height="80">
                    <h3 class="my-auto">Обувалник</h3>
                </div>
                <nav class="nav nav-masthead justify-content-center my-auto">
                    <a class="nav-link active" href="#">Начало</a>
                    <a class="nav-link" href="#">Продукти</a>
                    <a class="nav-link" href="#">Контакти</a>
                </nav>
            </div>
        </header>

        <main class="px-3 my-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5">Продукти</h2>
                    </div>
                    <div class="col-12 col-md-3 px-3 mb-3">
                        <div class="card">
                            <img src="" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <p class="card-title fs-3">Заглавие</p>
                                <p class="card-text">Категория</p>
                                <p class="card-text fs-4">Цена: 100 лв</p>
                                <div class="d-flex flex-row flex-wrap justify-content-center gap-3 mb-3">
                                    <span class="badge bg-primary">-20%</span>
                                    <span class="badge bg-success">В наличност</span>
                                </div>
                                <button type="button" class="btn btn-lg mb-2 fw-bold border-white bg-white text-dark">Добави в количката</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="mt-auto text-white-50">
            <small>&copy; 2024 Магазин за обувки. Всички права запазени.</small>
        </footer>
    </div>
</body>
</html>