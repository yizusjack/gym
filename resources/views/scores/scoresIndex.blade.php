<x-gymLayout>
    <x-slot:title>
        Resultados {{$event->nombre_e}}
    </x-slot>
    <h1>Resultados {{$event->nombre_e}}</h1>
    @livewire('index-scores', ['event' => $event->id])

    <x/slot>
</x-gymLayout>