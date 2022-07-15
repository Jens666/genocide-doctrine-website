<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-900 shadow hidden lg:hidden">
    <ul class="my-0">
        @foreach ($page->menuItems as $item) 
            <li class="pl-4">
                @include('_components.menu-item', $item)
            </li>
        @endforeach
    </ul>
</nav>
