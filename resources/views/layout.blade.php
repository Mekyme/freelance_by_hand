<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Freelance by hand</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Главная страница</a></li>
        <li class="nav-item"><a href="/creating_orders" class="nav-link">Создать заявку</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Просмотреть заявки</a></li>
        <li class="nav-item"><a href="/sign_in" class="nav-link  active">Вход в личный кабинет</a></li>
      </ul>
    </header>
</div>


<div class="container">
    @yield('main_content')
</div>

</body>
</html>