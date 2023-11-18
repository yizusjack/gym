<div>
    
    <div class='row'>
        <div class="col-md-4">
            <label for="name">Nombre</label>
            <input type="text" wire:model='nameFilter' class="form-control" name="name" id="name">
        </div>

        <div class="col-md-4">
            <label for="alias">Alias</label>
            <input type="text" wire:model='aliasFilter' class="form-control" name="alias" id="alias">
        </div>

        <div class="col-md-4">
            <label for="value">Valor</label>
            <select wire:model="valueFilter" class="form-control" name="value" id="value">
                <option value="">--Seleccione</option>
                <option value="0.1">A</option>
                <option value="0.2">B</option>
                <option value="0.3">C</option>
                <option value="0.4">D</option>
                <option value="0.5">E</option>
                <option value="0.6">F</option>
                <option value="0.7">G</option>
                <option value="0.8">H</option>
                <option value="0.9">I</option>
                <option value="1.0">J</option>
            </select>
        </div>
    </div>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Valor</th>
            <th scope="col">Tipo</th>
            <th class='text-center' scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($elements as $element)
                <tr>
                    <td>{{$element->name_el}} 
                        @if (isset($element->alias_el))
                            ({{$element->alias_el}})
                        @endif
                    </td>
                    <td>{{$element->category_el[0]}}</td>
                    <td>
                        @switch($element->category_el[1])
                            @case('A')
                                Acro
                                @break
                            @case('T')
                                Giro
                                @break
                            @case('D')
                                Danza
                                @break
                            @default
                                *
                        @endswitch
                    </td>
                    {{--<td class='text-center'>
                        <a href="/gimnasta/{{$gim->id}}">
                             <i class="bi bi-info-circle-fill"></i>
                        </a>
                    </td>  --}}
                </tr>
            @endforeach
        </tbody>
      </table>

      {{$elements->links()}}
</div>
