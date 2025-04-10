<x-layout title="homepage">
    <header class="container-fluid">
        <div class="row text-center">
            @if (session('message'))
            <div class="alert alert-success container-fluid vh-100">
                {{ session('message') }}
            </div>
            @endif

            {{-- CAROUSEL --}}

            <div class="col-12 p-0 m-0">                
                <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($continents as $continent)
                        <a href="{{route('index.post')}}">
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative" data-bs-interval="2800">
                               <img src="{{Storage::url($continent['img'])}}" class="d-block w-100" id="headerHome" alt="immagini carosello">
                            </div>
                            <h1 class="titleWelcome">ALECLA<br>Viaggi</h1>
                        </a>
                        @endforeach
                    </div>

                </div> 
            </div>
        </div>
    </header>
</x-layout>