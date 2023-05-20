<div>
    <div class='row'>
        <div class="col-md-4">
          <label for="paises">Pais</label>
          <select wire:model='paisesFilter' class="form-control" name="paises" id="paises">
            <option value="">--Seleccione</option>
            @foreach($paises as $pais)
              <option value="{{$pais->id}}">{{$pais->nombre_p}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-md-4">
            <label for="nombre_g">Nombre</label>
            <input type="text" wire:model='nombreFilter' class="form-control" name="nombre_g" id="nombre_g">
        </div>
        <div class="col-md-4">
            <br>
            <a href="{{route('gimnasta.json')}}"><button type="button"" class="btn btn-primary">Generar JSON</button></a>
        </div>
    </div>

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
            <th scope="col">Pais</th>
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
                    <td><x-dynamic-component component="flag-country-{{$gim->paises->iso2code_p}}" class="d-inline-block w-6 h-6"/> {{$gim->paises->nombre_p}}</td>
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
      
      {{$gimnastas->links()}}
</div>
