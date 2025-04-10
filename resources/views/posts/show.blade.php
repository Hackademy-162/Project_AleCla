<x-layout title="Dettagli del viaggio">
    
        <div class="container-fluid sfondoShow vh-100">
            <div class="row justify-content-center align-content-center text-center">
                <div class="col-12">
                    <h1 class="titleItin mt-5">Viaggio a:</h1>
                </div>
            </div>
            <div class="row justify-content-center align-content-center text-center">
                <div class="col-7 cardsShow">
                    <div class="card text-bg-dark cardsShow textShadow">
                        <img src="{{Storage::url($post->img)}}" class="card-img" alt="{{$post->title}}">
                        <div class="card-img-overlay">
                            <h5 class="card-title titleCard">{{$post->title}}</h5>
                            @if ($post->continent)
                            <p class="card-text mb-3 textDimension">Continente: {{$post->continent->title}}</p>
                            @else
                            <p class="card-text mb-3 textDimension">Continente: Anonimo </p>
                            @endif
                            <p class="card-text mb-5 textDimension">{{$post->description}}</p>
                            <p class="card-text mb-5 textDimension">{{$post->itinerary}}</p>
                            <a href="{{route('index.post')}}" class="btn btn-primary mb-5 textDimension">Torna indietro</a>
                            <a href="{{route('edit.post', ['id' => $post->id])}}" class="btn btn-warning mb-5 textDimension">Modifica articolo</a>
                            <a href="{{route('delete.post', ['id' => $post->id])}}" class="btn btn-danger mb-5 textDimension" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();">Elimina articolo</a>
                            <form action="{{route('delete.post', ['id' => $post->id])}}" method="POST" id="form-delete">
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</x-layout>