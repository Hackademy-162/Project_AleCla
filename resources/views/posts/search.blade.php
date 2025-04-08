<x-layout title="vetrina viaggi">
    <div class="sfondoDettaglio">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-12 col-md-6 title rounded mt-5 mb-5">
                    <h1 class="mt-5">tutti i viaggi in {{$continent->title}}</h1>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                {{-- @dd($continent->posts); --}}
                @foreach ($continent->posts as $post)
                <div class="col-4 mb-3">
                    <div class="card bg-dark mt-5 mb-5" style="width: 18rem;">
                        <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$post->title}}:</h5>
                            <p class="card-text mb-5 textDimension text-white">Continente:{{$post->continent->title}}</p>
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