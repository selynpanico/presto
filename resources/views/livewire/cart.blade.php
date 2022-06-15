<div>
    @if($contain)
    <button wire:click="setInCart" class="btn btn-outline-light"><p class="text-danger">Rimuovi dal carrello</p><i class="text-danger bi bi-cart-dash"></i></button>
    
    @else
    <button wire:click="setInCart" class="btn btn-outline-light"><p class="text-success">Aggiungi al carrello</p><i class="text-success bi bi-cart-plus"></i></button>
    
    @endif
</div>
