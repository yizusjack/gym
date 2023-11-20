<div>
  @if($this->displayScore == false)
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
              <option value="I">Indirect connection</option>
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
                  <option value="IN">Indirect connection</option>
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

        <div class="row mt-2">
          <div class="form-check">
            <input type="checkbox" id="requirements0" wire:model="requirements.{{0}}" value={{true}} class="form-check-input">
            <label for="requirements0" class="form-check-label">Doble salto</label>
          </div>

          <div class="form-check">
            <input type="checkbox" id="requirements1" wire:model="requirements.{{1}}" value={{true}} class="form-check-input">
            <label for="requirements1" class="form-check-label">Salto con giro completo</label>
          </div>

          <div class="form-check">
            <input type="checkbox" id="requirements2" wire:model="requirements.{{2}}" value={{true}} class="form-check-input">
            <label for="requirements2" class="form-check-label">Saltos en diferentes direcciones</label>
          </div>

          <div class="form-check">
            <input type="checkbox" id="requirements3" wire:model="requirements.{{3}}" value={{true}} class="form-check-input">
            <label for="requirements3" class="form-check-label">Secuencia de danza</label>
          </div>

        </div>

        <div class="text-center">
          <button wire.click="calculate" type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>
      </form><!-- Vertical Form -->

          
      @else

      <h2>Resultado del cálculo</h2>

      <div class="row">
        <p>Acrobacias: {{$this->acroList}} = {{$this->aElements}}</p>
      </div>

      <div class="row">
        <p>Danza: {{$this->danceList}} = {{$this->dElements}}</p>
      </div>

      <div class="row">
        <p>CV: {{$this->cv}}</p>
      </div>

      <div class="row mt-2">
        <p>CR: {{$this->cr}}</p>
        @if ($this->requirements[0] == "1")
          <div class="col-12">
            <button class="btn btn-sm btn-success">✔</button>
            Doble salto
          </div>
        @endif
      </div>

      <div class="row mt-2">
        @if ($this->requirements[1] == "1")
          <div class="col-12">
            <button class="btn btn-sm btn-success">✔</button>
            Salto con giro completo
          </div>
        @endif
      </div>

      <div class="row mt-2">
        @if ($this->requirements[2] == "1")
          <div class="col-12">
            <button class="btn btn-sm btn-success">✔</button>
            Saltos en diferentes direcciones
          </div>
        @endif
      </div>

      <div class="row mt-2">
        @if ($this->requirements[1] == "1")
          <div class="col-12">
            <button class="btn btn-sm btn-success">✔</button>
            Secuencia de danza
          </div>
        @endif
      </div>

      <div class="row mt-2">
        <p>Bono de salida: {{$this->dismount}}</p>
      </div>

      <div class="row text-center">
        <div class="col-row">
          <h3>Puntuación final: {{$this->finalScore}}</h3>
        </div>
      </div>
          
      @endif
</div>
