<form class="md:w-1/2 space-y-5">
    
    <div>
       <x-input-label for="nro_historia" :value="__('Nro Historia Clinica')" />

       <x-text-input 
       id="nro_historia" 
       class="block mt-1 w-full" 
       type="text" 
       name="nro_historia" 
       :value="old('nro_historia')" 
       required autofocus autocomplete="username"
       placeholder="Ingrese el número de historia clínica"
       />
       <x-input-error :messages="$errors->get('titulo')" class="mt-2" />

   </div>

   <div>
    <x-input-label for="name" :value="__('Nombre de Doctor(a) Designado(a)')" />

        <select
            id="name"
            name="name"
            required autocomplete="categoria"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
            focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
            dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
            <option>Seleccione el Paciente</option>
            @foreach ($pacientes as $paciente)
                <option value="{{$paciente->id}}">{{$paciente->name}}</option>
            @endforeach
        </select>
    </div>

   <div>
       <x-input-label for="categoria" :value="__('Nivel de Gravedad')" />

       <select
           id="categoria"
           name="categoria"
           required autocomplete="categoria"
           class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
           focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
           dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
       >
       <option value="">-------Selecciona un Nivel-------</option>
                <option value="1">Nivel 3 - Paciente con complejo requiere soporte respiratorio</option>
                <option value="2">Nivel 2 - Paciente requiere cuidados posoperatorios</option>
       </select>
   </div>

   <div>
    <x-input-label for="name" :value="__('Nombre de Doctor(a) Designado(a)')" />

    <select
        id="name"
        name="name"
        required autocomplete="categoria"
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
        focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
        dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
    >
        <option>Seleccione Doctor(a)</option>
        @foreach ($doctores as $doctor )
            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
        @endforeach
    </select>
    </div>

   <div>
       <x-input-label for="ultimo_dia" :value="__('Fecha de Ingreso a UCI')" />

       <x-text-input 
       id="ultimo_dia" 
       class="block mt-1 w-full" 
       type="date" 
       name="ultimo_dia" 
       :value="old('ultimo_dia')" 
       required autofocus autocomplete="username"
       />

   </div>

   <div>
       <x-input-label for="cuidados_intensivos" :value="__('Descripción del tratamiento')" />

       <textarea 

       name="cuidados_intensivos" 
       placeholder="Descripción del tratamiento que se debe llevar"
       class="rounded-md shadow-sm border-gray-300 focus:border-ring-indigo-300 focus:ring
       focus:ring-indigo-200 focus:ring-opacity-50 w-full h-60"
       
       ></textarea>

   </div>

   

   <x-primary-button>
       Registrar Paciente
   </x-primary-button>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    // Cargar los pacientes desde PHP a JavaScript
    var pacientes = @json($pacientes);
    
    // Función para filtrar los pacientes según el número de historia clínica
    function filtrarPacientes(nroHistoria) {
        return pacientes.filter(function(paciente) {
            return paciente.nro_historia.includes(nroHistoria);
        });
    }

    $(document).ready(function() {
        $('#nro_historia').on('input', function() {
            var nroHistoria = $(this).val();
            if (nroHistoria !== '') {
                // Filtrar los pacientes según el número de historia clínica
                var pacientesFiltrados = filtrarPacientes(nroHistoria);

                // Mostrar los resultados de la búsqueda
                var resultadoHtml = '';
                pacientesFiltrados.forEach(function(paciente) {
                    resultadoHtml += '<p>' + paciente.name + '</p>';
                });
                $('#resultadoBusqueda').html(resultadoHtml);
            } else {
                $('#resultadoBusqueda').html('');
            }
        });
    });
</script>
