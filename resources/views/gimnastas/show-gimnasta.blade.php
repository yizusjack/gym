<x-gymLayout>
    <x-slot:title>
      Ver: {{$gimnasta->nombre_g}} {{$gimnasta->apellido_g}}
    </x-slot>
    @php
        $hoy = getdate();
        $fecha = $hoy['year'] . '-' . $hoy['mon'] . '-' . $hoy['mday'];
        $fechaHoy = new DateTime($fecha);
        $fechaN = new DateTime($gimnasta->fecha_n_g);
        $Diferencia = $fechaHoy ->diff($fechaN);
    @endphp
    <h1>{{$gimnasta->nombre_g}} {{$gimnasta->apellido_g}}</h1>
    <div class='row'>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Detalles</h5>

                <!-- Default Table -->
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Nombre</th>
                        <td>{{$gimnasta->nombre_g}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Apellido</th>
                        <td>{{$gimnasta->apellido_g}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nacimiento</th>
                        <td>{{$gimnasta->fecha_n_g}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Edad</th>
                        <td>{{$Diferencia -> format('%Y')}} años</td>
                    </tr>
                    </tbody>
                </table>
                <!-- End Default Table Example -->
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Información</h5>
                    <p>{{$gimnasta->nombre_g}} {{$gimnasta->apellido_g}} es una gimnasta artística nacida el {{$fechaN->format('d')}} de 
                        @switch($fechaN->format('m'))
                            @case(1)
                                enero
                                @break
                            @case(2)
                                febrero
                                @break
                            @case(3)
                                marzo
                                @break
                            @case(4)
                                abril
                                @break
                            @case(5)
                                mayo
                                @break
                            @case(6)
                                junio
                                @break
                            @case(7)
                                julio
                                @break
                            @case(8)
                                agosto
                                @break
                            @case(9)
                                septiembre
                                @break
                            @case(10)
                                octubre
                                @break
                            @case(11)
                                noviembre
                                @break
                            @case(12)
                                diciembre
                                @break
                            @default
                                nada
                        @endswitch
                        de {{$fechaN->format('Y')}} ({{$Diferencia -> format('%Y')}} años).
                    </p>
                    <form action="{{route('gimnasta.destroy', $gimnasta)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class='text-center'>
                            <a href="{{route('gimnasta.edit', $gimnasta)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-gymLayout>