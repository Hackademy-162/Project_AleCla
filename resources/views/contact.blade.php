<x-layout title="contatti">
<div class="container-fluid vh-100 imgCont">
    <div class="row">
        <div class="col-12 mt-5 text-white">
            <h1>Contattaci</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('contattaci.store')}}">
                @csrf
                <div class="mb-3">
                  <label for="userName" class="form-label text-white">Nome Utente:</label>
                  <input type="text" class="form-control bg-dark text-white" id="userName" name="userName">
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label text-white">Indirizzo email:</label>
                    <input type="email" class="form-control bg-dark text-white" id="userEmail" name="userEmail">
                  </div>
                <div class="mb-3">
                  <label for="textarea" class="form-label text-white">Messaggio:</label>
                  <textarea class="form-control bg-dark text-white" id="textarea" cols="30" rows="10" placeholder="scrivi il tuo messaggio" name="message"></textarea>
                  <button type="submit" class="btn btn-primary">Invia</button>
                </div>
                
                
              </form>
        </div>
    </div>
</div>
</x-layout>