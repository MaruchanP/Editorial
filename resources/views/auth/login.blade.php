<x-guest-layout>
    <div style="display: flex; height: 100vh;">
        <!-- Columna izquierda para la imagen -->
        <div style="flex: 1; height: 100%; position: relative;">
            <img src="{{ asset('imagenes/log.jpg') }}" alt="Imagen" class="img-fluid" style="height: 100%; width: 100%; object-fit: cover;">
        </div>

        <!-- Columna derecha para el formulario de login -->
        <div style="flex: 1; background-color: #A78670; position: relative; overflow: hidden;">
            

            <x-authentication-card style="background-color: #A78670;">
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Correo') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Contraseña') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                        </label>
                    </div>

                    
                    

                    <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                                {{ __('¿No te haz registrado?') }}
                            </a>
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                        @endif
                        

                        <x-button class="ms-4" style="cursor: pointer;" type="submit">
                            {{ __('Iniciar') }}
                        </x-button>
                    </div></div>
                </form>
            </x-authentication-card>
        </div>
    </div>
</x-guest-layout>
