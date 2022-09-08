const btnMobile = document.getElementById('btn-mobile');

function toggleMobile(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.correntTarget.setAttribute('aria-expanded', 'active');
    // if (active) {
    //     event.correntTarget.setAttribute('aria-label', 'Fechar menu');
    // else {
    //     event.correntTarget.setAttribute('aria-label', 'Abrir menu');
    // }
    // }
}

btnMobile.addEventListener('click', toggleMobile);
btnMobile.addEventListener('touchstart', toggleMobile);