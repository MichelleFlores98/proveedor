<x-app-layout> <x-slot name="header"> 

  <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
    <form method="POST" action="{{ route('user.create') }}"  enctype="multipart/form-data">
      @csrf
    
    <label for="admin_id">Selecciona un Administrador:</label>
    <select class="form-select block font-medium text-sm text-gray-800 dark:text-gray-800" name="admin_id" id="admin_id">
        @foreach ($administradores as $admin)
            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
        @endforeach
    </select>
      <div class="mt-4">
        <x-input-label for="nombre" :value="__('Nombre de Proveedor:')" />
        <x-text-input id="nombreProvee" class="block mt-1 w-full" type="text" name="nombre" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
      </div>
      <div class="mt-4">
        <x-input-label for="rfc" :value="__('RFC:')" />
        <x-text-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" style="text-transform:uppercase;" maxlength="13" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        <x-input-error :messages="$errors->get('rfc')" class="mt-2" />
      </div>
      <div class="mt-4">
        <x-input-label for="calle" :value="__('Calle y número:')" />
        <x-text-input id="calle" class="block mt-1 w-full" type="text" name="calle" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
      </div>
      <div class="mt-4">
        <x-input-label for="colonia" :value="__('Colonia:')" />
        <x-text-input id="colonia" class="block mt-1 w-full" type="text" name="colonia"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
      </div>
      <div class="mt-4">
        <x-input-label for="municipio" :value="__('Delegación o Municipio:')" />
        <x-text-input id="municipio" class="block mt-1 w-full" type="text" name="delegacion" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
      </div>
      <div class="mt-4">
        <x-input-label for="ciudad" :value="__('Cuidad')" />
        <x-text-input id="ciudad" class="block mt-1 w-full" type="text" name="ciudad" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
      </div>
      <div class="mt-4">
        <x-input-label for="estado" :value="__('Estado:')" />
        <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
      </div>
      <div class="mt-4">
        <x-input-label for="cp" :value="__('Código Postal:')" />
        <x-text-input id="cp" class="block mt-1 w-full" type="number" name="cp"/>
        <x-input-error :messages="$errors->get('cp')" class="mt-2" />
      </div>
  </div>
  <div class="p-6 text-gray-900 dark:text-gray-100">
    {{ __("Ingresa tus datos Bancarios:") }}
  </div>
  <div class="p-6 text-gray-900 dark:text-gray-100">
    <div class="mt-4">
      <x-input-label for="banco" :value="__('Nombre de Banco:')" />
      <x-text-input id="banco" oninput="checkBank(this)" class="block mt-1 w-full" type="text" name="banco"  placeholder="Si tu Banco es BANAMEX solo se debe llenar la casilla de Cuenta" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
      <x-input-error :messages="$errors->get('banco')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="cuenta" :value="__('Número de cuenta:')" />
      <x-text-input id="cuenta" class="block mt-1 w-full" type="number" name="cuenta" maxlength="11" disabled placeholder="Ingrese su cuenta a 11 digítos los primeros  4 de la sucursal y los 7 restantes de su cuenta" />
      <x-input-error :messages="$errors->get('cuenta')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="clabe" :value="__('Cuenta clabe:')" />
      <x-text-input id="clabe" class="block mt-1 w-full" type="number" name="clabe" maxlength="18" placeholder="Ingrese su cuenta clabe a 18 digítos."/>
      <x-input-error :messages="$errors->get('clabe')" class="mt-2" />
    </div>
  </div>
  <div class="p-6 text-gray-900 dark:text-gray-100">
    {{ __("Adjunta los archivos necesarios:") }}
    <br>
    <br>
    <br>
    <div class="mt-12">
      <x-input-label for="constancia" :value="__('Constancia de Situación Fiscal:')" />
      <x-text-input id="constancia" class="block mt-1 w-full" type="file" name="constancia" />
      <x-input-error :messages="$errors->get('constancia')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="cumplimiento" :value="__('Opinión de cumplimiento:')" />
      <x-text-input id="cumplimiento" class="block mt-1 w-full" type="file" name="cumpli" />
      <x-input-error :messages="$errors->get('cumpli')" class="mt-2" />
    </div>
    <div class="mt-4">
      <x-input-label for="estadoBancario"
        :value="__('Caratula estado bancario o Carta de reconocimiento de cuenta:')" />
      <x-text-input id="estadoBancario" class="block mt-1 w-full" type="file" name="estado_cuenta" />
      <x-input-error :messages="$errors->get('estado_cuenta')" class="mt-2" />
    </div>
  </div>
  <br>

  </div>
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

  <script type="text/javascript">
 // $(document).ready(function(e) {
    
    function checkBank(input) {
            var bankInput = input.value.trim().toUpperCase(); 

            var accountField = document.getElementById("cuenta");
            var keyField = document.getElementById("clabe");

            if (bankInput === "BANAMEX") {
                accountField.disabled = false;
                keyField.disabled = true;
            } else {
                accountField.disabled = true;
                keyField.disabled = false;
            }
    }

 // });
</script>

</x-app-layout>