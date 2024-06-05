<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leccion 1.1</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="introSection" class="min-h-screen flex flex-col items-center justify-center bg-tres dark:bg-tres transition-colors">
        <a href="{{ route('leccioneslenguaje') }}" class="mt-4 bg-siete hover:bg-cuatro text-black font-bold py-2 px-6 rounded-lg transition duration-150 ease-in-out inline-block text-center">
            Ver Lecciones
        </a>
        <div class="container mx-auto p-4">
            <h1 class="text-3xl font-bold text-center mt-8 mb-4 text-black">Los cuentos y las fábulas</h1>
            <h1 class="text-3xl font-bold text-center mt-8 mb-4 text-black">¿Que es un Cuento?</h1>
            <p class="text-center mb-8">Un cuento es una narración breve de ficción protagonizada por un grupo reducido de personajes y con un argumento sencillo.</p>
            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold mb-2">Ejemplo de Cuento</h2>
                    <p>La Aventura de Pepito y el Gato Valiente:

                    Había una vez un niño llamado Pepito que vivía en un pequeño pueblo. Pepito tenía un amigo muy especial: un gato valiente llamado Tito. Tito no era un gato común; le encantaba explorar y siempre encontraba nuevas aventuras. <br>

                    Un día, mientras Pepito y Tito jugaban en el jardín, Tito vio algo brillante entre los arbustos. Era una llave dorada. "¡Mira, Pepito! Encontré una llave", maulló Tito emocionado. Pepito tomó la llave y se preguntó qué puerta abriría.

                    Decidieron explorar el bosque cercano en busca de la puerta secreta que la llave podría abrir. Caminaron y caminaron hasta que encontraron una pequeña puerta escondida entre los árboles. <br> Pepito y Tito se miraron con asombro.

                    Con mucho cuidado, Pepito insertó la llave en la cerradura y la puerta se abrió con un chirrido. Detrás de la puerta había un jardín mágico lleno de flores de colores, árboles de caramelos y un río de chocolate. <br> Nunca habían visto un lugar tan maravilloso.

                    Mientras exploraban el jardín mágico, se encontraron con un conejo que llevaba una chaqueta azul. "Hola, soy Benito, el guardián del jardín. Gracias por encontrar la llave y liberar la magia de este lugar", dijo Benito con una sonrisa.

                    Pepito y Tito pasaron toda la tarde jugando y disfrutando del jardín mágico. Prometieron a Benito que guardarían el secreto del jardín para que siempre permaneciera especial. <br>

                    Cuando llegó la hora de irse, Benito les dio una bolsita de semillas mágicas. "Planten estas semillas en su jardín y siempre tendrán un pedacito de este lugar con ustedes", les dijo.

                    Pepito y Tito regresaron a casa felices y plantaron las semillas en su jardín. Pronto, crecieron flores mágicas que les recordaban su increíble aventura.

                    Y así, Pepito y su gato Tito vivieron felices, sabiendo que tenían un amigo especial y un jardín mágico donde siempre podrían regresar. <br>

                    Fin.</p>
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <img src="{{ asset('img/cue.png') }}" alt="Cuento" class="rounded-lg shadow-lg">
                </div>
            </div>

            <h1 class="text-3xl font-bold text-center mt-8 mb-4 text-black" >¿Que son las fabulas?</h1>
            <p class="text-center mb-8">Una fábula es un relato breve, ficticio y didáctico en el que los personajes suelen ser animales que presentan características humanas.</p>

            <div class="flex flex-col md:flex-row items-center justify-center">
                <div class="w-full md:w-1/2 p-4">
                    <h2 class="text-2xl font-bold mb-2">Ejemplo de Fábula</h2>
                    <p>La Hormiga y la Cigarra: Era pleno verano y una cigarra cantaba alegremente mientras disfrutaba del sol y la brisa cálida. Cerca de allí, una hormiga trabajaba arduamente recolectando comida para el invierno. La hormiga iba y venía, cargando granos y semillas hasta su hormiguero.
                    "¿Por qué trabajas tanto, amiga hormiga?", preguntó la cigarra, descansando en una hoja. "Ven y canta conmigo. El verano es para disfrutar." <br>
                    La hormiga, sudando y cansada, respondió: "Estoy almacenando comida para el invierno. Cuando llegue el frío, no habrá comida y necesitaré estar preparada." La cigarra se rió y dijo: "El invierno está muy lejos. Hay tiempo de sobra para preocuparse por eso. Ahora, voy a cantar y disfrutar."
                    <br>Los días pasaron, el verano terminó y el otoño trajo un frío creciente. La hormiga continuó trabajando, asegurándose de tener suficiente comida para el invierno. La cigarra seguía cantando y disfrutando, sin preocuparse por el futuro. Finalmente, el invierno llegó con toda su fuerza. La nieve cubrió el suelo y no había comida a la vista. La hormiga estaba a salvo y cálida en su hormiguero, con suficiente comida almacenada para sobrevivir. La cigarra, sin embargo, se encontró hambrienta y sin refugio.
                    <br>Desesperada, la cigarra fue al hormiguero de la hormiga y pidió ayuda. "Por favor, amiga hormiga, ¿podrías compartir tu comida conmigo? No tengo nada para comer y estoy pasando mucho frío."
                    La hormiga, aunque compasiva, respondió: "Durante el verano, yo trabajé duro mientras tú cantabas. Me dijiste que el verano era para disfrutar, pero ahora es invierno y hay que estar preparado. Te ayudaré esta vez, pero debes aprender a ser previsora y trabajar para el futuro."
                    <br>La cigarra agradeció la ayuda de la hormiga y prometió que el próximo verano también trabajaría para prepararse para el invierno.
                    <br>Moraleja: Trabaja hoy para que no te falte mañana.
                    <br>Fin.</p>
                </div>
                <div class="w-full md:w-1/2 p-4">
                    <img src="{{ asset('img/fabula.png') }}" alt="Fábula" class="rounded-lg shadow-lg">
                </div>
            </div>
        </div>

        <div class="container mx-auto p-4">
            <h2 class="text-2xl font-bold text-center mt-8 mb-4">Diferencias y Similitudes</h2>
            <p class="text-center mb-8">Los cuentos y las fábulas comparten la característica de ser narraciones breves, pero se diferencian en la presencia de personajes humanos en los cuentos y animales con características humanas en las fábulas.</p>
        </div>
        <button onclick="startActivity()" class="mt-8 bg-siete hover:bg-cuatro text-black font-bold py-2 px-4 rounded">
            Actividad
        </button>
    </div>

    <div id="activitySection" class="flex flex-col items-center justify-center min-h-screen bg-seis from-blue-500 to-sky-500 text-black dark:seis hidden">
        <div class="min-h-screen flex flex-col items-center justify-center bg-seis dark:bg-seis">
        <center><img src="{{ asset('img/act.png') }}" alt="logo" class="h-60 w-60"></center>
            <div class="max-w-md p-4 bg-tres dark:bg-ocho shadow-lg rounded-lg">
                <h2 class="text-2xl font-bold text-zinc-800 dark:text-black mb-4">Lee y luego selecciona si es un cuento o una fabula</h2>
                <p class="text-zinc-700 dark:black mb-4"> La Estrella Perdida: <br>
                Una noche, en un cielo estrellado, una pequeña estrella llamada Estelita se cayó del cielo y aterrizó suavemente en un campo de flores. Estelita estaba asustada y no sabía cómo volver a su lugar en el cielo.

                Un conejo llamado Max pasaba por ahí y vio a la estrella. "Hola, pequeña estrella, ¿qué haces aquí en el campo?", preguntó Max.

                "Me he caído del cielo y no sé cómo regresar", respondió Estelita con tristeza.

                Max, siendo un conejo muy amable, decidió ayudar. "Vamos a encontrar una manera de llevarte de vuelta al cielo", dijo.

                Max y Estelita fueron a ver al búho sabio, quien vivía en el viejo roble. "Búho sabio, Estelita necesita volver al cielo. ¿Sabes cómo podemos ayudarla?", preguntó Max.

                El búho sabio pensó por un momento y luego dijo: "Necesitamos la ayuda del viento. Si Estelita se sube a la cima de la colina más alta y salta, el viento la llevará de regreso al cielo."

                Max y Estelita agradecieron al búho sabio y se dirigieron a la colina más alta. Estelita subió a la cima, y con un último adiós a Max, saltó. El viento la recogió suavemente y la llevó de vuelta a su lugar en el cielo.

                Desde entonces, cada vez que Max miraba al cielo, veía a Estelita brillando intensamente, y Estelita le guiñaba un ojo en agradecimiento.
                <br>Fin.</p>
                <button class="bg-seis text-black p-2 rounded-lg mb-4" id="cuento-btn">Es un cuento</button>
                <button class="bg-seis text-black p-2 rounded-lg" id="fabula-btn">Es una fábula</button>
                <p id="message-cuento" class="text-center mt-4"></p>
            </div>
            <div class="max-w-md p-4 bg-ocho dark:bg-ocho shadow-lg rounded-lg mt-8">
                <h2 class="text-2xl font-bold text-zinc-800 dark:text-black mb-4">Lee y luego selecciona si es un cuento o una fabula</h2>
                <p class="text-zinc-700 dark:text-black mb-4">El Ratón y el León: <br>
                Un día, un ratón muy pequeño corría por el bosque cuando accidentalmente pasó sobre la nariz de un león dormido. El león se despertó y atrapó al ratón con su gran pata.
                "¿Quién te atreves a despertarme?", rugió el león. "Voy a comerte por molestar mi sueño."
                El ratón, temblando de miedo, suplicó: "Por favor, señor León, déjame ir. Si me perdonas la vida, prometo que algún día te devolveré el favor."
                El león se rió ante la idea de que un ratón pudiera ayudarle, pero decidió dejarlo ir. "Está bien, te dejaré ir. Vete antes de que cambie de opinión."
                Días después, el león quedó atrapado en una red de cazadores. Rugió y luchó, pero no pudo liberarse. El ratón, que escuchó los rugidos del león, corrió al lugar y vio al león atrapado.
                Con sus afilados dientes, el ratón mordió las cuerdas de la red hasta que hizo un agujero lo suficientemente grande para que el león pudiera escapar. "¿Ves?", dijo el ratón, "Te dije que algún día te devolvería el favor."
                El león, agradecido y sorprendido, respondió: "Gracias, pequeño amigo. Me has enseñado que incluso los más pequeños pueden ser de gran ayuda."
                <br>Moraleja: No subestimes a los demás por su tamaño; incluso los más pequeños pueden ser de gran ayuda.
                <br>Fin.</p>
                <button class="bg-seis text-black p-2 rounded-lg mb-4" id="cuento-btn-fabula">Es un cuento</button>
                <button class="bg-seis text-black p-2 rounded-lg" id="fabula-btn-fabula">Es una fábula</button>
                <p id="message-fabula" class="text-center mt-4"></p>
            </div>
        </div>

        <button onclick="returnToIntro()" class="mt-8 bg-siete hover:cuatro text-black font-bold py-2 px-4 rounded">
            Lección
        </button>
    </div>

    <script src="{{ asset('js/LenguajeActividades.js') }}"></script>
</body>
</html>