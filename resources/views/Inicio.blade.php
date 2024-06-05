<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Educativo</title>
    @vite('resources/css/app.css')
</head>
<body class="">
<!-- ========================================menu===================================================== -->
    <div class="fixed top-0 left-0 w-full bg-uno shadow-md z-50">
    <nav class="flex justify-between items-center bg-uno p-4">
        <ul class="flex">
            <img src="{{ asset('img/logo2.png') }}" alt="logo" class="h-50 w-10">
            <a href="#" class="pr-6 ps-4"><h1>Mundo Educativo</h1></a>
        </ul>
        <ul class="hidden md:flex">
            <li><a href="{{ route('registro') }}" class="pr-4">Registro</a></li>
            <li><a href="{{ route('login') }}" class="pr-4">Iniciar Sesión</a></li>
        </ul>

        <!-- boton para el menu de telefonos -->
        <button class="md:hidden outline-none mobile-menu-button">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </nav>
    </div>

    <!-- menu despegable -->
    <div class="hidden mobile-menu md:hidden bg-gray-200 p-4 pt-20">
        <center><ul class="flex flex-col">
            <li><a href="#" class="pr-4">Inicio</a></li>
            <li><a href="#" class="pr-4">FAQ</a></li>
            <li><a href="#" class="pr-4">Acerca de Nosotros</a></li>
            <li><a href="{{ route('registro') }}" class="pr-4">Registro</a></li>
            <li><a href="#" class="pr-4">Iniciar Sesión</a></li>
        </ul></center>
    </div>
<!-- ========================================menu===================================================== -->
<!-- ========================================acerca de nosotros===================================================== -->
    <div class="min-h-screen bg-ocho bg-zinc-ocho p-5 pt-20">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-zinc-900 dark:text-black">Mundo Educativo</h1>
            <p class="text-zinc-600 dark:text-black mt-4">Bienvenidos a nuestra página donde compartimos nuestros principales valores y objetivos.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-zinc-100 dark:bg-uno p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-black">Misión</h2>
                <p class="text-zinc-600 dark:text-zinc-black mt-2">Nuestra misión en "Mundo Educativo" es proporcionar una plataforma interactiva y divertida que ayude a los niños de primer grado en El Salvador a reforzar sus conocimientos escolares. Nos comprometemos a facilitar el aprendizaje activo mediante actividades y juegos educativos que estimulen la curiosidad, la creatividad y la alfabetización digital. Nuestro objetivo es ofrecer contenido de alta calidad que apoye el desarrollo integral de los niños, adaptado a sus necesidades y ritmo de aprendizaje.</p>
                <center><img src="{{asset ('img/Mision.png') }}" alt="Misión" class="mt-4 rounded-lg"></center>
            </div>
            <div class="bg-zinc-100 dark:bg-uno p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-black">Visión</h2>
                <p class="text-zinc-600 dark:text-zinc-black mt-2">Nuestra visión es convertirnos en líderes en la educación digital para niños de primer grado en El Salvador, reconocidos por nuestra innovación, calidad y accesibilidad. Aspiramos a expandir nuestra influencia a nivel regional, proporcionando herramientas educativas que preparen a los niños para un futuro digital. Queremos ser un referente en la integración de tecnologías emergentes en la educación primaria, contribuyendo al desarrollo de habilidades esenciales del siglo XXI en nuestro país y más allá.</p>
                <center><img src="{{asset ('img/Vision.png') }}" alt="Visión" class="mt-4 rounded-lg"></center>

            </div>
            <div class="bg-zinc-100 dark:bg-uno p-5 rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-900 dark:text-black">Valores</h2>
                <p class="text-zinc-600 dark:text-zinc-black mt-2">Compromiso con la excelencia, responsabilidad social, innovación continua y respeto por las personas y el medio ambiente.</p>
                <center><img src="{{asset ('img/Valores.png') }}" alt="Valores" class="mt-4 rounded-lg"></center>
            </div>
        </div>
    </div>
<!-- ========================================acerca de nosotros===================================================== -->
<!-- ========================================FAQ======================================================-->
    <div class="max-w-7xl mx-auto p-4 flex flex-col md:flex-row items-start">
        <div class="w-full md:w-1/2 p-4">
            <img src="{{asset ('img/Logo.png') }}" alt="Imagen representativa" class="rounded-lg shadow-lg">
        </div>
        <div class="w-full md:w-1/2 p-4">
            <h2 class="text-2xl font-bold text-center mb-6 dark:text-black">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-uno">
                    <summary class="font-semibold cursor-pointer dark:text-black">¿Qué es Mundo Educativo?</summary>
                    <p class="mt-2 dark:text-black">Mundo Educativo es una aplicación WEB educativa diseñada especialmente para ayudar a los niños que están cursando primer grado a reforzar los conocimientos aprendidos en la clase. Ofrecemos una variedad de actividades interactivas, juegos educativos y lecciones para apoyar el aprendizaje de los niños en materias como matemáticas, ciencias, lenguaje y sociales.</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-uno">
                    <summary class="font-semibold cursor-pointer dark:text-black">¿Para qué edad está destinada Mundo Educativo?</summary>
                    <p class="mt-2 dark:text-black">Nuestra aplicación WEB está dirigida a niños que están cursando primer grado en la escuela primaria, generalmente entre las edades de 7 y 8 años.</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-uno">
                    <summary class="font-semibold cursor-pointer dark:text-black">¿Cuáles son las materias cubiertas por Mundo Educativo?</summary>
                    <p class="mt-2 dark:text-black">Mundo Educativo cubre una amplia gama de materias escolares, incluyendo matemáticas, ciencias, lenguaje y sociales. Nuestro objetivo es proporcionar un aprendizaje integral que abarque todas las áreas del plan de estudios de primer grado.</p>
                </details>
                <details class="bg-zinc-100 p-4 rounded-lg dark:bg-uno">
                    <summary class="font-semibold cursor-pointer dark:text-black">¿Cómo puedo obtener ayuda si tengo problemas técnicos con la aplicación?</summary>
                    <p class="mt-2 dark:text-black">Si encuentras algún problema técnico o tienes alguna pregunta sobre el uso de la aplicación WEB, puedes ponerte en contacto con nuestro equipo de soporte técnico a través del formulario de contacto en la aplicación o enviándonos un correo electrónico a support@mundoeducativo.com. Estaremos encantados de ayudarte a resolver cualquier problema que puedas tener.</p>
                </details>
            </div>
        </div>
    </div>
    <footer class="bg-uno text-black text-center py-4">
    Derechos Reservados Mundo Educativo 2024 ©
    </footer>
<!-- ========================================FAQ======================================================-->

    <script src="{{ asset('js/Inicio.js') }}"></script>
</body>
</html>