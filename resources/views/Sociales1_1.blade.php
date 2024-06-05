<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Las Profesiones y Oficios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/@svgdotjs/svg.js@3.0/dist/svg.min.js"></script>
</head>
<body>
    <div id="introSection" class="min-h-screen flex flex-col items-center justify-center bg-tres dark:bg-tres transition-colors">
        <a href="{{ route('leccionessociales') }}" class="mt-4 bg-uno hover:bg-ocho text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
            Ver Lecciones
        </a>
        <div class="flex flex-col items-center justify-center min-h-screen bg-siete dark:bg-siete">
            <h1 class="text-3xl font-bold text-center text-zinc-800 dark:text-black mb-8">Las Profeciones y Oficios</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-tres dark:bg-tres rounded-lg shadow-md p-4">
                    <img src="{{asset ('img/Doctor.png') }}" alt="Doctor" class="mx-auto mb-4">
                    <p class="text-center text-zinc-800 dark:text-black  font-semibold">Doctor</p>
                </div>
                <div class="bg-tres dark:bg-tres rounded-lg shadow-md p-4">
                    <img src="{{asset ('img/Policia.png') }}" alt="Policia" class="mx-auto mb-4">
                    <p class="text-center text-zinc-800 dark:text-black font-semibold">Policia</p>
                </div>
                <div class="bg-tres dark:bg-tres rounded-lg shadow-md p-4">
                    <img src="{{asset ('img/Maestro.png') }}" alt="Profesor" class="mx-auto mb-4">
                    <p class="text-center text-zinc-800 dark:text-black font-semibold">Profesor</p>
                </div>
                <div class="bg-tres dark:bg-tres rounded-lg shadow-md p-4">
                    <img src="{{asset ('img/Bombero.png') }}" alt="Bombero" class="mx-auto mb-4">
                    <p class="text-center text-zinc-800 dark:text-black font-semibold">Bombero</p>
                </div>
            </div>
            <div class="mt-8 max-w-lg mx-auto text-center text-zinc-800 dark:text-black">
                <h2 class="text-xl font-semibold">¿Que es una profesión?</h2>
                <p>Una profesión es un trabajo que las personas hacen para ayudar a los demás y ganar dinero. Por ejemplo, un maestro enseña a los niños, un médico cuida a las personas enfermas, y un bombero apaga incendios. Cada profesión es importante porque ayuda a que nuestra comunidad sea un buen lugar para vivir.</p>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-center mt-8 mx-auto">
     <iframe class="mb-4 md:mr-4" width="400" height="225" src="https://www.youtube.com/embed/mqejrG0buFo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     <div class="mt-8 max-w-lg mx-auto text-center text-zinc-800 dark:text-black">
         <h2 class="text-xl font-semibold">Diferencia entre Profesión y Oficio</h2>
        <p>
            Una profesión es un trabajo que necesita mucho estudio y entrenamiento especial. Por ejemplo, los médicos tienen que ir a la universidad y aprender muchas cosas para poder cuidar a las personas enfermas.
            <br>
            Un oficio es un trabajo que también es muy importante, pero no necesita tanto estudio en la universidad. En cambio, se aprende más practicando y trabajando. Por ejemplo, los carpinteros construyen cosas con madera y aprenden su trabajo ayudando a otros carpinteros.
        </p>
        
    </div>
    
</div>
<center><button onclick="startActivity()" class="mt-8 bg-uno hover:bg-ocho text-black font-bold py-2 px-4 rounded">
            Iniciar Actividad
        </button></center>

            </div>
        </div>
        
</div>
        
    <div id="activitySection" class="flex flex-col items-center justify-center min-h-screen bg-seis from-blue-500 to-sky-500 text-black dark:seis hidden">
        <div class="max-w-lg mx-auto p-4 relative">
        <center><img src="{{ asset('img/act.png') }}" alt="logo" class="h-60 w-60"></center>
            <h2 class="text-center text-lg font-semibold mb-2">Une cada palabra con su dibujo.</h2>
            <p class="text-center text-sm text-black mb-4">(Haz clic en la palabra, une con su dibujo)</p>
            <div class="flex justify-between">
                <div class="space-y-4">
                    <div class="cursor-pointer bg-uno p-2 rounded border-2 border-transparent m-4 pt-4 text-black" data-word="BOMBERO">BOMBERO</div>
                    <div class="cursor-pointer bg-uno p-2 rounded border-2 border-transparent m-4 pt-4 text-black" data-word="MEDICO">MEDICO</div>
                    <div class="cursor-pointer bg-uno p-2 rounded border-2 border-transparent m-4 text-black" data-word="MAESTRO">MAESTRO</div>
                    <div class="cursor-pointer bg-uno p-2 rounded border-2 border-transparent m-4 text-black" data-word="POLICIA">POLICIA</div>
                    <div class="cursor-pointer bg-uno p-2 rounded border-2 border-transparent m-4 text-black" data-word="VETERINARIO">VETERINARIO</div>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="bombero">
                    <img aria-hidden="true" alt="bombero" src="{{asset ('img/Bombero.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="medico">
                    <img aria-hidden="true" alt="medico" src="{{asset ('img/Doctor.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="veterinario">
                    <img aria-hidden="true" alt="veterinario" src="{{asset ('img/Veterinario.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="maestro">
                    <img aria-hidden="true" alt="maestro" src="{{asset ('img/Maestro.png') }}" />
                    </div>
                    <div class="w-16 h-16 bg-zinc-100 rounded flex items-center justify-center border-2 border-transparent" data-img="policia">
                    <img aria-hidden="true" alt="policia" src="{{asset ('img/Policia.png') }}" />
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
                <button id="retry" class="bg-tres text-black px-4 py-2 rounded">Reintentar</button>
                <a href="{{ route('leccionessociales') }}" class="mt-4 bg-tres hover:bg-siete text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
                     Siguiente Leccion
                </a>
            </div>
        </div>

        <button onclick="returnToIntro()" class="mt-8 bg-siete hover:bg-tres text-white font-bold py-2 px-4 rounded">
            Lección
        </button>
    </div>
    <script src="{{ asset('js/SocialesActividades.js') }}"></script>
</body>
</html>
