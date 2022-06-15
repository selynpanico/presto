<div>
    @if(!$contain)
        <i wire:click="like" class="bi bi-heart"></i> 
        <!-- <div class="heart"></div> -->
    @else
        <!-- <i wire:click="like" class="bi text-danger heart bi-heart-fill"></i> -->
        <div wire:click="like" class="heart"></div>
    @endif
</div>
