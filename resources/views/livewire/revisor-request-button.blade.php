<div>
    @if(!$is_sent)
    <button wire:click='sendRequest' class="btn btn-warning">CLICCA QUI</button>
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
