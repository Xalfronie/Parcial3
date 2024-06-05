const wordToImgMap = {
    TACTO: 'hand',
    OLFATO: 'nose',
    GUSTO: 'tongue',
    OÍDO: 'ear',
    VISTA: 'eye'
};

let selectedWord = null;
let selectedElement = null;
let correctConnections = 0;
const totalConnections = Object.keys(wordToImgMap).length;
const startTime = Date.now();
const message = document.getElementById('message');
const words = document.querySelectorAll('[data-word]');
const images = document.querySelectorAll('[data-img]');
const draw = SVG().addTo('#drawing').size('100%', '100%');
const lines = {};

words.forEach(word => {
    word.addEventListener('click', () => {
        if (selectedElement) {
            selectedElement.style.borderColor = 'transparent';
        }
        selectedWord = word.dataset.word;
        selectedElement = word;
        selectedElement.style.borderColor = 'blue';
        message.innerText = `Palabra seleccionada: ${selectedWord}`;
    });
});

images.forEach(image => {
    image.addEventListener('click', () => {
        if (selectedWord) {
            const imgName = image.dataset.img;
            if (wordToImgMap[selectedWord] === imgName) {
                message.innerText = `Conectando ${selectedWord} con ${imgName}`;

                // Elimina la línea anterior si existe
                if (lines[selectedWord]) {
                    lines[selectedWord].remove();
                }

                const wordRect = selectedElement.getBoundingClientRect();
                const imgRect = image.getBoundingClientRect();
                const line = draw.line(
                    wordRect.right,
                    wordRect.top + wordRect.height / 2,
                    imgRect.left,
                    imgRect.top + imgRect.height / 2
                ).stroke({ width: 2, color: 'blue' });

                // Guarda la línea para poder eliminarla después
                lines[selectedWord] = line;

                selectedElement.style.borderColor = 'transparent';
                selectedElement.classList.add('connected');
                selectedWord = null;
                selectedElement = null;

                correctConnections++;
                if (correctConnections === totalConnections) {
                    showSummary();
                }
            } else {
                message.innerText = 'La palabra no coincide con la imagen seleccionada.';
            }
        } else {
            message.innerText = 'Por favor, selecciona una palabra primero';
        }
    });
});

function showSummary() {
    const endTime = Date.now();
    const totalTime = ((endTime - startTime) / 1000).toFixed(2);
    const modal = document.getElementById('modal');
    const summary = document.getElementById('summary');
    summary.innerText = `¡Actividad completada!\nTiempo total: ${totalTime} segundos\nConexiones correctas: ${correctConnections}`;
    modal.classList.remove('hidden');
}

document.getElementById('retry').addEventListener('click', () => {
    window.location.reload();
});

function startActivity() {
    document.getElementById('introSection').classList.add('hidden');
    document.getElementById('activitySection').classList.remove('hidden');
}

function returnToIntro() {
    document.getElementById('introSection').classList.remove('hidden');
    document.getElementById('activitySection').classList.add('hidden');
}

document.getElementById('retry').addEventListener('click', () => {
    // Recarga la página y añade el parámetro 'activity=true' a la URL
    window.location.href = window.location.pathname + '?activity=true';
});

// Llama a startActivity() después de que la página se haya cargado completamente
window.addEventListener('load', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const activityParam = urlParams.get('activity');
    
    if (activityParam === 'true' || window.location.hash === '#activitySection') {
        startActivity();
    }
});


