<div>
    <br>
    <form class="row g-3" action="{{route('calculator.store')}}" method="POST">
        @csrf
        {{--<div class="row">
            <div class="col-3">
                <input wire:model="element.0" name="element.0" type="text" class="form-control" placeholder="elemento">
              </div>
        </div>--}}

        
        
        @php
            $keys = array_keys($inputs);
        @endphp
        @for ($i = 0; $i < sizeof($inputs); $i++)
          <br>
          <div class="row mt-2">
            <div class="col-3">
                <input wire:model="element.{{$i}}.0" name="element.{{$i}}.0" type="text" class="form-control" placeholder="elemento">
            </div>
            @foreach ($inputs[$keys[$i]] as $key => $value)
              @if ($key != "index")
                <div class="col-3">
                  <input wire:model="element.{{$i}}.{{$value}}" name="element.{{$i}}.{{$value}}" type="text" class="form-control" placeholder="elemento">
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
        {{--@foreach ($inputs as $key => $value)
        <br>
          <div class="row mt-2">
            <div class="col-3">
                <input wire:model="element.{{$value}}" name="element.{{$value}}" type="text" class="form-control" placeholder="elemento">
              </div>
              <div class="col-1">
                <button wire:click="removeRow({{$key}})" class="btn btn-danger" type='button'>Quitar</button>
              </div>
          </div>
        @endforeach

        


       @foreach ($element as $key => $value)
        <br>
          <p>Key{{$key}} Value {{$value}}</p>
        @endforeach--}}

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>
      </form><!-- Vertical Form -->
</div>
