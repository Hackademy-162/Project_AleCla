<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Vetrina</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('store.post')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Viaggio</label>
                      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
                    </div>
                    <div class="mb-3">
                      <label for="post-img" class="form-label">immagini viaggio</label>
                      <input type="file" class="form-control" id="post-img" name="img">
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="post-description">descrizione</label>
                        <textarea class="form-control" name="description" id="post-description" cols="30" rows="10" placeholder="scrivi la descrizione della meta"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="post-itinerary">itinerario</label>
                        <textarea class="form-control" name="itinerary" id="post-itinerary" cols="30" rows="10" placeholder="scrivi l'itinerario del tuo viaggio"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>