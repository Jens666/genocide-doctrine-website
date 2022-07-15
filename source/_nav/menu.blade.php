<nav class="hidden lg:flex items-center justify-end text-lg">
    @foreach ($page->menuItems as $item) 
        @include('_components.menu-item', $item)
    @endforeach
</nav>
