@extends('layout')

@section('title')Вход в личный кабинет@endsection

@section('main_content')

<main class="form-signin w-25 m-auto">
  <form>

    <h1 class="h3 mb-3 fw-normal">Вход в личный кабинет</h1>

    <div class="form-floating">
      <input type="email" class="form-control mb-3" id="floatingInput" placeholder="name@example.com">
      <label class="text-dark" for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label class="text-dark" for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        запомнить меня
      </label>
    </div>
    <button class="btn btn-primary w-100 py-2 " type="submit">Войти</button>    
    <a class="link-success" href="#">
      Зарегистрироваться
    </a>
  </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



@endsection
