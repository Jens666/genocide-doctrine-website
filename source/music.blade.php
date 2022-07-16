---
title: Press
description: This is the press section
---
@extends('_layouts.main')

@section('body')
    <h1 class="font-serif text-gray-100">Music</h1>

    <h3 class="mb-2">Genocide Doctrine</h3>
    <hr class="border border-gray-100 my-0"/>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 content-start">
        <div class="embed-container mt-6 video-container border border-gray-100">
            <iframe style="border: 0; width: 100%; height: 350px;" src="https://bandcamp.com/EmbeddedPlayer/album=449045686/size=large/bgcol=ffffff/linkcol=333333/artwork=small/transparent=true/" seamless><a href="https://genocidedoctrine.bandcamp.com/album/genocide-doctrine">GENOCIDE DOCTRINE by Genocide Doctrine</a></iframe>
        </div>
        <div>
            <p>
                Our self-titled debut release.
            </p>
            <p>
                Drums were recorded at Musicscool Roskilde. <br/>
                Guitars and bass were recorded in a dark living room.  <br/>
                Vocals were recorded in our rehearsal space. <br/>
            </p>
            <p>
                Mixed and mastered by Jacob Bredahl - Dead Rat Studio.
            </p>
        </div>
    </div>
@stop
