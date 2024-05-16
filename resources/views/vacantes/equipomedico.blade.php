<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre del Equipo')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        {{-- <div class="mt-4">
            <x-input-label for="description" :value="__('Descripción del Equipo')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div> --}}
        {{-- ------------------------------------Descripcion--------------------- --}}
        <div class="mb-2">
            <label for="descripcion" class="mb-2 block text-gray-900">
                Descripción
            </label>
            <textarea
                id="descripcion"
                name="descripcion"
                placeholder="Descripción del Equipo"
                class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
            >{{ old('descripcion') }}</textarea>

            @error('descripcion')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2
                text-center">{{ $message }}</p>
            @enderror
            
        </div>

        <!-- Rol -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('¿Que tipo de Equipo deseas Registrar?')" />
            <select
                id="rol"
                type="rol"
                name="rol"
                required autocomplete="rol"
                class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 
                focus:border-green-500 dark:focus:border-green-600 focus:ring-green-500 
                dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"
            >
                <option value="">-------SELECCIONAR UNA CATEGORIA--------</option>
                <option value="1">EMERGENCIA</option>
                <option value="2">LABORATORIO</option>
                <option value="3">CONSULTORIO</option>
                
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>

        {{-- <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Repetir Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            <x-link 
                :href="route('login')"
            >
            Iniciar Sesión
            </x-link>
            <x-link
                :href="route('password.request')"
            >
                Olvidaste tu Password
            </x-link>              

        </div> --}}
        <div>
            <x-primary-button class="mt-6 w-full justify-center">
                {{ __('Registrar Equipo') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
