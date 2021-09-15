<div class="w-1/5 bg-gray-800 min-h-screen p-5">
    <div class="mb-6">
        <header class="font-medium px-2 py-2 text-gray-400 text-xs uppercase">Main</header>
        <a href="{{ route('dashboard') }}" class="block text-gray-200 px-2 py-2">Dashboard</a>
    </div>
    @can('create playlists')
    <div class="mb-6">
        <header class="font-medium px-2 py-2 text-gray-400 text-xs uppercase">Playlist</header>
        <a href="{{ route('playlists.create') }}" class="block text-gray-200 px-2 py-2">Create</a>
        <a href="{{ route('playlists.table') }}" class="block text-gray-200 px-2 py-2">Table</a>
    </div>
    @endcan
    @can('create tags')
    <div class="mb-6">
        <header class="font-medium px-2 py-2 text-gray-400 text-xs uppercase">Tags</header>
        <a href="#" class="block text-gray-200 px-2 py-2">Create</a>
        <a href="#" class="block text-gray-200 px-2 py-2">Table</a>
    </div>
    @endcan
    @can('show user')
    <div class="mb-6">
        <header class="font-medium px-2 py-2 text-gray-400 text-xs uppercase">Users</header>
        <a href="#" class="block text-gray-200 px-2 py-2">Table</a>
    </div>
    @endcan

    <form class="block text-gray-200 px-2 py-2" method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>
</div>