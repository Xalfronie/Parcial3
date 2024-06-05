<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los 5 Sentidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@3.0/dist/svg.min.js"></script>
</head>
<body>
    <div id="introSection" class="flex flex-col items-center justify-center min-h-screen bg-tres from-blue-500 to-sky-500 text-black dark:bg-tres">
        
    <center><img src="{{ asset('img/lec.png') }}" alt="logo" class="h-60 w-60"></center>
        <a href="{{ route('leccionesciencias') }}" class="mt-4 bg-siete hover:bg-cuatro text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
            Ver Lecciones
        </a>
        <h1 class="text-3xl text-black font-bold mb-4 text-center">Explora Tus Cinco Sentidos</h1>
        <h1 class="text-1xl  text-black font-bold mb-4 text-center"> Hoy vamos a aprender algo muy divertido: explorar nuestros sentidos. ¿Sabían que usamos nuestros sentidos todos los días para descubrir el mundo que nos rodea? Tenemos cinco sentidos que nos ayudan a ver, oír, oler, saborear y tocar las cosas.
   </h1>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-5">
            <div class="flex flex-col items-center">
                <img alt="Sight" src="{{ asset('img/ojo.png') }}" class="rounded-full mb-2">
                <p>Vista</p>
                <p class="text-sm text-center">El sentido de la vista es crucial para interpretar el mundo que nos rodea a través de la luz y el color.</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Hearing" src="{{ asset('img/oreja.png') }}" class="rounded-full mb-2">
                <p>Oido</p>
                <p class="text-sm text-center">El oido nos permite percibir el sonido y comunicarnos con los demás a través del habla y la música.</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Smell" src="{{ asset('img/nariz.png') }}" class="rounded-full mb-2">
                <p>Olfato</p>
                <p class="text-sm text-center">El sentido del olfato nos ayuda a detectar olores y desempeña un papel en nuestro sentido del gusto.</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Taste" src="{{ asset('img/gusto.png') }}" class="rounded-full mb-2">
                <p>Gusto</p>
                <p class="text-sm text-center">El gusto nos permite diferenciar sabores y juega un papel en nuestro disfrute de la comida.</p>
            </div>
            <div class="flex flex-col items-center">
                <img alt="Touch" src="{{ asset('img/tacto.png') }}" class="rounded-full mb-2">
                <p>Tacto</p>
                <p class="text-sm text-center">El sentido del tacto nos ayuda a sentir presión, temperatura y textura, mejorando nuestras interacciones con el mundo.</p>
            </div>
        </div>
        <button onclick="startActivity()" class="mt-8 bg-siete hover:bg-cuatro text-black font-bold py-2 px-4 rounded">
            Actividad
        </button>
    </div>

    <div id="activitySection" class="flex flex-col items-center justify-center min-h-screen bg-seis from-blue-500 to-sky-500 text-white dark:bg-seis hidden">
        <div class="max-w-lg mx-auto p-4 relative">
        <center><img src="{{ asset('img/act.png') }}" alt="logo" class="h-60 w-60"></center>
            <h2 class="text-center text-black font-semibold mb-2">Une cada palabra con su dibujo.</h2>
            <p class="text-center text-sm text-black mb-4">(Haz clic en la palabra, une con su dibujo)</p>
            <div class="flex justify-between">
                <div class="space-y-4">
                    <div class="cursor-pointer bg-zinc-100 p-2 rounded border-2 border-transparent m-4 pt-4 text-black" data-word="TACTO">TACTO</div>
                    <div class="cursor-pointer bg-zinc-100 p-2 rounded border-2 border-transparent m-4 pt-4 text-black" data-word="OLFATO">OLFATO</div>
                    <div class="cursor-pointer bg-zinc-100 p-2 rounded border-2 border-transparent m-4 text-black" data-word="GUSTO">GUSTO</div>
                    <div class="cursor-pointer bg-zinc-100 p-2 rounded border-2 border-transparent m-4 text-black" data-word="OÍDO">OÍDO</div>
                    <div class="cursor-pointer bg-zinc-100 p-2 rounded border-2 border-transparent m-4 text-black" data-word="VISTA">VISTA</div>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="hand">
                    <img aria-hidden="true" alt="hand" src="{{ asset('img/tacto.png') }}"/>
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="nose">
                    <img aria-hidden="true" alt="nose" src="{{ asset('img/nariz.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="eye">
                    <img aria-hidden="true" alt="eye" src="{{ asset('img/ojo.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="ear">
                    <img aria-hidden="true" alt="ear" src="{{ asset('img/oreja.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="tongue">
                    <img aria-hidden="true" alt="tongue" src="{{ asset('img/gusto.png') }}" />
                    </div>
                </div>
            </div>
        </div>
        <div id="message" class="text-center text-sm mt-4"></div>
        <div id="drawing" class="absolute inset-0 pointer-events-none"></div>

        <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-white p-6 rounded shadow-lg text-center">
                <h3 class="text-lg font-bold mb-2 text-black">Resumen de la Actividad</h3>
                <p id="summary" class="mb-4 text-black"></p>
                <button id="retry" class="bg-blue-500 text-white px-4 py-2 rounded">Reintentar</button>
                <a href="{{ route('leccionesciencias') }}" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                     Siguiente Leccion
                </a>
            </div>
        </div>

        <button onclick="returnToIntro()" class="mt-8 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Lección
        </button>
    </div>
    <script src="{{ asset('js/cienciasActividades.js') }}"></script>
</body>
</html>
