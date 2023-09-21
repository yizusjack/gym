<x-gymLayout>
    <x-slot:title>
        Imagenes
    </x-slot>
    <h1>Imagenes</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Imagen</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pictures as $pic)
                @php
                    $route="";
                    $route = $pic->hash;
                @endphp
                <tr>
                    <td>{{$pic->id}}</td>
                    <td>
                    <img class='w-25' src="{{Storage::url($route)}}" alt="">
                    </td>
                    <td>
                        <form action="{{route('picture.aproveP', $pic)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class='text-center'>
                                <button class='btn btn-success'>✔</button>
                            </div>
                        </form>
                    </td>
                    <td>No</td>
                </tr>
            @endforeach
        </tbody>
       
      </table>


    
    
    <x/slot>
</x-gymLayout>