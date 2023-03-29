<x-gymLayout>
    <x-slot:title>
        Gimnastas
    </x-slot>
    <h1>Gimnastas</h1>

    
    @php
        $hoy = getdate();
        $fecha = $hoy['year'] . '-' . $hoy['mon'] . '-' . $hoy['mday'];
        $fechaHoy = new DateTime($fecha);
    @endphp


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Fecha de nacimiento</th>
            <th class='text-center' scope="col">Ver detalle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($gimnastas as $gim)
                @php
                    $fechaN = new DateTime($gim->fecha_n_g);
                    $Diferencia = $fechaHoy ->diff($fechaN);
                @endphp
                <tr>
                    <td>{{$gim->nombre_g}}</td>
                    <td>{{$gim->apellido_g}}</td>
                    <td>{{$Diferencia -> format('%Y')}} años</td>
                    <td>{{$fechaN->format('d')}}-{{$fechaN->format('m')}}-{{$fechaN->format('Y')}}</td>
                    <td class='text-center'>
                        <a href="/gimnasta/{{$gim->id}}">
                             <i class="bi bi-info-circle-fill"></i>
                        </a>
                    </td>  
                </tr>
            @endforeach
            <tr>
                <td><a href="{{route('gimnasta.create')}}">
                    <i class="bi bi-person-plus-fill"></i>
                    <span>Agregar gimnasta</span>
                </a></td>
            </tr>
        </tbody>
      </table>
    
    
    <x/slot>
</x-gymLayout>