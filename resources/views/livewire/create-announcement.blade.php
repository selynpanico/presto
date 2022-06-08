<div>
    <h1>Crea il tuo annuncio</h1>
    

    <form wire:submit.prevent="store">
        @csrf 

        <div class='mb-3'>
            <label for="title">Titolo Annuncio</label>
            <input wire:model="title" type="text" class="form-control @error ('title') is-invalid @enderror">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div class='mb-3'>
            <label for="body">Descrizione</label>
            <textarea wire:model="body" type="text" class="form-control @error ('body') is-invalid @enderror"></textarea>
            @error('body')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <select wire:model.defer='category' id="">
                <option value="">Scegli la categoria</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class='mb-3'>
            <label for="price">Prezzo</label>
            <input wire:model="price" type="number" class="form-control @error ('price') is-invalid @enderror">
            @error('price')
                {{$message}}
            @enderror
        </div>

        <button type="submit" class="btn btn-warning">Crea Annuncio</button>

    </form>
    <x-bladewind.notification position="bottom right" />
    @if(session()->has('message'))
    <script>
    showNotification('Success', "session(message)", 'success', 3);
    </script>   
    @endif
</div>
