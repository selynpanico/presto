<div>
    <h2>Crea il tuo annuncio</h2>
    

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
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
            @error('temporary_images.*')
            <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>
        @if(!empty($images))
        <div class="row">
            <div class="col-12">
                </div>
                <p>Photo preview:</p>
                <div class="row border border-4 border-info rounded shadow py-4">
                    @foreach($images as $key => $image)
                    <div class="col my-3">
                        <div class="img-preview mx-auto shadow rounded" style="background-image:url({{$image->temporaryUrl()}}); height:50px"></div>
                        <button type="button"class="btn btn-danger shadowd-block text-center mt-2mx-auto" wire:click="remove Image({{$key}})">Cancella</button>
                </div>
                @endforeach
            </div>
        </div>
        @endif
        

        <button type="submit" class="btn btn-warning">Crea Annuncio</button>

        
    </form>

    @if(session()->has('message'))
    <script>
        showNotification('Success', "{{Session::get('message')}}", 'success', 3);
    </script>
    @endif



</div>
