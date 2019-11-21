@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">

        <img src="https://www.google.com/url?sa=i&source=images&cd=&ved=2ahUKEwimneP27fjlAhULVhoKHWrgAGYQjRx6BAgBEAQ&url=https%3A%2F%2Fwww.xataka.com%2Fespacio%2Fhan-sido-necesarias-50-000-fotos-para-capturar-esta-alucinante-imagen-81-mpixeles-luna&psig=AOvVaw2R7KyA1mLL9EqhbzCy-RLX&ust=1574341679054399">

    </div>
    <div class="col-sm-8">

        <h1>{{$arrayProductos[0]}}</h1>
        <h3>Descripción: {{$arrayProductos[1]}}</h3>
        <h3>Estado: Actualmente agotado</h3>
        <a href="" class="btn btn-danger">Pendiente de compra</a>
        <a href="/productos/edit/{{$id}}" class="btn btn-warning">Editar Película</a>
        <a href="/productos" class="btn btn-dark">Volver al listado</a>

    </div>
</div>

@stop
