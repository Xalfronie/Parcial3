document.addEventListener('DOMContentLoaded', (event) => {
    const urlParams = new URLSearchParams(window.location.search);
    const activityParam = urlParams.get('activity');
    
    // Manejo de parámetro de actividad
    if (activityParam === 'true' || window.location.hash === '#activitySection') {
        startActivity();
    }

    // Desplazamiento suave si hay un fragmento en la URL
    if (window.location.hash) {
        const element = document.querySelector(window.location.hash);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    }

    const draggables = document.querySelectorAll('.draggable');
    const droppables = document.querySelectorAll('.droppable');
    let correctDrops = 0;
    let wrongDrops = 0;
    let totalTime = 0; // Variable para almacenar el tiempo total

    draggables.forEach(draggable => {
        draggable.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('color', e.target.closest('.draggable').dataset.color);
        });
    });

    droppables.forEach(droppable => {
        droppable.addEventListener('dragover', (e) => {
            e.preventDefault();
            e.target.classList.add('over');
        });

        droppable.addEventListener('dragleave', (e) => {
            e.target.classList.remove('over');
        });

        droppable.addEventListener('drop', (e) => {
            e.preventDefault();
            e.target.classList.remove('over');
            const color = e.dataTransfer.getData('color');
            const draggedElement = document.querySelector(`[data-color="${color}"]`);
            if (color === e.target.dataset.color && !draggedElement.classList.contains('dropped')) {
                correctDrops++;
                e.target.classList.add('bg-' + color + '-500');
                draggedElement.classList.add('dropped');
                draggedElement.setAttribute('draggable', 'false');
                e.target.appendChild(draggedElement);
                document.getElementById('message').innerText = '¡Lo hiciste bien!';
            } else {
                wrongDrops++;
                document.getElementById('message').innerText = '¡Sigue intentando!';
            }

            if (correctDrops === droppables.length) {
                const endTime = Date.now();
                totalTime = ((endTime - startTime) / 1000).toFixed(2);
                const modal = document.getElementById('modal');
                const summary = document.getElementById('summary');
                summary.innerText = `Tiempo total: ${totalTime} segundos\nCorrecto: ${correctDrops}\nErrores: ${wrongDrops}`;
                modal.classList.remove('hidden');
            }
        });
    });

    document.getElementById('retry').addEventListener('click', () => {
        // Recarga la página y añade el parámetro 'activity=true' a la URL
        window.location.href = window.location.pathname + '?activity=true';
    });
});

function changeColor(color) {
    document.getElementById('introSection').style.backgroundColor = color;
}

function resetColor() {
    document.getElementById('introSection').style.backgroundColor = '';
}

let startTime = 0; // Inicializar el tiempo al iniciar la actividad

function startActivity() {
    document.getElementById('introSection').classList.add('hidden');
    document.getElementById('activitySection').classList.remove('hidden');
    startTime = Date.now(); // Comienza el tiempo cuando se inicia la actividad
}

function returnToIntro() {
    document.getElementById('introSection').classList.remove('hidden');
    document.getElementById('activitySection').classList.add('hidden');
    // No es necesario restablecer la actividad aquí ya que la página se recargará
}
