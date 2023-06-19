@extends('layout')

@section('title')Создание заявки@endsection

@section('main_content')

@if($errors->any())
<div class="form-signin w-50 m-auto">
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif


<!-- <main>
<form action="/creating_orders/check" method="post">
    @csrf
    <input type="text" name="type_of_work" id="type_of_work" placeholder="Тип работы" class="form-control"><br>
    <input type="text" name="location" id="location" placeholder="Местоположение(город,район,улица)" class="form-control"><br>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
    </div>
    <input type="text" name="price" id="price" placeholder="Цена,₽" class="form-control"><br>
    <textarea name="message" id="message" class="form-control" placeholder="Введите описание работ"></textarea><br>
    <button type="submit" class="btn btn-success">Создать</button>
</form>
</main> -->

<main class="form-signin w-50 m-auto">
  <form action="/creating_orders/check" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Создать заявку</h1>

    <div class="form-floating mb-3">
      <input type="text" name="type_of_work" id="type_of_work" placeholder="Тип работы" class="form-control">
      <label class="text-dark" for="type_of_work">Тип работы</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" name="location" id="location" placeholder="Местоположение(город,район,улица)" class="form-control">
      <label class="text-dark" for="location">Местоположение(город,район,улица)</label>
    </div>

    <div class="form-floating mb-3">
      <input type="text" name="price" id="price" placeholder="Цена,₽" class="form-control">
      <label class="text-dark" for="price">Цена,₽</label>
    </div>

    <label>
        Прикрепите фото предварительной работы
    </label>
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02">
    </div>

    <textarea name="message" id="message" class="form-control" placeholder="Введите описание работ"></textarea><br>

    <button class="btn btn-primary w-100 py-2 " type="submit">Создать</button>    
  </form>
</main>






@endsection