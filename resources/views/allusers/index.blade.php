@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Publicaciones de {{$user->name}}</h2>
        <div class="card mb-2">
            <div class="card-body">
                @forelse ($posts as $post)
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
                    <p class="card-text">{{ $post->content }}</p>
                @empty
                    <div class="alert alert-info" role="alert">
                        El usuario no ha publicado mensajes
                    </div>
                @endforelse
                <div class="mt-3">
                    {{ $posts->links() }}
                </div>






            </div>
        </div>
        <div class="">
            <button type="button" class="btn btn-secondary" href="">
                <a href="{{ route('welcome')}} " type="button" class="btn btn-secondary">
                    Volver
                </a>
            </button>
        </div>
    </div>


@endsection
