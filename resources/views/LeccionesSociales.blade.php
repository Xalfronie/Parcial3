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
        <div class="max-w-4xl mx-auto bg-white dark:bg-siete shadow-lg rounded-lg overflow-hidden">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4 bg-siete">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/profesiones.jpg') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8 bg-siete" >
                    <div class="uppercase tracking-wide bg-siete text-sm text-black0 font-semibold">Lección 1.1</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Las Profeciones y Oficios.</a>
                    <p class="mt-2 mb-4 text-zinc-500 dark:text-black">En esta lección, veremos diferentes trabajos que las personas hacen todos los días.</p>
                    <a href="{{ route('sociales1_1') }}" class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">Comenzar Lección</a>
                    <a href="{{ route('sociales1_1') }}#activitySection" class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">Comenzar Actividad</a>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white dark:bg-siete shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/familia.jpg') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-black font-semibold">Lección 1.2</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline"> Mi Familia y Yo</a>
                    <p class="mt-2 text-zinc-500 dark:text-black">Esta lección veremos los miembros de la familia: mamá, papá, hermanos, abuelos, tíos.</p>
                    <button class="mt-4 bg-tres hover:bg-ocho text-black font-bold py-2 px-4 rounded">
                        Comenzar lección
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4 bg-siete">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/estaciones.jpg') }}"  alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8 bg-siete">
                    <div class="uppercase tracking-wide text-sm text-black font-semibold">Lección 1.3</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Los Transportes</a>
                    <p class="mt-2 text-zinc-500 dark:text-black">Esta lección cubre las estaciones del año, las cuales son primavera, verano, otoño, invierno.</p>
                    <button class="mt-4 bg-tres hover:bg-siete text-black font-bold py-2 px-4 rounded">
                        Comenzar lección
                    </button>
                </div>
            </div>
        </div>

        <div class="max-w-4xl mx-auto bg-white dark:bg-zinc-800 shadow-lg rounded-lg overflow-hidden mt-10">
            <div class="md:flex">
                <div class="md:flex-shrink-0 p-4 bg-siete">
                    <img class="h-48 w-full object-cover md:w-48 md:h-full" src="{{ asset('img/transportes.jpg') }}" alt="Lección imagen" crossorigin="anonymous">
                </div>
                <div class="p-8 bg-siete">
                    <div class="uppercase tracking-wide text-sm text-black font-semibold">Lección 2</div>
                    <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black dark:text-black hover:underline">Los Transportes</a>
                    <p class="mt-2 text-zinc-500 dark:black">Esta lección habla sobre transportes terrestres: coches, autobuses, bicicletas, los transportes acuáticos: barcos y los transportes aéreos: aviones.</p>
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
