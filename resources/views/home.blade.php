@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ultimas 10 publicaciones de {{ $user->name }} </h1>
    @forelse ($posts as $post)
        @include('posts.index')
    @empty
        <div class="alert alert-info" role="alert">
            El usuario no ha publicado mensajes
        </div>
    @endforelse
</div>
@endsection
