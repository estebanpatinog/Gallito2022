<div class="card mb-2">
    <div class="card-body">
        <div class="">
            <a href="{{ route('posts.edit', $post->id) }}" class = "btn btn-info">
                <i class="fa-solid fa-pen-to-square" title="Editar Post"></i>
            </a>


            

            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fa-solid fa-trash-can"></i>', [
                'type' => 'submit',
                'title' => "Remover Post",
                'class' => 'btn btn-danger',
                'onclick' => "return confirm('¿Está seguro?')"
            ]) !!}
            {{-- <a href="#" onclick="">
                <i class="fa-solid fa-trash-can" title="Remover Post"></i>
            </a> --}}

            {!! Form::close() !!}




        </div>

        <h5 class="card-title">{{ $user->name }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
        <p class="card-text">{{ $post->content }}</p>
    </div>
</div>
