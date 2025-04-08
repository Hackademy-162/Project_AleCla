<x-layout title="admin2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Crea continente</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('continents.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="continentName" class="form-label">Continente</label>
                      <input type="text" class="form-control" id="continentName" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="continentImg" class="form-label">img continente</label>
                      <input type="file" class="form-control" id="continentImg" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
                  
            </div>
        </div>
    </div>
</x-layout>