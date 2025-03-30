<x-layout>
    <div class="sfondoDettaglio">
        {{-- <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="titleItin mt-5 mb-5">VIAGGIA CON NOI PER TUTTO IL GLOBO</h1>
                </div>
            </div>
            <div class="row justify-content-between text-center">
                @foreach ($posts as $post)
                <div class="col-4 col-md-4 mt-5 mb-5">
                    
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text text-truncate">{{$post->description}}</p>
                            <a href="{{route('show.post', ['id' => $post->id])}}" class="btn btn-primary">Itinerario</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div> --}}
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-12 col-md-6 title rounded mt-5 mb-5">
                    <h1 class="mt-5">VIAGGIA CON NOI PER IL GLOBO</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                @foreach ($posts as $post)
                <div class="col-4 mb-3">
                    <div class="card bg-dark mt-5 mb-5" style="width: 18rem;">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
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