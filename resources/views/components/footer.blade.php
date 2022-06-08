<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center"> 
                <h5>LAVORA CON NOI</h5>
                <p>Se sei in cerca di un arrotondamento per lo stipendio da fame in italia</p>
                <a href="{{route('became.revisor')}}" class="btn btn-warning">CLICCA QUI</a>
             </div>
        </div>
    </div>
    <x-bladewind.notification position="bottom right" />
    @if(session()->has('message'))
    <script>
        showNotification('Success', "Canditatura inviata con successo", 'success', 3);
    </script>   
    @endif
</footer>