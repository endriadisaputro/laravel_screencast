<x-app-layout>
    <x-slot name="title">Create new playlist</x-slot>
    <h1 class="mb-5">Create new Playlists</h1>
    <form action="{{ route('playlists.create') }}" method="post" enctype="multipart/form-data">
        @include('playlists._form-control',[
            'submit'=>'create',
        ]);
    </form>
</x-app-layout>