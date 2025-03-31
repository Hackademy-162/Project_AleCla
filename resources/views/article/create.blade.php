<x-layout title="admin2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>crea nuovo articolo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title0" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title0" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="itinerary" class="form-label">Itinerario</label>
                        <textarea name="itinerary" id="itinerary" cols="30" rows="10"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>