<x-layout title="vetrina viaggi">
    <div class="sfondoItin">
            <div class="text-center mt-3">
                <h1 class="titleItin">Admin Continenti</h1>
            </div>
        <div class="container-fluid">
            <div class="row justify-content-around align-items-center">
                @foreach ($continents as $continent)
                <div class="col-4 position-relative">
                    <div class="card bg-dark mt-3 mb-5">
                        <img src="{{Storage::url($continent->img)}}" class="card-img-top imgCards" alt="{{$continent->title}}">
                        <div class="card-body justify-content-center align-items-center text-center">
                            <h5 class="card-title text-white text-center">{{$continent->title}}:</h5>
                            <a href="{{route('continents.edit', compact('continent'))}}" class="btn btn-warning text-center">Modifica</a>
                            <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete').submit();" class="btn btn-danger text-center">Elimina</a>
                            <form method="POST" action="{{route('continents.delete', compact('continent'))}}" id="form-delete">
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>