<a 
    title="{{ $page->siteName }} {{ $name }}" 
    href="{{ $link }}"
    class="font-serif ml-6 text-gray-100 hover:text-gray-400 {{ $page->isActive($link) ? 'active text-gray-400' : '' }}">
    {{ $name }}
</a>
