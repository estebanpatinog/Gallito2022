@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar una publicación existente</h1>
        @include('layouts.subview-form-errors')

        {!! Form::model($post, ['method' => 'PUT', 'route' => ['posts.update', $post -> id]]) !!}

        @include('posts.subview-post-fields')

        <button type="submit" class="btn btn-primary">Editar</button>

        {!! Form::close() !!}
    </div>


@endsection
