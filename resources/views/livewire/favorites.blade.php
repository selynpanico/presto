<div>
    @if(!$contain)
        <i wire:click="like" class="bi bi-heart"></i> 
    @else
        <i wire:click="like" class="bi text-danger bi-heart-fill"></i>
    @endif
</div>
