<x-layout title="registrati">
    <div class="container-fluid vh-100 imgCont">
        <div class="row">
            <div class="col-12 mt-5 text-white">
                <h1>Registrati:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="user-name" class="form-label text-white">Nome Utente</label>
                      <input type="text" class="form-control bg-dark text-white" id="user-name" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Indirizzo Email</label>
                        <input type="email" class="form-control bg-dark text-white" id="email" aria-describedby="emailHelp" name="email">
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label text-white">Password</label>
                      <input type="password" class="form-control bg-dark text-white" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password-confirmation" class="form-label text-white">Conferma Password</label>
                        <input type="password" class="form-control bg-dark text-white" id="password-confirmation" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>