<x-gymLayout>
    <x-slot:title>
        Resultado 
    </x-slot>
    <h1>Resultado</h1>

    @php
        $ey = "https://open.spotify.com/embed/episode/7kViuYnPUfhhhkdJJd5cWr?utm_source=generator"
    @endphp



    <iframe style="border-radius:12px" src={{$ey}} width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

</x-gymLayout>