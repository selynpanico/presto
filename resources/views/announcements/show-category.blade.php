<x-layout>
    @foreach($announcements as $announcement)
    Ciao sono l'annuncio {{$announcement->title}}
    @endforeach

</x-layout>