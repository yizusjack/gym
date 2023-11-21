<x-gymLayout>
    <x-slot:title>
       {{$podcast->title_p}}
    </x-slot>
    <h1>{{$podcast->title_p}}</h1>


    <iframe style="border-radius:12px" src={{$podcast->url_p}} width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>

    <div class="row mt-3">
        <div class="card">
            <h5 class="card-title">Description</h5>
            <p>{!! $podcast->description_p !!}</p>
        </div>
    </div>

</x-gymLayout>