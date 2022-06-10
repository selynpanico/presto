<div>
    @if(!$is_sent)
    <button wire:click='sendRequest' class="btn btn-light d-flex">clicca qui <img src="/img/icone/presto_icona-all.svg" alt="" width="20px"></button>
    @else
        <h2>Grazie per averci contattato</h2>
        <!-- <x-bladewind.notification position="bottom right" />
        <script>
            livewire.on('sentEmail', title => {
                console.log(title);
                showNotification('Titolo',title);
            })
        </script> -->
    @endif
</div>
