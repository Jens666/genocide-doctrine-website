@extends('_layouts.main')

@section('body')

<div class="">
    <img src="/assets/img/dysgnostic-logo.png" alt="Dysgnostic logo"
    class="flex full bg-contain mx-auto">

    <h1 class="font-serif text-gray-100 text-lg md:text-2xl text-center">Dissonant death metal from Denmark</h1>

    <div class="max-w-2xl mx-auto mt-16">
        <iframe style="border: 0; width: 100%; height: 42px; margin: auto;" src="https://bandcamp.com/EmbeddedPlayer/album=2724444281/size=small/bgcol=ffffff/linkcol=333333/track=2652521034/transparent=true/" seamless><a href="https://transcendingobscurity.bandcamp.com/album/label-sampler-2022">Label Sampler 2022 by Transcending Obscurity Records</a></iframe>
    </div>
</div>


<!---
    @foreach ($posts->where('featured', true) as $featuredPost)
        <h1>test</h1>
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach


    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach

    --->
@stop
