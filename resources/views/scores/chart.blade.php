<x-gymLayout>
    <x-slot:title>
       Grafica
    </x-slot>
    <h1>Grafica</h1>


    <div class="container px-4 mx-auto">

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $chart->container() !!}
        </div>
    
    </div>

    @section('js')
        <script src="{{ $chart->cdn() }}"></script>

        {{ $chart->script() }}
    @endsection

</x-gymLayout>