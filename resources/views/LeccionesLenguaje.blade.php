<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecciones</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen bg-zinc-100 dark:bg-tres p-4">
        <a href="{{ route('materias') }}" class="mt-4 bg-uno hover:bg-ocho text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
            Ver Materias
        </a>
        <center><img src="{{ asset('img/lec.png') }}" alt="logo" class="h-60 w-60"></center>
        <div class="max-w-4xl mx-auto bg-siete dark:bg-siete shadow-lg rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/cuentos.png') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide  text-sm text-black font-semibold">Lección 1</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Los cuentos y las fábulas</a>
                    <p class="mt-2 mb-4 text-zinc-500 dark:text-black">En esta lección aprenderemos sobre cuentos y fábulas.</p>
                    <a href="{{ route('lenguaje1_1') }}" class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">Comenzar Lección</a>
                    <a href="{{ route('lenguaje1_1') }}#activitySection" class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">Comenzar Actividad</a>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-siete dark:bg-siete shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/poema.png') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8 bg-siete">
                    <div class="uppercase tracking-wide bg-siete text-sm text-black font-semibold">Lección 1.1</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Rimas y Ritmo</a>
                    <p class="mt-2 text-zinc-500 dark:text-black">En esta lección aprenderemos a diferenciar palabras que riman.</p>
                    <button class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">
                        Comenzar lección
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white dark:bg-siete shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4 bg-siete">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/libro.png') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8 bg-siete">
                    <div class="uppercase tracking-wide bg- siete text-sm text-black font-semibold">Lección 1.2</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Sonidos de las Letras</a>
                    <p class="mt-2 text-zinc-500 dark:text-black">Esta lección cubre los fundamentos sobre asociar letras con sus sonidos.</p>
                    <button class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">
                        Comenzar lección
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white dark:bg-siete shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/pLibro.png') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-black font-semibold">Lección 2</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Partes de un Libro</a>
                    <p class="mt-2 text-zinc-500 dark:text-black">Esta lección cubre los fundamentos para conocer las partes de un libro.</p>
                    <button class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">
                        Comenzar lección
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/actividades.js') }}"></script>
</body>
</html>
