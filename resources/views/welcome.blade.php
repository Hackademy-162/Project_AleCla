<x-layout title="homepage">
    <header class="container-fluid">
        <div class="row text-center">
            @if (session('message'))
            <div class="alert alert-success mt-4 container-fluid">
                {{ session('message') }}
            </div>
            @endif
            {{-- CAROUSEL --}}
            <div class="col-12 mt-4 p-0">                
                <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($continents as $continent)
                        <a href="{{route('index.post')}}">
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative" data-bs-interval="3000">
                               <img src="{{Storage::url($continent['img'])}}" class="d-block w-100" id="headerHome" alt="immagini carosello">
                               <h1 class="title">ALECLA<br>Viaggi</h1>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    
                </div> 
            </div>
        </div>
    </header>
</x-layout>