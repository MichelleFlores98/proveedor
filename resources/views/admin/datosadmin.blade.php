<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <br>
            {{ __('COMPLETA PROVEEDOR') }}
        </h2>
    </x-slot>

    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DATOS REGISTRADOS DEL PROVEEDOR:") }} {{ $datosproveedor->nombre }}
                </div>
            </div>
        </div>
    </div>


<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <form method="POST" action="{{ route('admin.show', $datosproveedor->id) }}"  enctype="multipart/form-data">
                <div class="mt-4">
                <x-input-label value="RFC: {{$datosproveedor->rfc}}" />
                </div>  
                <div class="mt-4">
                <x-input-label value="CALLE: {{$datosproveedor->calle}}" />
                </div>  
                <div class="mt-4">
                <x-input-label value="COLONIA: {{$datosproveedor->colonia}}" />
                </div>
                <div class="mt-4">
                <x-input-label value="MUNIPIO: {{$datosproveedor->delegacion}}" />
                </div>
                <div class="mt-4">
                <x-input-label value="CIUDAD: {{$datosproveedor->ciudad}}" />
                </div>
                <div class="mt-4">
                <x-input-label value="ESTADO: {{$datosproveedor->estado}}" />
                </div>   
                <div class="mt-4">
                <x-input-label value="CP: {{$datosproveedor->cp}}" />
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                     {{ __("DATOS BANCARIOS REGISTRADOS:") }}
                </div>   
                <div class="mt-4">
                <x-input-label value="BANCO: {{$datosproveedor->banco}}" />
                </div>
                <div class="mt-4">
                <x-input-label value="CUENTA: {{$datosproveedor->cuenta}}" />
                </div>
                <div class="mt-4">
                <x-input-label value="CUENTA CLABE: {{$datosproveedor->clabe}}" />
                </div>     
            </form>
        </div>
      </div>
    </div>
</div>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("COMPLETA LOS DATOS DEL PROVEEDOR:") }} {{ $datosproveedor->nombre }}
                <form method="POST" action=""  enctype="multipart/form-data">
                <div class="mt-4">
                  <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">PERSONA FISICA O MORAL:</label>
                    <select  name="combinacion" id="combinacion" class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">INDIVIDUAL</option>
                        <option value="2">CORPORATION</option>
                    </select>
                  </div>
                </div>
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label for="combinacion" class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">SELECCIONA EMPRESA Y SITIO CONTABLE:</label>
                    @foreach ($combinaciones as $combinacion)
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="{{ $combinacion->sitio}}|{{ $combinacion->empresa }}">
                             {{ $combinacion->sitio }} - {{ $combinacion->empresa}}
                        </option>
                    @endforeach
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">SITIO CONTABLE:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">SERVICIOS</option>
                        <option value="2">DEUDORES</option>
                        <option value="3">MERCANCIAS</option>
                    </select>
                  </div>
                </div>
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">RETENCION:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">Y</option>
                        <option value="2">N</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">TIPO DE RETENCION:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">RET FLETES</option>
                        <option value="2">RET ISRTPS</option>
                        <option value="3">RET ISRTPS E IVA SERVICIOS</option>
                        <option value="4">RET IVA E ISR ARRENDAMIENTO</option>
                        <option value="5">RET IVA E ISR HONORARIOS S/P</option>
                        <option value="2">RET PERSONAL</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">PAIS DE IMPUESTO:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">MXN</option>
                        <option value="2">USD</option>
                        <option value="3">EUR</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">METODO DE PAGO:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">EFT</option>
                        <option value="2">CHECK</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">DIAS DE CREDITO:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">INMEDIARO</option>
                        <option value="2">14 DIAS</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">PAGO EN RECEPCION:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">Y</option>
                        <option value="2">N</option>
                    </select>
                  </div>
                </div> 
                <div class="mt-4">
                <div class="input-group mb-3">
                    <label class="input-group-text block font-medium text-sm text-gray-700 dark:text-gray-300" for="inputGroupSelect01">PAGAR FACTURA POR SEPARADO:</label>
                    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" id="inputGroupSelect01">
                        <option value="1">Y</option>
                        <option value="2">N</option>
                    </select>
                  </div>
                </div> 

                <div class="flex items-center justify-center mt-4">
                    <x-primary-button class="ml-3">
                        {{ __('Guardar Cambios') }}
                    </x-primary-button>
                    <x-primary-button class="ml-3">
                    <a href="/home"> {{ __('Cancelar') }}</a>
                    </x-primary-button>
                    <br>
                    <br>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>


  
    <script type="text/javascript">

    </script>
    
</x-app-layout>