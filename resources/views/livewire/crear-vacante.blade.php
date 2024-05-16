<form class="md:w-1/2 space-y-5">

     <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />

        <x-text-input 
        id="titulo" 
        class="block mt-1 w-full" 
        type="text" 
        name="titulo" 
        :value="old('titulo')" 
        required autofocus autocomplete="username"
        placeholder="Titulo Vacante"
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />

    </div>

    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />

        <select
            id="salario"
            name="salario"
            required autocomplete="salario"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
            focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
            dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        <option>--Seleccione--</option>
        @foreach ($salarios as $salario )
            <option value="{{$salario->id}}">{{$salario->salario}}</option>
        @endforeach

        </select>
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />

        <select
            id="categoria"
            name="categoria"
            required autocomplete="categoria"
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
            focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
            dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
        >
        </select>
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />

        <x-text-input 
        id="empresa" 
        class="block mt-1 w-full" 
        type="text" 
        name="empresa" 
        :value="old('empresa')" 
        required autofocus autocomplete="username"
        placeholder="Empresa: ej. Netflix, Uber, Shopify"
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />

    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Último Día para postularse')" />

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
        <x-input-label for="empresa" :value="__('Descripción Puesto')" />

        <textarea 

        name="descripcion" 
        placeholder="Descripción general del puesto, experiencia"
        class="rounded-md shadow-sm border-gray-300 focus:border-ring-indigo-300 focus:ring
        focus:ring-indigo-200 focus:ring-opacity-50 w-full h-60"
        
        ></textarea>

    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />

        <x-text-input 
        id="imagen" 
        class="block mt-1 w-full" 
        type="file" 
        name="imagen"
    />

    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>

</form>

