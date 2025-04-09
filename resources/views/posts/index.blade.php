<x-layout title="Elenco itinerari">
    <div class="sfondoItin">
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12 mt-4">
                    <h1 class="text-center titleItin">AFRICA:</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                @if ($post->continent->title == "AFRICA")
                <div class="col-4 position-relative">
                    <div class="card bg-dark mb-5">
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
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center titleItin">AMERICHE:</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                @if ($post->continent->title == "AMERICHE")
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
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center titleItin">ASIA:</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                @if ($post->continent->title == "ASIA")
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
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center titleItin">EUROPA:</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                @if ($post->continent->title == "EUROPA")
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
                @endif
                @endforeach
            </div>
        </div>
        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center titleItin">OCEANIA:</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                @if ($post->continent->title == "OCEANIA")
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
                @endif
                @endforeach
            </div>
        </div>
    </div>
</x-layout>