<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Vetrina Viaggi</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{$post->description}}</p>
                      <a href="{{route('show.post', [$id => $post->id])}}" class="btn btn-primary">vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>