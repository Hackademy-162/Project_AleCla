<x-layout title="admin">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Admin modifica</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('post.update', ['id' => $post->id])}}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Viaggio</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" name="title" value="{{$post->title}}">
                      @error('title')<div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <select name="continent" id="">
                        @foreach ($continents as $continent)
                            <option value="{{$continent->id}}">{{$continent->title}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                      <img src="{{Storage::url($post->img)}}" alt="{{$post->title}}" height="100">
                    </div>
                    <div class="mb-3">
                        <label for="post-img" class="form-label">Immagini viaggio</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror" id="post-img" name="img">
                        @error('img')<div class="alert alert-danger">{{ $message }}</div> @enderror
                      </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="post-description">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="post-description" cols="30" rows="10" placeholder="scrivi la descrizione della meta">{{$post->description }}</textarea>
                        @error('description')<div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="post-itinerary">Itinerario</label>
                        <textarea class="form-control @error('itinerary') is-invalid @enderror" name="itinerary" id="post-itinerary" cols="30" rows="10" placeholder="scrivi l'itinerario del tuo viaggio">{{$post->itinerary }}</textarea>
                        @error('itinerary')<div class="alert alert-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>