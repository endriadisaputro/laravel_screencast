<x-app-layout>
    <x-slot name="title">Your playlists</x-slot>
    <h1 class="m-5 text-xl">Your Playlists</h1>

    <x-table>
            <tr>
                <x-th>#</x-th>
                <x-th>Name</x-th>
                <x-th>Price</x-th>
                <x-th>Create</x-th>
                <x-th>Action</x-th>
            </tr>
            @foreach ($playlists as $index => $item)
            <tr>
                <x-th>{{ $playlists->count() * ($playlists->currentPage()-1) + $loop->iteration }}</x-th>
                <x-td>{{ $item->name }}</x-td>
                <x-td>{{ $item->price }}</x-td>
                <x-td>{{ $item->created_at->format('d M Y') }}</x-td>
                <x-td>
                    <a href="#">Edit</a>
                </x-td>
            </tr>
            @endforeach
    </x-table>
    {{ $playlists->links() }}
</x-app-layout>