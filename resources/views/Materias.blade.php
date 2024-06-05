<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-white dark:bg-uno p-6 shadow-lg rounded-lg">
    <center><img src="{{ asset('img/Materias.png') }}" alt="logo" class="h-80 w-80"></center>
        <ul class="hidden md:flex">
            <li class="border-2 border-red-300 rounded-md">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="pr-4 bg-red-300 text-black">Cerrar Sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
        <ul class="space-y-6">
            <li class="flex items-start bg-ocho dark:bg-uno hover:bg-dos dark:hover:bg-dos p-4 rounded-lg shadow transition duration-200 ease-in-out">
                <img src="{{ asset('img/mate.jpg') }}" alt="Matemáticas" class="mr-6 w-24 h-24 rounded-full shadow-lg">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold">Matemáticas</h3>
                    <p class="text-sm text-zinc-700 dark:text-black mt-1">Estudia conceptos matemáticos fundamentales.</p>
                    <a href="{{ route('leccionesmatematicas') }}" class="mt-4 bg-siete hover:bg-tres text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                        Ver lecciones
                    </a>

                </div>
            </li>
            <li class="flex items-start bg-white dark:bg-uno hover:bg-dos dark:hover:dos p-4 rounded-lg shadow transition duration-200 ease-in-out">
                <img src="{{ asset('img/ciencia.png') }}" alt="Ciencias" class="mr-6 w-24 h-24 rounded-full shadow-lg">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold">Ciencias y Tecnologia</h3>
                    <p class="text-sm text-zinc-700 dark:black mt-1">Explora el mundo de la biología, química y física.</p>
                    <a href="{{ route('leccionesciencias') }}" class="mt-4 bg-siete hover:bg-tres text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                        Ver lecciones
                    </a>
                </div>
            </li>
            <li class="flex items-start bg-white dark:bg-uno hover:bg-zinc-100 dark:hover:bg-dos p-4 rounded-lg shadow transition duration-200 ease-in-out">
                <img src="{{ asset('img/sociales.png') }}" alt="Sociales" class="mr-6 w-24 h-24 rounded-full shadow-lg">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold">Estudios Sociales</h3>
                    <p class="text-sm text-zinc-700 dark:text-black mt-1">Aprende sobre historia, geografía y economía.</p>
                    <a href="{{ route('leccionessociales') }}" class="mt-4 bg-siete hover:bg-tres text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                        Ver lecciones
                    </a>
                </div>
            </li>
            <li class="flex items-start bg-white dark:bg-uno hover:bg-zinc-100 dark:hover:bg-dos p-4 rounded-lg shadow transition duration-200 ease-in-out">
                <img src="{{ asset('img/legua.png') }}" alt="Lenguaje" class="mr-6 w-24 h-24 rounded-full shadow-lg">
                <div class="flex-1">
                    <h3 class="text-xl font-semibold">Lenguaje</h3>
                    <p class="text-sm text-zinc-700 dark:text-black mt-1">Desarrolla habilidades en gramática y literatura.</p>
                    <a href="{{ route('leccioneslenguaje') }}" class="mt-4 bg-siete hover:bg-tres text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                        Ver lecciones
                    </a>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>
