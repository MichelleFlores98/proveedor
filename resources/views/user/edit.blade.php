<x-app-layout> <x-slot name="header"> <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
  <br>
  {{ __('FORMULARIO DE REGISTRO') }}
  </h2>
  </x-slot>

  <div class="py-12"> <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <div
    class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
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
    {{ __("Ingresa tus datos:") }}
    </div>
    <div class="p-6 text-gray-900 dark:text-gray-100">
    <form method="POST" action="{{ route('user.update', $datosproveedor->id) }}"  enctype="multipart/form-data">
      @csrf
      @method('PUT')
            <div class="mt-4">
              <x-input-label for="nombreProvee":value="__('Nombre de Proveedor:')" />
              <x-text-input id="nombreProvee" class="block mt-1 w-full" type="text" name="nombre" value="{{$datosproveedor->nombre}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="rfc" :value="__('RFC:')" />
              <x-text-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" value="{{$datosproveedor->rfc}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="calle" :value="__('Calle y número:')" />
              <x-text-input id="calle" class="block mt-1 w-full" type="text" name="calle" value="{{$datosproveedor->calle}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="colonia" :value="__('Colonia:')" />
              <x-text-input id="colonia" class="block mt-1 w-full" type="text" name="colonia" value="{{$datosproveedor->colonia}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="municipio" :value="__('Delegación o Municipio:')" />
              <x-text-input id="municipio" class="block mt-1 w-full" type="text" name="delegacion" value="{{$datosproveedor->delegacion}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="ciudad" :value="__('Ciudad')" />
              <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" value="{{$datosproveedor->ciudad}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="estado" :value="__('Estado:')" />
              <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" value="{{$datosproveedor->estado}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div class="mt-4">
              <x-input-label for="cp" :value="__('Código Postal:')" />
              <x-text-input id="cp" class="block mt-1 w-full" type="number" name="cp" value="{{$datosproveedor->cp}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            </div>
              <div class="p-6 text-gray-900 dark:text-gray-100">
              {{ __("Ingresa tus datos Bancarios:") }}
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
          <div class="mt-4">
            <x-input-label for="banco" :value="__('Nombre de Banco:')" />
            <x-text-input id="banco" class="block mt-1 w-full" type="text" name="banco" value="{{$datosproveedor->banco}}" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
          </div>
          <div class="mt-4">
            <x-input-label for="cuenta" :value="__('Cuenta de Banco:')" />
            <x-text-input id="cuenta" class="block mt-1 w-full" type="number" name="cuenta" value="{{$datosproveedor->cuenta}}"/>
          </div>
          <div class="mt-4">
            <x-input-label for="clabe" :value="__('Cuenta clabe:')" />
            <x-text-input id="clabe" class="block mt-1 w-full" type="number" name="clabe" value="{{$datosproveedor->clabe}}"/>
          </div>
        </div>
          <div class="p-6 text-gray-900 dark:text-gray-100">
            {{ __("Adjunta los archivos necesarios:") }}
            <br>
            <br>
            <br>
            <div class="mt-12">
              <x-input-label for="constancia" :value="__('Constancia de Situación Fiscal:')" />
              <x-text-input id="constancia" class="block mt-1 w-full" type="file" name="constancia" value="{{$datosproveedor->constancia}}"/>
            </div>
            <div class="mt-4">
              <x-input-label for="cumplimiento" :value="__('Opinión de cumplimiento:')" />
              <x-text-input id="cumplimiento" class="block mt-1 w-full" type="file" name="cumpli" />
            </div>
            <div class="mt-4">
              <x-input-label for="estadoBancario"
                :value="__('Caratula estado bancario o Carta de reconocimiento de cuenta:')" />
              <x-text-input id="estadoBancario" class="block mt-1 w-full" type="file" name="estado_cuenta" />
            </div>
          </div>
          <br>
          </div>
          </div>
          </div>


          <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ml-3">
                {{ __('Actualizar') }}
            </x-primary-button>
            <x-primary-button class="ml-3">
              <a href="/dashboard"> {{ __('Cancelar') }}</a>
            </x-primary-button>
            <br>
            <br>
          </div>
  </form>
  </x-app-layout>