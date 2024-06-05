<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-100 dark:bg-ocho text-zinc-900 dark:text-zinc-200 min-h-screen">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-1/2 p-8">
            <div class="mb-6">
                <button onclick="window.location.href='/'" class="text-indigo-600 dark:text-seis hover:underline">
                    ← Regresar al inicio
                </button>
            </div>
            <h1 class="text-2xl font-bold mb-6 dark:text-black"  >Crea tu cuenta 👋</h1>
            <div class="flex gap-4 mb-6">
            </div>
            <hr class="border-zinc-300 dark:border-siete mb-6">
            <form method="POST" action="{{ route('registro.store') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-zinc-700 dark:text-black">Nombre:</label>
                    <input type="text" id="name" name="name" placeholder="Su nombre completo" class="mt-1 block w-full px-3 py-2 border border-zinc-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="age" class="block text-sm font-medium text-zinc-700 dark:text-black">Edad:</label>
                    <input type="number" id="age" name="age" placeholder="Su edad" class="mt-1 block w-full px-3 py-2 border border-zinc-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-zinc-700 dark:text-black">Correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="Su correo electrónico" class="mt-1 block w-full px-3 py-2 border border-zinc-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-zinc-700 dark:text-black">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Su contraseña" class="mt-1 block w-full px-3 py-2 border border-zinc-300 dark:border-zinc-700 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
                    <ul id="passwordCriteria" class="list-disc ml-4 mt-2 text-sm text-zinc-700 dark:text-black">
                        <li id="minChars">8 caracteres mínimo</li>
                        <li id="upper">Una letra mayúscula</li>
                        <li id="lower">Una letra minúscula</li>
                        <li id="number">Un número</li>
                        <li id="special">Un carácter especial (@$!%*?&)</li>
                    </ul>
                </div>
                <button type="submit" class="w-full bg-seis text-black py-2 rounded-md hover:bg-indigo-700 dark:border-siete">Registrarse</button>
            </form>
            <div class="mt-4 flex justify-end text-sm text-indigo-600 dark:text-indigo-400">
                <a href="{{ route('login') }}" class="hover:underline">¿Ya tienes una cuenta?</a>
            </div>
        </div>
        <div class="md:w-1/2 bg-purple-100 dark:bg-purple-900 hidden md:block">
            <img src="{{asset ('img/registro.png') }}"  alt="Feature Image" class="w-full h-full object-cover" crossorigin="anonymous">
        </div>
    </div>
    <script src="{{ asset('js/Registro.js') }}"></script>
</body>
</html>