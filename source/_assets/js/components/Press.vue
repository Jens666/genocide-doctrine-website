<template>
    <div v-if="show" class="grid grid-cols-1 md:grid-cols-2 gap-4 content-start">
        <div class="mt-6">
            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/1428491329%3Fsecret_token%3Ds-lM2OXjpPU54&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/richardt-olsen" title="Richardt Olsen" target="_blank" style="color: #cccccc; text-decoration: none;">Richardt Olsen</a> · <a href="https://soundcloud.com/richardt-olsen/sets/gd-setlist/s-lM2OXjpPU54" title="GD SETLIST" target="_blank" style="color: #cccccc; text-decoration: none;">GD SETLIST</a></div>
        </div>

        <div>
            <p class="text-gray-100">With a new and matured sound Dysgnostic takes on where Defilementory left off.</p>
            <p class="text-gray-100">Musically Dysgnostic presents a creative and original take on dissonant death metal that is both dark and atmospheric, yet retains intensity and aggression. 
                The guitars step within the traditional boundries of power-chord based death metal as well as outside making use of extended open chords, harmonics and swells. 
                The drums accompany the guitars by playing with or against the patterns dictated by the guitars.
                The bass takes liberties between and outside the guitar and drums. The vocals are shitty at best.</p>
            <p class="text-gray-100">
                The music seldomly rests as the listener is thrown in harms way between crushing brutality and agonizing atmosphere.</p>
        </div>
    </div>
</template>

<script>

export default {
    data() {
        return {
            query: '',
            show: false,
            allowedVisitor: [
                {
                    visitor: 'devilution.dk',
                    token: 'test',
                },
                {
                    visitor: 'derp.dk',
                    token: 'test',
                },
                {
                    visitor: 'lal',
                    token: 'test',
                },
            ]
        };
    },
    created() {
        const urlParams = new URLSearchParams(window.location.search);
      
        const count = this.allowedVisitor.length
        for (let i = 0; i < count; i++) {
            this.show = urlParams.get('visitor') == this.allowedVisitor[i].visitor &&
                urlParams.get('token') == this.allowedVisitor[i].token;
                
            if (this.show) {
                break;
            }
        }
    },
};
</script>

