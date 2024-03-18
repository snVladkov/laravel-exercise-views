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
                <div class="row mx-0 mx-md-5 contacts-section">
                    <h2 class="col-12 mb-3">Свържете се с нас</h2>
                    <form id="contact-form" class="col-12 col-md-8" action="" method="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Имена</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Имейл</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Тема</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Съобщение</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-secondary fw-bold border-white bg-white text-dark">Изпрати</button>
                        </div>
                    </form>
                    <div class="col-12 col-md-4 d-flex flex-column text-center">
                        <h3 class="mb-3">Контакти:</h3>
                        <p class="mb-2"><i class="bi bi-phone me-2"></i>0888 888 888</p>
                        <p class="mb-2"><i class="bi bi-envelope me-2"></i>info@obuvalnik.bg</p>
                        <p class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i>гр. София, ул. "Търговска" 1</p>
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