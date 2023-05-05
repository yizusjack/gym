<x-gymLayout>
    <x-slot:title>
        Galeria {{$gimnasta->nombre_g}}
    </x-slot>
    <h1>Galeria</h1>

    <section id="galeria" class="container">
        <div class="row">
            @foreach ($pics as $pic)
                <div class="col-lg-4 col-md-6 cold-sm-12 bor">
                    <img src="{{Storage::url($pic->hash)}}" class="img-fluid">  
                </div>
            @endforeach
        </div>
    </section>
    <x/slot>
</x-gymLayout>