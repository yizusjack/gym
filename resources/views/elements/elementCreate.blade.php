<x-gymLayout>
    <x-slot:title>
      Añadir elemento
    </x-slot>
    <h1>Añadir elemento</h1>
    <form class="row g-3" action="{{route('elements.store')}}" method="POST">
        @csrf
        <div class="col-12">
          <label for="name_el" class="form-label">Nombre: </label>
          <input type="text" class="form-control" name="name_el" id="name_el" value="{{old('name_el')}}" required>
            @error('name_el')
                <h5>{{$message}}</h5>
            @enderror
        </div>

        <div class="col-12">
          <label for="alias_el" class="form-label">Alias: </label>
          <input type="text" class="form-control" name="alias_el" id="alias_el" value="{{old('alias_el')}}">
            @error('alias_el')
                <h5>{{$message}}</h5>
            @enderror
        </div>

        <div class="col-12">
            <label for="description_el" class="form-label">Descripción: </label>
            <input type="text" class="form-control" name="description_el" id="description_el" value="{{old('description_el')}}" required>
              @error('description_el')
                  <h5>{{$message}}</h5>
              @enderror
        </div>

        <div class="col-12">
          <label for="value" class="form-label">Valor: </label> <br>
          <select class="form-control" name="value" id="value" required>
              <option value="A" @if (old('value')=='A') selected @endif>A</option>
              <option value="B" @if (old('value')=='B') selected @endif>B</option>
              <option value="C" @if (old('value')=='C') selected @endif>C</option>
              <option value="D" @if (old('value')=='D') selected @endif>D</option>
              <option value="E" @if (old('value')=='E') selected @endif>E</option>
              <option value="F" @if (old('value')=='F') selected @endif>F</option>
              <option value="G" @if (old('value')=='G') selected @endif>G</option>
              <option value="H" @if (old('value')=='H') selected @endif>H</option>
              <option value="I" @if (old('value')=='I') selected @endif>I</option>
              <option value="J" @if (old('value')=='J') selected @endif>J</option>
          </select>
          @error('value')
                <h5>{{$message}}</h5>
            @enderror
        </div>

        <div class="col-12">
            <label for="type" class="form-label">Tipo: </label> <br>
            <select class="form-control" name="type" id="type" required>
                <option value="A" @if (old('value')=='A') selected @endif>Acro</option>
                <option value="T" @if (old('value')=='T') selected @endif>Piruetas</option>
                <option value="D" @if (old('value')=='D') selected @endif>Danza</option>
            </select>
            @error('type')
                  <h5>{{$message}}</h5>
              @enderror
          </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>
      </form>

</x-gymLayout>