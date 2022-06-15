<x-layout>
<h1 class="text-center">I tuoi annunci preferiti</h1>

<div class="container">
        <div class="row">
            @forelse($announcements as $announcement)
                <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                    <x-cards :announcement="$announcement"/>
                </div>
            @empty
                <div class="col-12">
                <x-bladewind.empty-state message="{{__('ui.no_announcement')}}"></x-bladewind.empty-state>
                </div>
            @endforelse
            {{$announcements->links('vendor.pagination.custom')}}
        </div>
    </div>







</x-layout>