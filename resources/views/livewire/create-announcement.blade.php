<div>
    <h2>{{__('ui.create_announcement')}}</h2>
    

    <form wire:submit.prevent="store">
        @csrf 

        <div class='mb-3'>
            <label for="title">{{__('ui.announcement_title')}}</label>
            <input wire:model="title" type="text" class="form-control @error ('title') is-invalid @enderror">
            @error('title')
                {{$message}}
            @enderror
        </div>
        <div class='mb-3'>
            <label for="body">{{__('ui.announcement_description')}}</label>
            <textarea wire:model="body" type="text" class="form-control @error ('body') is-invalid @enderror"></textarea>
            @error('body')
                {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <select wire:model.defer='category' id="">
                <option value="">{{__('ui.select_category')}}</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class='mb-5'>
            <label for="price">{{__('ui.price')}}</label>
            <input wire:model="price" type="number" class="form-control @error ('price') is-invalid @enderror" style="width: 10%">
            @error('price')
            {{$message}}
            @enderror
        </div>
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.')is-invalid @enderror" placeholder= 'Img'/>
            @error('temporary_images.')
               <p class="text-danger mt-2">{{$message}}</p>
            @enderror
        </div>

        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>Anteprima Foto:</p>
                    <div class="row border border-4 border-info rounded shadow py-4">
                        @foreach($images as $key => $image)
                        <div class="col-12 col-md-3 d-flex my-3 justify-content-center">
                            <div>
                                <img class="img-preview mx-auto shadow rounded" src="{{$image->temporaryUrl()}}"alt="Beccate sta foto">
                                <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.delete')}}</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

  

        <button type="submit" class="btn btn-custom fw-bold mt-3">{{__('ui.create_announcement')}}</button>

        
    </form>

    @if(session()->has('message'))
    <script>
        showNotification('Success', "{{Session::get('message')}}", 'success', 3);
    </script>
    @endif
</div>