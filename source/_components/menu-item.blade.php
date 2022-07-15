<a 
    title="{{ $page->siteName }} {{ $name }}" 
    href="{{ $link }}"
    class="font-serif ml-6 text-gray-100 hover:text-blue-600 {{ $page->isActive($link) ? 'active text-blue-600' : '' }}">
    {{ $name }}
</a>
