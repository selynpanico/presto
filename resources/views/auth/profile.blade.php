<x-layout>

<h1>Benvenuto {{$user->name}} {{$user->surname}}</h1>
@if(Auth::user() && Auth::user()->is_revisor)
<!-- Da inserire fighezza per notifiche revisore -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <a href="" class="btn btn-warning">Vai al pannello revisore</a>
            </div>
        </div>
    </div>
@endif
<!-- Da inserire tutti gli annunci dell'utente -->

</x-layout>