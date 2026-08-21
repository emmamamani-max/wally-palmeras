document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.querySelector('#menuToggle');
    const mainNav = document.querySelector('#mainNav');
    const themeToggle = document.querySelector('#themeToggle');
    const scheduleButton = document.querySelector('#scheduleButton');
    const scheduleInfo = document.querySelector('#scheduleInfo');
    const form = document.querySelector('#contactForm');
    const formMessage = document.querySelector('#formMessage');

    menuToggle?.addEventListener('click', () => {
        const open = mainNav.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', String(open));
    });

    themeToggle?.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        const dark = document.body.classList.contains('dark');
        themeToggle.textContent = dark ? '☀️ Modo claro' : '🌙 Modo oscuro';
        localStorage.setItem('wallyTheme', dark ? 'dark' : 'light');
    });

    if (localStorage.getItem('wallyTheme') === 'dark') {
        document.body.classList.add('dark');
        if (themeToggle) themeToggle.textContent = '☀️ Modo claro';
    }

    scheduleButton?.addEventListener('click', () => {
        scheduleInfo.hidden = !scheduleInfo.hidden;
        scheduleButton.textContent = scheduleInfo.hidden ? 'Ver horarios' : 'Ocultar horarios';
    });

    form?.addEventListener('submit', (event) => {
        event.preventDefault();

        const nombre = document.querySelector('#nombre').value.trim();
        const email = document.querySelector('#email').value.trim();
        const mensaje = document.querySelector('#mensaje').value.trim();

        formMessage.className = 'form-message';

        if (!nombre) {
            formMessage.textContent = 'Por favor, escribe tu nombre.';
            formMessage.classList.add('error');
            return;
        }

        if (!email.includes('@')) {
            formMessage.textContent = 'Por favor, escribe un correo válido con @.';
            formMessage.classList.add('error');
            return;
        }

        if (!mensaje) {
            formMessage.textContent = 'Por favor, escribe un mensaje.';
            formMessage.classList.add('error');
            return;
        }

        formMessage.textContent = 'Datos correctos. Enviando formulario...';
        formMessage.classList.add('success');

        // La validación JS es independiente; Laravel recibe el POST cuando el formulario
        // se envía normalmente. Aquí quitamos temporalmente el preventDefault y reenviamos.
        setTimeout(() => form.submit(), 300);
    });
});
