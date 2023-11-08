<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <br>
            {{ __('PROVEEDORES REGISTRADOS') }}
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Datos Registrados:") }}
                    <br>
                    <br>
                    <br>
                    <table   class="table table-bordered display nowrap" cellpacing="0"  style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE PROVEEDOR</th>
                                <th>RFC</th>
                                <th>CALLE</th>
                                <th>COLONIA</th>
                                <th>DELEGACION</th>
                                <th>CUIDAD</th>
                                <th>ESTADO</th>
                                <th>CP</th>
                                <th>BANCO</th>
                                <th>CUENTA</th>
                                <th>CLABE</th>
                                <th>ESTADO</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($datosproveedores as $datosproveedor)
                          <tr>
                            <td>{{$datosproveedor->id }}</td>
                            <td>{{$datosproveedor->nombre}}</td>
                            <td>{{$datosproveedor->rfc}}</td>
                            <td>{{$datosproveedor->calle}}</td>
                            <td>{{$datosproveedor->colonia}}</td>
                            <td>{{$datosproveedor->delegacion}}</td>
                            <td>{{$datosproveedor->cuidadd}}</td>
                            <td>{{$datosproveedor->estado}}</td>
                            <td>{{$datosproveedor->cp}}</td>
                            <td>{{$datosproveedor->banco}}</td>
                            <td>{{$datosproveedor->cuenta}}</td>
                            <td>{{$datosproveedor->clabe}}</td>
                            <td>{{$datosproveedor->constancia}}</td>
                            <td>{{$datosproveedor->cumpli}}</td>
                            <td>{{$datosproveedor->estado_cuenta}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-4">               
        <x-primary-button class="ml-3">
            <a href="/user/create"> {{ __('Ingresa tus datos') }}</a>
        </x-primary-button>
        <br>
        <br>
    </div>
</x-app-layout>

    


