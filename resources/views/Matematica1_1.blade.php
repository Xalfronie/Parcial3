<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas - Lección 1.1</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .draggable {
            cursor: grab;
        }
        .droppable {
            border: 2px dashed #ccc;
            padding: 20px;
            margin: 10px;
        }
        .droppable.over {
            border-color: #000;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div id="introSection" class="min-h-screen flex flex-col items-center justify-center bg-tres dark:tres transition-colors">
        <a href="{{ route('leccionesmatematicas') }}" class="mt-4 bg-uno hover:bg-ocho text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
            Ver Lecciones
        </a>
        <div class="text-center mb-4 px-4">
            <h1 class="text-3xl font-bold text-zinc-900 dark:text-black">Lección 1 : Colores</h1>
        </div>
        <div class="text-center mb-8 px-4 " >
            <h2 class="text-2xl font-bold text-zinc-900 dark:text-black">¿Cuál es tu color favorito?</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
            <button onclick="changeColor('#FF6347')" class="w-24 h-24 bg-red-400 rounded-full focus:outline-none"></button>
            <button onclick="changeColor('#4682B4')" class="w-24 h-24 bg-blue-400 rounded-full focus:outline-none"></button>
            <button onclick="changeColor('#32CD32')" class="w-24 h-24 bg-green-400 rounded-full focus:outline-none"></button>
            <button onclick="changeColor('#FFD700')" class="w-24 h-24 bg-yellow-400 rounded-full focus:outline-none"></button>
            <button onclick="changeColor('#DA70D6')" class="w-24 h-24 bg-purple-400 rounded-full focus:outline-none"></button>
            <button onclick="changeColor('#FFA500')" class="w-24 h-24 bg-orange-400 rounded-full focus:outline-none"></button>  
        </div>
        <div class="w-full px-4 py-4">
            <p class="text-md text-zinc-600 dark:black">
                Los colores están a nuestro alrededor. Vemos colores en la ropa, en los juguetes, en la naturaleza y en muchas cosas más.
            </p>
        </div>
        <div class="w-full px-4 py-8">
            <h3 class="text-xl font-bold text-zinc-900 dark:text-black mb-6">Colores Primarios</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-siete  dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/rojo.png') }}" alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Rojo</h4>
                        <p class="text-sm text-zinc-600 dark:text-black">Es el color de una manzana, de un camión de bomberos, y del corazón.</p>
                    </div>
                </div>
                <div class="bg-siete dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/azul.png') }}" alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Azul</h4>
                        <p class="text-sm text-zinc-600 dark:text-black">Es el color del cielo, del mar, y de un arándano.</p>
                    </div>
                </div>
                <div class="bg-siete dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/amarrillo.png') }}"  alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Amarillo</h4>
                        <p class="text-sm text-zinc-600 dark:text-black">Es el color de un plátano, del sol, y de una flor de girasol.</p>
                    </div>
                </div>
            </div>
            <h3 class="text-xl font-bold text-zinc-900 dark:text-black py-2">Colores Secundarios</h3>
            <div class="w-full px-4 py-2">
                <p class="text-md text-zinc-600 dark:text-zinc-200">
                    Cuando mezclamos los colores primarios, obtenemos colores secundarios.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-siete dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/naranja.png') }}" alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Naranja</h4>
                        <p class="text-sm text-zinc-600 dark:text-zinc-200">Mezcla de rojo y amarillo. Es el color de una naranja y de una calabaza.</p>
                    </div>
                </div>
                <div class="bg-siete dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/verde.png') }}"  alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Verde</h4>
                        <p class="text-sm text-zinc-600 dark:text-black">Mezcla de azul y amarillo. Es el color del césped y de una rana.</p>
                    </div>
                </div>
                <div class="bg-siete dark:bg-siete p-4 rounded-lg shadow-md">
                    <img src="{{asset ('img/morado.png') }}"  alt="Imagen descriptiva" class="w-full h-auto rounded-t-lg" crossorigin="anonymous">
                    <div class="p-2">
                        <h4 class="font-semibold text-lg dark:text-black">Morado</h4>
                        <p class="text-sm text-zinc-600 dark:text-black">Mezcla de rojo y azul. Es el color de una uva y de una flor de lavanda.</p>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-3xl font-bold text-zinc-900 dark:text-black">Iniciar Actividad</h1>
        <button onclick="startActivity()" class="mt-8 bg-uno hover:bg-ocho text-black font-bold py-2 px-4 rounded">
            Actividad
        </button>
    </div>

    <div id="activitySection" class="hidden min-h-screen flex flex-col items-center justify-center bg-seis dark:bg-seis transition-colors">
    <center><img src="{{ asset('img/act.png') }}" alt="logo" class="h-60 w-60"></center>
        <h1 class="text-4xl font-bold mb-8">Colores</h1>
        <h6 class="text-4xl font-bold mb-8">La actividad conciste en arrastrar el objeto al color que corresponde</h6>
        <div class="flex justify-center mb-8">
            <div class="draggable mx-4" draggable="true" data-color="red">
                <img src="{{ asset('img/roj.png') }}" alt="Rojo" class="w-16 h-16">
            </div>
            <div class="draggable mx-4" draggable="true" data-color="blue">
                <img src="{{ asset('img/azu.png') }}" alt="Azul" class="w-16 h-16">
            </div>
            <div class="draggable mx-4" draggable="true" data-color="green">
                <img src="{{ asset('img/ver.png') }}" alt="Verde" class="w-16 h-16">
            </div>
        </div>
        <div class="flex justify-center">
            <div class="droppable bg-red-500 w-32 h-32 mx-4" data-color="red"></div>
            <div class="droppable bg-blue-500 w-32 h-32 mx-4" data-color="blue"></div>
            <div class="droppable bg-green-500 w-32 h-32 mx-4" data-color="green"></div>
        </div>
        <p id="message" class="mt-4 text-xl"></p>
        <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-75 flex items-center justify-center hidden">
            <div class="bg-white rounded-lg p-8 shadow-lg text-center">
                <h2 class="text-2xl font-bold mb-4">Resumen</h2>
                <p id="summary" class="mb-4"></p>
                <button id="retry" class="bg-blue-500 text-white px-4 py-2 rounded">Volver a intentar</button>
            </div>
        </div>

        <button onclick="returnToIntro()" class="mt-8 bg-uno hover:bg-ocho text-black font-bold py-2 px-4 rounded">
            Lección
        </button>
    </div>

    <script src="{{ asset('js/actividades.js') }}"></script>
</body>
</html>
