import './bootstrap';

// Smooth scroll para links de navegação
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Botões de CTA
const ctaButtons = document.querySelectorAll('.btn-primary');
ctaButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Link de pagamento externo (substitua pela URL real)
        window.location.href = 'https://pay.hotmart.com/seu-produto';
    });
});

// Animação de fade-in nos elementos quando aparecem na tela
const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
    section.classList.add('opacity-0', 'transition-opacity', 'duration-1000');
    observer.observe(section);
});
