<x-app-layout>
@section('contenido')
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet"> 
    <link href="https://cdn.datatables.net/select/1.6.2/css/select.dataTables.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    

    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/select/1.6.2/js/dataTables.select.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
@endsection
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
                    {{ __("BIENVENIDO") }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>


    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("DATOS DE LOS PROVEEDORES REGISTRADOS:") }}
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
                                <th>CARTA CUMPLIMIENTO</th>
                                <th>ESTADO BANCARIO</th>
                                <!--th>COMPLETAR</th!-->
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($datosproveedores as $datosproveedor)
                          <tr>
                            <td >{{$datosproveedor->id }}</td>
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
                            <!--td>
                            <x-secondary-button class="ml-3">
                            <a href="{{ url('/admin/'.$datosproveedor->id.'/show') }}" class="btn btn-primary" id="btnCompletar" data-id="{{ $datosproveedor->id }}"> {{ __('Completar proveedor') }}</a>
                            </x-secondary-button> 
                            </td!-->
                          </tr>
                          @endforeach
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>
    </div>
    <p>
   





    <script type="text/javascript">
        $(document).ready(function() {

    /*    $('#btnCompletar').click(function(e) {
            e.preventDefault(); // Prevenir la acción predeterminada del enlace

            // Obtener el ID de la fila seleccionada desde el atributo data
            var id = $(this).data('id');
            var cve_proveedor = $("#cve_proveedor").val();

            // Redirigir a la vista de detalles utilizando Laravel
            window.location.href = '/admin/' + id + '/show/' + cve_proveedor;
        });*/


            $('#proveedor').DataTable({
                responsive: true,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
               "<'row'<'col-sm-12'tr>>" +
               "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>" +
               "<'row'<'col-sm-12'B>>",
                buttons: [
                  {
           //     extend: 'pdfHtml5',
               // download: 'open',
               // text: 'PDF',
                customize: function(doc) {
                    // Obtener la fecha y hora actual
                const now = new Date();
                const dateStr = now.toLocaleDateString();
                const timeStr = now.toLocaleTimeString();

                    // Texto que se agregará al contenido del documento PDF
                const timestampText = `Generado el ${dateStr} a las ${timeStr}`;

                    // Imagen encriptada en base64
                const base64Image = 'data:image/png;base64,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'; // Reemplaza 'CÓDIGO_BASE64_DE_LA_IMAGEN' con el código base64 de tu imagen                  
                  var header = {
                      margin: [40, 20, 40, 20],
                      columns: [
                        { image: base64Image, width: 60, alignment: 'left'
                        },
                           // { text: timestampText, fontSize: 10, color: '#555' }
                        
                        ]
                }; 
                    // Agregar el encabezado a cada página del PDF
                  doc['header'] = function(currentPage, pageCount, pageSize) {                   
                       if (currentPage === 1) {
                          return header;
                       } else {
                          console.log("You are on page " + currentPage);
                       }
                    };
                    doc.content.splice(1, 0, {
                        margin: [0, 0, 0, 12],
                        alignment: 'center',
                        text: timestampText,
                        fontSize: 10,
                        color: '#555'                     
                    });
                }
            },
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
             ],
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                'select'   : true    
                       

            });


        });

    </script>
    
</x-app-layout>





