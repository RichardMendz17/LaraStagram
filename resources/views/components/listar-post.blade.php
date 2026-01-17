<div>
    @if ($posts->count() ) <!-- puedes quitar el mayor a 0 -->
        <div>
            {{  $posts->links('pagination::tailwind'); }}
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-5">
            @foreach ($posts as $post )
                <div>
                    <a href="{{ route('posts.show',
                                    [
                                        'post' => $post, 
                                        'user' => $post->user
                                    ]
                                    ) }}">
                        <img src="{{ asset('uploads'). '/'. $post->imagen }}" alt="Imagen del post {{ $post->titulo }}">
                    </a>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-600 uppercase text-sm text-center font-bold">No hay posts</p>
    @endif
</div>