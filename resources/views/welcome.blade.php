<x-layout title="homepage">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="red">Welcome</h1>
            </div>
        </div>
    </div>
    
    
    
    
</x-layout>