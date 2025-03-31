<x-layout title="homepage">
    <header class="container-fluid text-center vh-100 ">
        <div class="row">
            @if (session('message'))
            <div class="alert alert-success mt-4 container-fluid">
                {{ session('message') }}
            </div>
            @endif
            <h1 class="title">ALECLA Viaggi</h1>
            <div class="col-12 m-0 p-0">
                
                
                {{-- CAROSELLO --}}
                
                {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide">
                    <div class="carousel-indicators">
                        @foreach ($cards as $card)
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$card['id']}}" class="active" aria-current="true" aria-label="{{$card['id']}}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($cards as $card)
                        <a href="{{route('paginaViaggi')}}">
                            <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="10000">
                                <img src="{{$card['img']}}" class="d-block vh-100 w-100" alt="immagini carosello">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 class="text-white">{{$card['title']}}</h2>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev btnWhite" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next btnWhite" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div> --}}
            </div>
        </div>
    </header>
</x-layout>