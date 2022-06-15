<div>
    @if(!$contain)
    <i wire:click="like" class="bi bi-heart" style="cursor: pointer;"></i>
        <!-- <div class="heart"></div> -->
    @else
        <i wire:click="like" class="bi text-danger bi-heart-fill" style="cursor: pointer;"></i>
        <!-- <div wire:click="like" class="heart"></div> -->
    @endif
</div>
