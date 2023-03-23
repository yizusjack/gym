<x-gymLayout>
    <x-slot:title>
      Gimnastas
    </x-slot>
    <h1>Gimnastas</h1>
    <a href="/gimnasta/create">Agregar gimnasta</a>
    <ul>
        @foreach ($gimnastas as $gim)
            <li>
                {{$gim->id}} - {{$gim->nombre_g}}  {{$gim->apellido_g}}
                <a href="/gimnasta/{{$gim->id}}">Ver detalle</a>
            </li>
        @endforeach
    </ul>
    @php
        $hoy = getdate();
        print_r($hoy);
    @endphp

    
    <x/slot>
</x-gymLayout>