<x-gymLayout>
    <x-slot:title>
        Editar {{$podcast->title_p}}
    </x-slot>
    <h1>Editar "{{$podcast->title_p}}"</h1>

    <form class="row g-3" action="{{route('podcast.update', $podcast)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="col-12">
          <label for="title_p" class="form-label">Título: </label>
          <input type="text" class="form-control" name="title_p" id="title_p" value="{{old('title_p') ?? $podcast->title_p}}" required>
            @error('title_p')
                <h5>{{$message}}</h5>
            @enderror
        </div>
        
        <div class="col-12">
            <label for="description_p" class="form-label">Descripción: </label>
            <textarea class="form-control" name="description_p" id="description_p" style="height: 150px;" required>{{old('description_p') ?? $podcast->description_p}}</textarea>
              @error('description_p')
                  <h5>{{$message}}</h5>
              @enderror
        </div>

        <div class="col-12">
            <label for="url_p" class="form-label">URL: </label>
            <input type="text" class="form-control" name="url_p" id="url_p" value="{{old('url_p') ?? $podcast->url_p}}" required>
              @error('url_p')
                  <h5>{{$message}}</h5>
              @enderror
          </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Enviar</button>
          <button type="reset" class="btn btn-secondary">Limpiar</button>
        </div>
      </form>

</x-gymLayout>