<div>
    <div class="row">
        <div class="col-md-4">
            <label for="nombre_g">Título</label>
            <input type="text" wire:model='titleFilter' class="form-control" name="nombre_g" id="nombre_g">
        </div>

        @if (Auth::user()->is_admin == true)
            <div class='col-md-8'>
                <br>
                <a href="{{route('podcast.create')}}">
                    <button class="btn btn-success">+</button>
                </a>
            </div>
        @endif
    </div>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Titulo</th>
            @if (Auth::user()->is_admin == true)
                <th scope="col"></th>
                <th scope="col"></th>
            @endif
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($podcasts as $podcast)
                <tr>
                    <td>{{$podcast->id}}</td>
                    <td>{{$podcast->title_p}}</td>
                    @if (Auth::user()->is_admin == true)
                        <td>
                            <a href="{{route('podcast.edit', $podcast)}}">
                                <button class="btn btn-primary">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('podcast.destroy', $podcast)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class='btn btn-danger'>
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </td>
                    @endif
                    <td class='text-center'>
                        <a href="{{route('podcast.show', $podcast->id)}}">
                             <i class="bi bi-info-circle-fill"></i>
                        </a>
                    </td>  
                </tr>
            @endforeach
        </tbody>
      </table>
      
      {{$podcasts->links()}}
</div>
