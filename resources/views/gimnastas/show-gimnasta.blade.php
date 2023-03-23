<x-gymLayout>
    <x-slot:title>
      Ver: {{$gimnasta->nombre_g}} {{$gimnasta->apellido_g}}
    </x-slot>
    <h1>Detalle</h1>
    <h2>{{$gimnasta->nombre_g}}</h2>
    <h3>{{$gimnasta->apellido_g}}</h3>
    <h4>{{$gimnasta->fecha_n_g}}</h4>


    <a href="{{route('gimnasta.edit', $gimnasta)}}">Editar</a>

    <p>
        <form action="{{route('gimnasta.destroy', $gimnasta)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </p>
</x-gymLayout>