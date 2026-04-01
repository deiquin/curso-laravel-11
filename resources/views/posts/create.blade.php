<form class="container mt-4" method="POST"
      action="{{ isset($post) ? route('posts.update',$post) : route('posts.store') }}">
    <div class="row">
        @csrf
        @isset($post)
            @method('PUT')
        @endisset

        <button>Guardar</button>


        <div class="col-md-6">
            <label class="form-label">titulo</label>
            <input name="title"  value="{{ $post->title ?? '' }}">
        </div>

        <div class="col-md-6">
            <label class="form-label">Contenido</label>
            <textarea name="content" class="form-control">{{ $post->content ?? '' }}</textarea>
        </div>
    </div>

</form>
