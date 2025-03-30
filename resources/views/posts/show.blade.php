<x-layout title="dettaglio viaggio">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Viaggio in ...</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p class="card-text">{{$post->description}}</p>
                      <p class="card-text">{{$post->itinerary}}</p>
                      <a href="{{route('index.post')}}" class="btn btn-primary">torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>