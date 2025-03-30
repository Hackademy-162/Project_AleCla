<x-layout title="registrati">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Registrati</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="user-name" class="form-label">Nome Utente</label>
                      <input type="text" class="form-control" id="user-name" aria-describedby="emailHelp" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                      </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password-confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password-confirmation" name="password_confirmation">
                      </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>