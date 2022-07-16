@extends('_layouts.main')

@section('body')

<div class="">

    <img src="/assets/img/gd-logo.png" alt="Dysgnostic logo"
    class="flex full bg-contain mx-auto">

    <h1 class="font-serif text-gray-100 text-lg md:text-2xl text-center">{{ $page->siteDescription }}</h1>

    <div class="max-w-2xl mx-auto border border-gray-100">
        <iframe style="border: 0; width: 100%; height: 120px;" src="https://bandcamp.com/EmbeddedPlayer/album=449045686/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/artwork=small/transparent=true/" seamless><a href="https://genocidedoctrine.bandcamp.com/album/genocide-doctrine">GENOCIDE DOCTRINE by Genocide Doctrine</a></iframe>    </div>
</div>
@stop
