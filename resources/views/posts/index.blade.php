<x-layout title="vetrina viaggi">
    <div class="sfondoItin">
            <div class="text-center mt-3">
                <h1 class="titleItin">Viaggia per tutto il globo con ALECLA</h1>
            </div>
        <div class="container-fluid">
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                <div class="col-4 position-relative">
                    <div class="card bg-dark mt-3 mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text mb-5 textDimension text-white">Continente:{{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text mb-5 textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>