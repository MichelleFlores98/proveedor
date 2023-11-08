<x-app-layout>
@section('contenido')
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    

    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
   

@endsection
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <br>
            {{ __('REGISTRA TUS DATOS') }}
        </h2>
    </x-slot>

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("BIENVENIDO") }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DATOS REGISTRADOS:") }}
                    <br>
                    <br>
                    <br>
                    <table id="proveedor" class="table table-bordered display nowrap" cellpacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE PROVEEDOR</th>
                                <th>RFC</th>
                                <th>CALLE</th>
                                <th>COLONIA</th>
                                <th>DELEGACION</th>
                                <th>CIUDAD</th>
                                <th>ESTADO</th>
                                <th>CP</th>
                                <th>BANCO</th>
                                <th>CUENTA</th>
                                <th>CLABE</th>
                                <th>CONSTANCIA</th>
                                <th>CARTA DE CUMPLIMIENTO</th>
                                <th>ESTADO BANCARIO</th>
                                <th>EDITAR DATOS</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if ($datosproveedores instanceof Illuminate\Database\Eloquent\Collection)
                          @foreach (  $datosproveedores as $datosproveedor)
                          <tr>
                            <td>{{$datosproveedor->id }}</td>
                            <td>{{$datosproveedor->nombre}}</td>
                            <td>{{$datosproveedor->rfc}}</td>
                            <td>{{$datosproveedor->calle}}</td>
                            <td>{{$datosproveedor->colonia}}</td>
                            <td>{{$datosproveedor->delegacion}}</td>
                            <td>{{$datosproveedor->ciudad}}</td>
                            <td>{{$datosproveedor->estado}}</td>
                            <td>{{$datosproveedor->cp}}</td>
                            <td>{{$datosproveedor->banco}}</td>
                            <td>{{$datosproveedor->cuenta}}</td>
                            <td>{{$datosproveedor->clabe}}</td>
                            <td>
                            <x-secondary-button class="ml-3">
                                <a href="archivos/{{$datosproveedor->constancia}}" target="blank_">{{ __('ver') }}</a> 
                            </x-secondary-button>
                            </td>
                            <td>
                            <x-secondary-button class="ml-3">
                                <a href="archivos/{{$datosproveedor->cumpli}}" target="blank_">{{ __('ver') }}</a>
                            </x-secondary-button> 
                            </td>
                            <td>
                            <x-secondary-button class="ml-3">
                                <a href="archivos/{{$datosproveedor->estado_cuenta}}" target="blank_">{{ __('ver') }}</a>
                            </x-secondary-button> 
                            </td>
                            <td>
                            <x-primary-button class="ml-3">
                                  <a href="{{ url('/user/'.$datosproveedor->id.'/edit') }}" class="btn btn-primary">Editar</a>
                            </x-primary-button> 
                            </td>
                          </tr>
                          @endforeach
                        @endif
                        </tbody>
                    </table>                  
                        <div class="flex items-center justify-center mt-4">               
                            <x-primary-button class="ml-3" id="ingresaDatos" >
                               <a href="/user/create"  > {{ __('Ingresa tus datos') }}</a>
                            </x-primary-button>
                        </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal -->
  
    <script type="text/javascript">
        $(document).ready(function() {

            var ingresaDatos = $('#ingresaDatos');
            var tableProveedor = $('#proveedor').DataTable({
                responsive: true,
                "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                'select'   : true 
            });

            if (tableProveedor.rows().data().length > 0){
                $('#ingresaDatos').removeAttr('href');
                $('#ingresaDatos').css('pointer-events', 'none');
                $('#ingresaDatos').css('color', '#999');
                ingresaDatos.on('click', function () {
                alert('Ya existe un registro. No se permite esta acción.'); // Muestra la alerta
            });
            }

        });

    </script>
    
</x-app-layout>
