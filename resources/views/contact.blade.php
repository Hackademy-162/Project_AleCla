<x-layout title="contatti">
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Contattaci</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('contattaci.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="userName" class="form-label">Nome Utente</label>
                  <input type="text" class="form-control" id="userName" name="userName">
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">indirizzo email</label>
                    <input type="email" class="form-control" id="userEmail" name="userEmail">
                  </div>
                <div class="mb-3">
                  <label for="textarea" class="form-label">messaggio</label>
                  <textarea class="form-control" id="textarea" cols="30" rows="10" placeholder="scrivi il tuo messaggio" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

</x-layout>