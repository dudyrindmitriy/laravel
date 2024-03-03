
    @foreach ($posts as $post)
    <div>
        <h2>{{$post->id}}</h2>
        <div>
            {{$post->title}}
        </div>
    </div>

    @endforeach
