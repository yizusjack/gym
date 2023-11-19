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
    <br>
    <form class="row g-3" wire:submit.prevent = "calculate" {{--action="{{route('calculator.store')}}"--}} method="POST">
        @csrf

        @php
            $keys = array_keys($inputs);
        @endphp
        @for ($i = 0; $i < sizeof($inputs); $i++)
          <br>
          <div class="row mt-2">
            <div class="col-3">
              <select wire:model="element.{{$i}}.0" name="element.{{$i}}.0" class="form-control" placeholder="elemento"
              @php
                try{
                  if ($this->element[$i][0] != '') {
                    echo('wire:ignore');
                  }
                }
                catch(Exception $e){

                }
              @endphp
              >
              <option value="">--</option>
                @foreach ($elements as $element)
                    <option value="{{$element->category_el . $element->id}}">{{$element->name_el}} 
                      @if ($element->alias_el)
                        ({{$element->alias_el}})
                      @endif
                    </option>
                @endforeach
              </select>
                {{--<input wire:model="element.{{$i}}.0" name="element.{{$i}}.0" type="text" class="form-control" placeholder="elemento">--}}
            </div>
            @foreach ($inputs[$keys[$i]] as $key => $value)
              @if ($key != "index")
                <div class="col-3">
                  {{--<input wire:model="element.{{$i}}.{{$value}}" name="element.{{$i}}.{{$value}}" type="text" class="form-control" placeholder="elemento">--}}
                  <select wire:model="element.{{$i}}.{{$value}}" name="element.{{$i}}.{{$value}}" class="form-control" placeholder="elemento"
                    @php
                    try{
                      if ($this->element[$i][$value]) {
                        echo('wire:ignore');
                      }
                    }
                    catch(Exception $e){
    
                    }
                    @endphp
                  >
                  <option value="">--</option>

                    @foreach ($elements as $element)
                        <option value="{{$element->category_el . $element->id}}">{{$element->name_el}} 
                          @if ($element->alias_el)
                            ({{$element->alias_el}})
                          @endif
                        </option>
                    @endforeach
                  </select>
                </div>
              @endif
            @endforeach
            <div class="col-1">
              <button wire:click="addColumn({{$keys[$i]}})" class="btn btn-success" type="button">+</button>
            </div>
            <div class="col-1">
              <button wire:click="removeRow({{$i}})" class="btn btn-danger" type='button'>Quitar</button>
            </div>
          </div>
        @endfor

        <div class="col-1">
          <button wire:click="addRow({{$index}})" class="btn btn-primary" type='button'>New</button>
        </div>

        <div class="text-center">
          <button wire.click="calculate" type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>
      </form><!-- Vertical Form -->
</div>
