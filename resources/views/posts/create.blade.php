@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear una nueva publicación</h1>
    @include('layouts.subview-form-errors')
    
    {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}

        @include('posts.subview-post-fields')

        <button type="submit" class="btn btn-primary">Crear</button>

    {!! Form::close() !!}
</div>
@endsection




