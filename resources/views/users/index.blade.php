@extends('layouts.app')


@section('content')
    <div class="container">
        <h1>Información Usuario</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
              Info
            </div>
            <ul class="list-group list-group-flush mb-3">
                <img class="card-img-top" src="{{ asset('images/Usuario.jpg') }} " alt="Foto">
                <li class="list-group-item">Nombre: {{$user->name}}</li>
                <li class="list-group-item">Correo: {{$user->email}}</li>

            </ul>
          </div>
    </div>

@endsection
