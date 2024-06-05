function startActivity() {
    document.getElementById('introSection').classList.add('hidden');
    document.getElementById('activitySection').classList.remove('hidden');
}

function returnToIntro() {
    document.getElementById('introSection').classList.remove('hidden');
    document.getElementById('activitySection').classList.add('hidden');
}

function startActivity() {
    document.getElementById('introSection').classList.add('hidden');
    document.getElementById('activitySection').classList.remove('hidden');
}

function returnToIntro() {
    document.getElementById('introSection').classList.remove('hidden');
    document.getElementById('activitySection').classList.add('hidden');
}

const cuentoBtn = document.getElementById('cuento-btn');
const fabulaBtn = document.getElementById('fabula-btn');
const cuentoBtnFabula = document.getElementById('cuento-btn-fabula');
const fabulaBtnFabula = document.getElementById('fabula-btn-fabula');

cuentoBtn.addEventListener('click', () => {
    const message = document.getElementById('message-cuento');
    message.innerText = 'Respuesta correcta: Es un cuento';
    message.style.color = 'green';
});

fabulaBtn.addEventListener('click', () => {
    const message = document.getElementById('message-cuento');
    message.innerText = 'Respuesta incorrecta: Es un cuento';
    message.style.color = 'red';
});

cuentoBtnFabula.addEventListener('click', () => {
    const message = document.getElementById('message-fabula');
    message.innerText = 'Respuesta incorrecta: Es una fábula';
    message.style.color = 'red';
});

fabulaBtnFabula.addEventListener('click', () => {
    const message = document.getElementById('message-fabula');
    message.innerText = 'Respuesta correcta: Es una fábula';
    message.style.color = 'green';
});
