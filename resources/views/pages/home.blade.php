@extends('layouts.app')
@section('title', 'Halaman Home')
@section('carousel')
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner" style="height: 100vh">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1613481417091-d598f6f511de?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1471094188469-4a39f5d71ad8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://images.unsplash.com/photo-1490335697114-104c7b20e2b6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
@section('content')
    <strong>Hello, {{$name}}</strong> <br>
    Ini adalah Halaman Home <br>

    <x-alert theme="danger" closeable="true">
        Ini adalah Alert
    </x-alert>
    <x-modal theme="danger" judul="Judul Modal" footer="Simpan">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ex culpa commodi ducimus facere aliquam, velit voluptate corporis accusantium optio, fuga sunt atque laborum veritatis iure, consectetur delectus fugiat molestiae!
    </x-modal>
@endsection
@section('js')
    <script>
        console.log('Hello');
    </script>
@endsection