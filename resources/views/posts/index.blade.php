<x-layout title="Elenco itinerari">
        <div class="container-fluid bannerIndex gradientOverlay">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="titleItin">AFRICA:</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid sfondoIndex">
            <div class="row justify-content-around align-items-center min-vh-100">
                @foreach ($posts as $post)
                @if ($post->continent->title == "AFRICA")
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="card cardsIndex bg-dark mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text textDimension text-white mb-3">Continente: {{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid bannerIndex">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="titleItin">AMERICHE:</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid sfondoIndex2">
            <div class="row justify-content-around align-items-center min-vh-100">
                @foreach ($posts as $post)
                @if ($post->continent->title == "AMERICHE")
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="card cardsIndex bg-dark mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text textDimension text-white mb-3">Continente: {{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid bannerIndex">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="titleItin">ASIA:</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid sfondoIndex3">
            <div class="row justify-content-around align-items-center min-vh-100">
                @foreach ($posts as $post)
                @if ($post->continent->title == "ASIA")
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="card cardsIndex bg-dark mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text textDimension text-white mb-3">Continente: {{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid bannerIndex">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="titleItin">EUROPA:</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid sfondoIndex4">
            <div class="row justify-content-around align-items-center min-vh-100">
                @foreach ($posts as $post)
                @if ($post->continent->title == "EUROPA")
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="card cardsIndex bg-dark mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text textDimension text-white mb-3">Continente: {{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid bannerIndex">
            <div class="row text-center">
                <div class="col-12 mt-5">
                    <h1 class="titleItin">OCEANIA:</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid sfondoIndex5">
            <div class="row justify-content-around align-items-center min-vh-100">
                @foreach ($posts as $post)
                @if ($post->continent->title == "OCEANIA")
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="card cardsIndex bg-dark mb-5">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top imgCards" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            @if ($post->continent)
                            <a href="{{route('post.continent.search', ['continent' =>$post->continent])}}"><p class="card-text textDimension text-white mb-3">Continente: {{$post->continent->title}}</p></a>
                            @else
                            <p class="card-text textDimension">Continente: Anonimo</p>
                            @endif
                            <h6 class="card-title text-white text-center text-truncate">{{$post->description}}</h6>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-light text-center">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    
</x-layout>