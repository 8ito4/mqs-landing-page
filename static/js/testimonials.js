// Dados dos depoimentos
const testimonials = [
    {
        name: 'João Silva',
        location: 'São Paulo, SP',
        avatar: 'https://randomuser.me/api/portraits/men/1.jpg',
        text: 'O MQS mudou completamente minha relação com o dinheiro. Em 3 meses, consegui economizar R$ 2.800 e criar um plano real de investimentos.',
        period: '3 meses',
        savings: 'R$ 2.800'
    },
    {
        name: 'Ana Costa',
        location: 'Rio de Janeiro, RJ',
        avatar: 'https://randomuser.me/api/portraits/women/2.jpg',
        text: 'A planilha do método é simplesmente incrível! Muito intuitiva e me ajudou a ter uma visão clara dos meus gastos. Em 4 meses, economizei R$ 3.500.',
        period: '4 meses',
        savings: 'R$ 3.500'
    },
    {
        name: 'Pedro Santos',
        location: 'Belo Horizonte, MG',
        avatar: 'https://randomuser.me/api/portraits/men/3.jpg',
        text: 'O suporte da comunidade fez toda diferença. Sempre que tinha dúvidas, era prontamente atendido. Consegui guardar R$ 2.100 em 2 meses.',
        period: '2 meses',
        savings: 'R$ 2.100'
    },
    // Adicione mais 47 depoimentos seguindo o mesmo padrão
];

// Função para criar o HTML de um depoimento
function createTestimonialCard(testimonial) {
    return `
        <div class="swiper-slide">
            <div class="testimonial-card">
                <div class="testimonial-header">
                    <img src="${testimonial.avatar}" alt="${testimonial.name}" class="testimonial-avatar">
                    <div class="testimonial-info">
                        <h3>${testimonial.name}</h3>
                        <p class="testimonial-location">${testimonial.location}</p>
                    </div>
                </div>
                <p class="testimonial-text">${testimonial.text}</p>
                <div class="testimonial-metrics">
                    <span>Período: ${testimonial.period}</span>
                    <span>Economia: ${testimonial.savings}</span>
                </div>
            </div>
        </div>
    `;
}

// Inicializar o Swiper quando o documento estiver carregado
document.addEventListener('DOMContentLoaded', function() {
    // Inserir os depoimentos no DOM
    const swiperWrapper = document.querySelector('.swiper-wrapper');
    testimonials.forEach(testimonial => {
        swiperWrapper.innerHTML += createTestimonialCard(testimonial);
    });

    // Inicializar o Swiper
    new Swiper('.testimonials-slider', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
}); 