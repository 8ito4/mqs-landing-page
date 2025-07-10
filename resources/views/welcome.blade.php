<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra como ganhar mais de um salário extra sem tirar nada do bolso. Método comprovado para aproveitar benefícios esquecidos.">
    <meta name="keywords" content="renda extra, benefícios, cashback, bônus, dinheiro extra, ganhar dinheiro">
    <title>Ganhe Mais Sem Gastar Nada</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- GSAP para animações -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <!-- Three.js para efeitos 3D -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.161.0/three.min.js"></script>

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'neon': '#00f2fe',
                        'neon-dark': '#0092ff',
                        'deep-blue': '#000B2E',
                        'darker': '#000514',
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        :root {
            --color-blue: #00f2fe;
            --color-blue-dark: #0092ff;
            --color-dark: #000000;
            --color-darker: #000000;
        }

        body {
            background: linear-gradient(to bottom right, #000000, #0a0a0a, #000000);
            color: #fff;
            overflow-x: hidden;
        }

        .animated-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            background: 
                radial-gradient(circle at 0% 0%, rgba(0, 0, 0, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 100% 0%, rgba(0, 0, 0, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 100% 100%, rgba(0, 0, 0, 0.8) 0%, transparent 50%),
                radial-gradient(circle at 0% 100%, rgba(0, 0, 0, 0.8) 0%, transparent 50%);
            opacity: 1;
        }

        .grid-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                linear-gradient(rgba(0, 242, 254, 0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 242, 254, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 1;
            opacity: 1;
            pointer-events: none;
        }

        .cyber-lines {
            display: none;
        }

        .cyber-line {
            display: none;
        }

        @keyframes cyberlinesAnimation {
            display: none;
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        .neon-text {
            color: var(--color-blue);
            text-shadow: 0 0 10px rgba(0, 242, 254, 0.5),
                        0 0 20px rgba(0, 146, 255, 0.3),
                        0 0 30px rgba(0, 242, 254, 0.1);
        }

        .neon-box {
            background: rgba(2, 6, 23, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(12px);
            transition: all 0.3s ease;
            border-radius: 16px;
        }

        .neon-box:hover {
            border-color: rgba(0, 242, 254, 0.1);
            box-shadow: 0 8px 32px rgba(0, 242, 254, 0.1);
            transform: translateY(-5px);
        }

        .neon-box h3 {
            color: var(--color-blue);
            text-shadow: 0 0 10px rgba(0, 242, 254, 0.3);
        }

        .neon-box .text-white/80 {
            color: rgba(255, 255, 255, 0.7);
        }

        .neon-box svg {
            color: var(--color-blue);
            opacity: 0.8;
        }

        .neon-button {
            background: linear-gradient(135deg, var(--color-blue), var(--color-blue-dark));
            box-shadow: 0 4px 20px rgba(0, 242, 254, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .neon-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            transition: 0.5s;
        }

        .neon-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 242, 254, 0.4);
        }

        .neon-button:hover::before {
            left: 100%;
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .glow-effect {
            position: relative;
        }

        .glow-effect::after {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #00f2fe, #0092ff);
            filter: blur(15px);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
            border-radius: inherit;
        }

        .glow-effect:hover::after {
            opacity: 0.5;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            perspective: 1000px;
        }

        .card-3d {
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }

        .card-3d:hover {
            transform: rotateY(10deg) rotateX(5deg);
        }

        .gradient-border {
            position: relative;
            border-radius: 20px;
            padding: 1px;
            background: linear-gradient(45deg, #00f2fe, #0092ff);
        }

        .gradient-border::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 20px;
            padding: 1px;
            background: linear-gradient(45deg, #00f2fe, #0092ff);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
        }

        .hero-content {
            opacity: 0;
            transform: translateY(30px);
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .stat-card {
            background: rgba(0, 11, 46, 0.6);
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            background: rgba(0, 11, 46, 0.8);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #00f2fe;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.1rem;
        }

        #canvas-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .timeline-dot {
            background: var(--color-blue);
        }

        .timeline-line {
            background: linear-gradient(to bottom, var(--color-blue), var(--color-blue-dark));
        }

        .hover\:text-purple-400:hover {
            color: var(--color-blue);
        }

        .text-purple-400 {
            color: var(--color-blue);
        }

        .bg-purple-600\/10 {
            background-color: rgba(0, 242, 254, 0.1);
        }

        .border-purple-500\/10 {
            border-color: rgba(0, 242, 254, 0.1);
        }

        .title-container {
            position: relative;
            text-align: center;
            margin-bottom: 4rem;
            padding: 1rem 0;
        }

        .title-alert {
            display: none;
        }

        .title-main {
            font-size: 3.5rem;
            line-height: 1.3;
            margin-bottom: 0;
            font-weight: 800;
        }

        .title-highlight {
            position: relative;
            display: inline-block;
            color: #00f2fe;
            text-shadow: 
                0 0 10px rgba(0, 242, 254, 0.5),
                0 0 20px rgba(0, 242, 254, 0.3),
                0 0 30px rgba(0, 242, 254, 0.2);
        }

        .title-highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: #00f2fe;
            box-shadow: 0 0 10px #00f2fe;
        }

        .title-description, .highlight-number {
            display: none;
        }

        .title-glow {
            color: #00f2fe;
            text-shadow: 
                0 0 10px rgba(0, 242, 254, 0.5),
                0 0 20px rgba(0, 242, 254, 0.3),
                0 0 30px rgba(0, 242, 254, 0.2),
                0 0 40px rgba(0, 242, 254, 0.1);
            animation: titlePulse 3s ease-in-out infinite;
        }

        @keyframes titlePulse {
            0%, 100% {
                text-shadow: 
                    0 0 10px rgba(0, 242, 254, 0.5),
                    0 0 20px rgba(0, 242, 254, 0.3),
                    0 0 30px rgba(0, 242, 254, 0.2);
            }
            50% {
                text-shadow: 
                    0 0 15px rgba(0, 242, 254, 0.6),
                    0 0 25px rgba(0, 242, 254, 0.4),
                    0 0 35px rgba(0, 242, 254, 0.3);
            }
        }

        .title-subtitle {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            margin-top: 1rem;
            letter-spacing: 2px;
        }

        [x-cloak] {
            display: none !important;
        }

        .chart-container {
            position: relative;
            width: 100%;
            max-width: 900px;
            margin: 0 auto 4rem auto;
            background: rgba(2, 6, 23, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            padding: 2rem;
        }

        .chart-title {
            color: #00f2fe;
            text-align: center;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 0 0 10px rgba(0, 242, 254, 0.3);
        }

        .swiper-slide {
            height: auto;
            padding: 1rem;
        }
        
        .swiper-button-next,
        .swiper-button-prev {
            color: #00f2fe;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            opacity: 1;
        }

        .swiper-pagination-bullet {
            background: #00f2fe;
        }
    </style>
</head>
<body class="font-inter">
    <!-- Novo Background -->
    <div class="animated-background"></div>
    <div class="grid-overlay"></div>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <!-- Header -->
        <header class="fixed w-full top-0 z-50 py-6 backdrop-blur-lg bg-darker/50">
            <div class="container mx-auto px-4">
                <nav class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="w-1/4">
                        <a href="#" class="text-2xl font-poppins font-bold neon-text">MQS</a>
                    </div>
                    
                    <!-- Menu Central -->
                    <div class="hidden md:flex items-center justify-center space-x-8 w-2/4">
                        <a href="#metodo" class="text-white/80 hover:text-[#00f2fe] transition-colors">O Método</a>
                        <a href="#bonus" class="text-white/80 hover:text-[#00f2fe] transition-colors">Bônus</a>
                        <a href="#resultados" class="text-white/80 hover:text-[#00f2fe] transition-colors">Resultados</a>
                        <a href="#faq" class="text-white/80 hover:text-[#00f2fe] transition-colors">FAQ</a>
                    </div>

                    <!-- Botão CTA -->
                    <div class="w-1/4 flex justify-end">
                        <button class="neon-button px-6 py-2 rounded-full text-sm font-bold text-white">
                            Começar Agora
                        </button>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="min-h-screen flex items-center pt-20">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center hero-content">
                    <h1 class="text-5xl md:text-7xl font-poppins font-bold mb-8">
                        <span class="text-white">Você está</span><br>
                        <span class="neon-text">perdendo dinheiro</span><br>
                        <span class="text-white">todos os dias</span>
                    </h1>

                    <p class="text-xl text-white/80 mb-12 max-w-3xl mx-auto">
                        Descubra como recuperar mais de <span class="neon-text font-semibold">R$ 1.500 em bônus de boas-vindas</span> que estão esperando por você
                    </p>

                    <!-- Placeholder do Vídeo -->
                    <div class="max-w-4xl mx-auto mb-12">
                        <div class="relative w-full bg-[rgba(0,242,254,0.1)] rounded-2xl overflow-hidden" style="padding-top: 56.25%;">
                            <iframe 
                                class="absolute inset-0 w-full h-full"
                                src="https://www.youtube.com/embed/H63L5FChEv8"
                                title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="neon-button px-12 py-6 rounded-full text-xl font-bold text-white">
                            Quero começar agora mesmo
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Como Funciona -->
        <section id="metodo" class="py-32">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20">
                    <span class="neon-text">Como</span> funciona
                </h2>

                <div class="max-w-4xl mx-auto mb-20">
                    <div class="relative">
                        <div class="absolute left-0 w-1 h-full bg-gradient-to-b from-purple-600 to-pink-500"></div>
                        <div class="space-y-12 pl-8">
                            <div class="relative">
                                <div class="absolute -left-10 w-6 h-6 rounded-full bg-purple-600"></div>
                                <h3 class="text-2xl font-bold mb-4 neon-text">1. Aprenda o Método</h3>
                                <p class="text-white/80">Acesso imediato a todas as aulas explicando passo a passo como funciona o método, desde o básico até as estratégias avançadas.</p>
                            </div>
                            <div class="relative">
                                <div class="absolute -left-10 w-6 h-6 rounded-full bg-purple-500"></div>
                                <h3 class="text-2xl font-bold mb-4 neon-text">2. Planilha Exclusiva</h3>
                                <p class="text-white/80">Receba nossa planilha profissional para organizar todos os bônus e acompanhar seus ganhos de forma simples e eficiente.</p>
                            </div>
                            <div class="relative">
                                <div class="absolute -left-10 w-6 h-6 rounded-full bg-pink-500"></div>
                                <h3 class="text-2xl font-bold mb-4 neon-text">3. Comunidade VIP</h3>
                                <p class="text-white/80">Grupo exclusivo onde compartilhamos diariamente novos bônus e oportunidades, além de suporte direto para suas dúvidas.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-grid">
                    <div class="neon-box p-8">
                        <div class="w-16 h-16 rounded-xl bg-[rgba(0,242,254,0.1)] flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-poppins font-bold mb-4">100% Legal</h3>
                        <p class="text-white/80">Método totalmente dentro da lei, aproveitando ofertas oficiais das casas de apostas.</p>
                    </div>

                    <div class="neon-box p-8">
                        <div class="w-16 h-16 rounded-xl bg-[rgba(0,242,254,0.1)] flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-poppins font-bold mb-4">Rápido e Fácil</h3>
                        <p class="text-white/80">Em menos de 1 hora por dia você consegue aplicar o método e gerar resultados.</p>
                    </div>

                    <div class="neon-box p-8">
                        <div class="w-16 h-16 rounded-xl bg-[rgba(0,242,254,0.1)] flex items-center justify-center mb-6">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-poppins font-bold mb-4">Sem Riscos</h3>
                        <p class="text-white/80">Você não precisa investir nada, apenas aproveitar os bônus oferecidos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bônus Section -->
        <section id="bonus" class="py-32 bg-darker/50">
            <div class="container mx-auto px-4">
                <div class="title-container">
                    <h2 class="title-main">
                        <span class="text-white">Descubra como</span><br/>
                        <span class="title-highlight">+ de 2.000 pessoas</span><br/>
                        <span class="text-white">estão ganhando um</span><br/>
                        <span class="title-highlight">salário extra todo mês</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <div class="neon-box p-8">
                        <h3 class="text-2xl font-bold mb-6">Planilha Profissional</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Controle automático de todos os bônus ativos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Cálculo automático de lucros e retornos</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Dashboard com visão geral dos seus resultados</span>
                            </li>
                        </ul>
                    </div>

                    <div class="neon-box p-8">
                        <h3 class="text-2xl font-bold mb-6">Grupo VIP</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Alertas diários de novos bônus disponíveis</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Suporte direto para suas dúvidas</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-6 h-6 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-white/80">Comunidade ativa compartilhando experiências</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Depoimentos -->
        <section id="depoimentos" class="py-32">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20">
                    <span class="text-white">Quem já está</span>
                    <span class="neon-text">lucrando</span>
                </h2>

                <!-- Swiper -->
                <div class="swiper depoimentosSwiper max-w-6xl mx-auto">
                    <div class="swiper-wrapper">
                        <!-- Depoimento 1 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="João Silva" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">João Silva</h4>
                                        <p class="text-white/60 text-sm">São Paulo, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Comecei há 2 meses e já recuperei mais de R$ 2.000 em bônus. O método é muito mais simples do que eu imaginava!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 2 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Ana Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Ana Costa</h4>
                                        <p class="text-white/60 text-sm">Rio de Janeiro, RJ</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Em apenas 45 dias consegui R$ 1.800 em bônus. A planilha facilita muito o controle!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 3 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Pedro Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Pedro Santos</h4>
                                        <p class="text-white/60 text-sm">Curitiba, PR</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Incrível como é fácil seguir o passo a passo. Já fiz R$ 2.500 em 3 meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 4 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Mariana Lima" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Mariana Lima</h4>
                                        <p class="text-white/60 text-sm">Salvador, BA</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"O suporte do grupo VIP é sensacional. Já resgatei R$ 1.600 no primeiro mês!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 5 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/5.jpg" alt="Lucas Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Lucas Oliveira</h4>
                                        <p class="text-white/60 text-sm">Belo Horizonte, MG</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Nunca imaginei que seria tão simples. Já fiz R$ 3.200 em 4 meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 6 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/6.jpg" alt="Fernanda Souza" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Fernanda Souza</h4>
                                        <p class="text-white/60 text-sm">Fortaleza, CE</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"A comunidade é incrível! Todos se ajudam e já consegui R$ 2.100 em dois meses."</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 7 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/7.jpg" alt="Ricardo Mendes" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Ricardo Mendes</h4>
                                        <p class="text-white/60 text-sm">Recife, PE</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Comecei sem entender nada de apostas e hoje já faço R$ 1.900 por mês com os bônus!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 8 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/8.jpg" alt="Camila Rocha" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Camila Rocha</h4>
                                        <p class="text-white/60 text-sm">Brasília, DF</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"As aulas são super claras e objetivas. Consegui R$ 1.700 logo no primeiro mês!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 9 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/9.jpg" alt="Thiago Alves" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Thiago Alves</h4>
                                        <p class="text-white/60 text-sm">Porto Alegre, RS</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"A planilha automatizada é um diferencial incrível. Já fiz R$ 2.800 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 10 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/10.jpg" alt="Beatriz Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Beatriz Santos</h4>
                                        <p class="text-white/60 text-sm">Manaus, AM</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Melhor investimento que já fiz! Em 4 meses já recuperei R$ 3.500 em bônus!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 11 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/11.jpg" alt="Gabriel Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Gabriel Costa</h4>
                                        <p class="text-white/60 text-sm">Florianópolis, SC</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"O método é fantástico! Consegui R$ 2.300 em bônus nos primeiros dois meses."</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 12 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg" alt="Isabella Martins" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Isabella Martins</h4>
                                        <p class="text-white/60 text-sm">Goiânia, GO</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Achei que era complicado, mas o passo a passo é muito claro. Já fiz R$ 1.950 em bônus!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 13 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/13.jpg" alt="Felipe Carvalho" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Felipe Carvalho</h4>
                                        <p class="text-white/60 text-sm">Vitória, ES</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"O suporte é excepcional! Em 3 meses já resgatei R$ 2.600 em bônus."</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 14 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/14.jpg" alt="Laura Pereira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Laura Pereira</h4>
                                        <p class="text-white/60 text-sm">Natal, RN</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Estou há 5 meses no método e já consegui mais de R$ 4.200 em bônus!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 15 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="Marcos Ribeiro" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Marcos Ribeiro</h4>
                                        <p class="text-white/60 text-sm">João Pessoa, PB</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"A planilha é perfeita para organização. Já fiz R$ 2.400 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 16 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/16.jpg" alt="Carolina Lima" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Carolina Lima</h4>
                                        <p class="text-white/60 text-sm">Cuiabá, MT</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Comecei sem experiência e hoje faço R$ 1.800 mensais só com bônus!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 17 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/17.jpg" alt="Rafael Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Rafael Santos</h4>
                                        <p class="text-white/60 text-sm">Belém, PA</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"O grupo VIP é sensacional! Já resgatei R$ 2.900 em quatro meses."</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 18 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/18.jpg" alt="Amanda Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Amanda Oliveira</h4>
                                        <p class="text-white/60 text-sm">Campo Grande, MS</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"As dicas do grupo são valiosas! Já consegui R$ 2.200 em dois meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 19 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/19.jpg" alt="Bruno Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Bruno Costa</h4>
                                        <p class="text-white/60 text-sm">Aracaju, SE</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método simples e eficiente! Já fiz R$ 3.100 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 20 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="Juliana Ferreira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Juliana Ferreira</h4>
                                        <p class="text-white/60 text-sm">Teresina, PI</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Incrível como é fácil seguir o método! Já resgatei R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 21 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/21.jpg" alt="Paulo Roberto" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Paulo Roberto</h4>
                                        <p class="text-white/60 text-sm">Santos, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método revolucionário! Já consegui R$ 2.500 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 22 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/22.jpg" alt="Sandra Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Sandra Oliveira</h4>
                                        <p class="text-white/60 text-sm">Campinas, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"As estratégias são incríveis! Já resgatei R$ 2.800 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 23 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/23.jpg" alt="Gustavo Mendes" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Gustavo Mendes</h4>
                                        <p class="text-white/60 text-sm">Porto Velho, RO</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método prático e eficiente! Consegui R$ 3.300 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 24 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/24.jpg" alt="Renata Castro" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Renata Castro</h4>
                                        <p class="text-white/60 text-sm">Boa Vista, RR</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"A comunidade é muito unida! Já fiz R$ 2.400 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 25 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/25.jpg" alt="Daniel Ferreira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Daniel Ferreira</h4>
                                        <p class="text-white/60 text-sm">Palmas, TO</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Excelente investimento! Já recuperei R$ 2.900 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 26 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/26.jpg" alt="Carla Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Carla Santos</h4>
                                        <p class="text-white/60 text-sm">Macapá, AP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"O suporte é muito atencioso! Já resgatei R$ 2.000 em dois meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 27 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/27.jpg" alt="Marcelo Lima" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Marcelo Lima</h4>
                                        <p class="text-white/60 text-sm">Rio Branco, AC</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Material didático excelente! Já fiz R$ 2.600 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 28 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/28.jpg" alt="Luciana Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Luciana Costa</h4>
                                        <p class="text-white/60 text-sm">Joinville, SC</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito bem estruturado! Já consegui R$ 3.000 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 29 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/29.jpg" alt="André Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">André Oliveira</h4>
                                        <p class="text-white/60 text-sm">Londrina, PR</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"As dicas extras são fantásticas! Já resgatei R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 30 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/30.jpg" alt="Cristina Martins" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Cristina Martins</h4>
                                        <p class="text-white/60 text-sm">Ribeirão Preto, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Resultados surpreendentes! Já fiz R$ 3.200 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 31 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/31.jpg" alt="Leonardo Souza" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Leonardo Souza</h4>
                                        <p class="text-white/60 text-sm">Guarulhos, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Material completo e atualizado! Já fiz R$ 2.900 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 32 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Bianca Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Bianca Oliveira</h4>
                                        <p class="text-white/60 text-sm">São Bernardo do Campo, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Grupo muito organizado! Já resgatei R$ 2.600 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 33 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Henrique Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Henrique Santos</h4>
                                        <p class="text-white/60 text-sm">Contagem, MG</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito bem explicado! Já consegui R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 34 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/34.jpg" alt="Juliana Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Juliana Costa</h4>
                                        <p class="text-white/60 text-sm">Diadema, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Suporte sempre presente! Já fiz R$ 2.400 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 35 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="Fábio Almeida" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Fábio Almeida</h4>
                                        <p class="text-white/60 text-sm">Jundiaí, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Conteúdo excepcional! Já resgatei R$ 3.100 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 36 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/36.jpg" alt="Camila Rodrigues" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Camila Rodrigues</h4>
                                        <p class="text-white/60 text-sm">Piracicaba, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito profissional! Já consegui R$ 2.800 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 37 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/37.jpg" alt="Marcelo Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Marcelo Santos</h4>
                                        <p class="text-white/60 text-sm">Bauru, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Planilha muito eficiente! Já fiz R$ 2.500 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 38 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/38.jpg" alt="Renata Silva" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Renata Silva</h4>
                                        <p class="text-white/60 text-sm">São José do Rio Preto, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito seguro! Já resgatei R$ 2.900 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 39 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/39.jpg" alt="Fernando Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Fernando Costa</h4>
                                        <p class="text-white/60 text-sm">Franca, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Comunidade muito unida! Já fiz R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 40 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/40.jpg" alt="Patricia Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Patricia Oliveira</h4>
                                        <p class="text-white/60 text-sm">Presidente Prudente, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Melhor investimento! Já consegui R$ 3.200 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 41 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Leonardo Souza" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Leonardo Souza</h4>
                                        <p class="text-white/60 text-sm">Guarulhos, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Material completo e atualizado! Já fiz R$ 2.900 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 42 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/42.jpg" alt="Bianca Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Bianca Oliveira</h4>
                                        <p class="text-white/60 text-sm">São Bernardo do Campo, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Grupo muito organizado! Já resgatei R$ 2.600 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 43 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/43.jpg" alt="Henrique Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Henrique Santos</h4>
                                        <p class="text-white/60 text-sm">Contagem, MG</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito bem explicado! Já consegui R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 44 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Juliana Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Juliana Costa</h4>
                                        <p class="text-white/60 text-sm">Diadema, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Suporte sempre presente! Já fiz R$ 2.400 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 45 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Fábio Almeida" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Fábio Almeida</h4>
                                        <p class="text-white/60 text-sm">Jundiaí, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Conteúdo excepcional! Já resgatei R$ 3.100 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 46 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/46.jpg" alt="Camila Rodrigues" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Camila Rodrigues</h4>
                                        <p class="text-white/60 text-sm">Piracicaba, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito profissional! Já consegui R$ 2.800 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 47 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/47.jpg" alt="Marcelo Santos" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Marcelo Santos</h4>
                                        <p class="text-white/60 text-sm">Bauru, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Planilha muito eficiente! Já fiz R$ 2.500 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 48 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/48.jpg" alt="Renata Silva" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Renata Silva</h4>
                                        <p class="text-white/60 text-sm">São José do Rio Preto, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Método muito seguro! Já resgatei R$ 2.900 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 49 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/men/49.jpg" alt="Fernando Costa" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Fernando Costa</h4>
                                        <p class="text-white/60 text-sm">Franca, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Comunidade muito unida! Já fiz R$ 2.700 em três meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>

                        <!-- Depoimento 50 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-6 h-full bg-opacity-50 backdrop-blur-lg">
                                <div class="flex items-center mb-4">
                                    <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="Patricia Oliveira" class="w-14 h-14 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-lg font-bold neon-text">Patricia Oliveira</h4>
                                        <p class="text-white/60 text-sm">Presidente Prudente, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 text-sm mb-4 text-left">"Melhor investimento! Já consegui R$ 3.200 em quatro meses!"</p>
                                <div class="flex text-[#00f2fe]">★★★★★</div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>

        <!-- Seção de Resultados -->
        <section class="py-32 bg-darker/50">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-16">
                        <span class="text-white">Crescimento</span>
                        <span class="neon-text">Médio de Renda</span>
                        <span class="text-white">dos Alunos</span>
                    </h2>
                    
                    <!-- Container do Gráfico -->
                    <div class="neon-box p-8 mb-16">
                        <canvas id="crescimentoChart" class="w-full" height="300"></canvas>
                    </div>

                    <!-- Cards de Estatísticas -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="neon-box p-8 text-center">
                            <h3 class="text-5xl font-bold neon-text mb-4">90%</h3>
                            <p class="text-white/80">dos alunos começam a ver resultados no primeiro mês</p>
                        </div>
                        <div class="neon-box p-8 text-center">
                            <h3 class="text-5xl font-bold neon-text mb-4">R$1.500+</h3>
                            <p class="text-white/80">média de ganhos mensais extras</p>
                        </div>
                        <div class="neon-box p-8 text-center">
                            <h3 class="text-5xl font-bold neon-text mb-4">100%</h3>
                            <p class="text-white/80">garantia de satisfação em 7 dias</p>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Inicialização do gráfico quando a página carregar
                window.addEventListener('load', () => {
                    const ctx = document.getElementById('crescimentoChart').getContext('2d');
                    
                    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
                    gradient.addColorStop(0, 'rgba(0, 242, 254, 0.5)');
                    gradient.addColorStop(1, 'rgba(0, 242, 254, 0.0)');

                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: ['Mês 1', 'Mês 2', 'Mês 3', 'Mês 4', 'Mês 5', 'Mês 6'],
                            datasets: [{
                                label: 'Ganhos Mensais (R$)',
                                data: [500, 800, 1200, 1500, 1800, 2000],
                                borderColor: '#00f2fe',
                                borderWidth: 4,
                                tension: 0.4,
                                fill: true,
                                backgroundColor: gradient,
                                pointBackgroundColor: '#00f2fe',
                                pointBorderColor: '#00f2fe',
                                pointHoverBackgroundColor: '#fff',
                                pointHoverBorderColor: '#00f2fe',
                                pointRadius: 6,
                                pointHoverRadius: 8
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    grid: {
                                        color: 'rgba(255, 255, 255, 0.1)'
                                    },
                                    ticks: {
                                        color: 'rgba(255, 255, 255, 0.7)',
                                        callback: function(value) {
                                            return 'R$ ' + value;
                                        }
                                    }
                                },
                                x: {
                                    grid: {
                                        color: 'rgba(255, 255, 255, 0.1)'
                                    },
                                    ticks: {
                                        color: 'rgba(255, 255, 255, 0.7)'
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-32">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20">
                    <span class="title-highlight">Dúvidas</span> Frequentes
                </h2>

                <div class="max-w-3xl mx-auto space-y-6" x-data="{ activeTab: null }">
                    <!-- Pergunta 1 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 1 ? null : 1">
                            <span class="font-poppins font-bold text-white/90">É realmente possível ganhar dinheiro sem investir?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 1 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 1"
                             x-transition
                             x-cloak>
                            <p>Sim! As casas de apostas oferecem bônus de boas-vindas generosos para novos usuários. Nosso método ensina como aproveitar esses bônus de forma organizada e segura, sem precisar investir seu próprio dinheiro.</p>
                        </div>
                    </div>

                    <!-- Pergunta 2 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 2 ? null : 2">
                            <span class="font-poppins font-bold text-white/90">Quanto tempo preciso dedicar por dia?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 2 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 2"
                             x-transition
                             x-cloak>
                            <p>Com apenas 1 hora por dia você consegue aplicar o método. Nossa planilha automatizada facilita todo o processo, tornando a gestão dos bônus simples e rápida.</p>
                        </div>
                    </div>

                    <!-- Pergunta 3 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 3 ? null : 3">
                            <span class="font-poppins font-bold text-white/90">Preciso entender de apostas esportivas?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 3 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 3"
                             x-transition
                             x-cloak>
                            <p>Não! O método não depende de conhecimento em apostas. Ensinamos exatamente o que você precisa fazer, passo a passo, mesmo que nunca tenha feito uma aposta na vida.</p>
                        </div>
                    </div>

                    <!-- Pergunta 4 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 4 ? null : 4">
                            <span class="font-poppins font-bold text-white/90">Isso é legal?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 4 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 4"
                             x-transition
                             x-cloak>
                            <p>Totalmente legal! Trabalhamos apenas com casas de apostas licenciadas e utilizamos os bônus oficiais oferecidos por elas. Não há nada ilegal ou irregular no método.</p>
                        </div>
                    </div>

                    <!-- Pergunta 5 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 5 ? null : 5">
                            <span class="font-poppins font-bold text-white/90">Quanto tempo tenho de acesso ao curso?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 5 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 5"
                             x-transition
                             x-cloak>
                            <p>Acesso vitalício! Uma vez que você adquire o curso, tem acesso permanente a todo o conteúdo, incluindo atualizações futuras.</p>
                        </div>
                    </div>

                    <!-- Pergunta 6 -->
                    <div class="neon-box overflow-hidden">
                        <button class="w-full px-8 py-6 text-left flex justify-between items-center hover:text-[#00f2fe] transition-colors"
                                @click="activeTab = activeTab === 6 ? null : 6">
                            <span class="font-poppins font-bold text-white/90">E se eu não gostar do método?</span>
                            <svg class="w-6 h-6 transform transition-transform" 
                                 :class="{ 'rotate-180': activeTab === 6 }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="px-8 pb-6 text-white/80"
                             x-show="activeTab === 6"
                             x-transition
                             x-cloak>
                            <p>Oferecemos garantia de 7 dias! Se você não gostar do método ou achar que não é para você, devolvemos 100% do seu dinheiro, sem questionamentos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Final -->
        <section class="py-32 bg-darker/50">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-4xl md:text-6xl font-poppins font-bold mb-8">
                        <span class="neon-text">Comece Agora</span>
                    </h2>
                    <p class="text-xl text-white/80 mb-12">
                        Por apenas <span class="neon-text font-bold">R$ 97,00</span> você terá acesso ao método completo.
                    </p>
                    <button class="neon-button px-12 py-6 rounded-full text-xl font-bold">
                        Quero começar agora mesmo
                    </button>
                    <p class="mt-6 text-sm text-white/60">
                        🔒 Pagamento 100% seguro • Garantia de 7 dias • Acesso imediato
                    </p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 border-t border-purple-500/10">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                    <div>
                        <h3 class="text-xl font-poppins font-bold neon-text mb-4">MQS</h3>
                        <p class="text-white/60">Método Que Sobra - Transformando bônus em renda extra.</p>
                    </div>
                    <div class="flex gap-6">
                        <a href="#" class="text-white/60 hover:text-[#00f2fe] transition-colors">Termos de Uso</a>
                        <a href="#" class="text-white/60 hover:text-[#00f2fe] transition-colors">Política de Privacidade</a>
                        <a href="#" class="text-white/60 hover:text-[#00f2fe] transition-colors">Suporte</a>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-purple-500/10 text-center text-white/60 text-sm">
                    © 2024 MQS. Todos os direitos reservados.
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Alpine.js para o FAQ
        document.addEventListener('alpine:init', () => {
            Alpine.data('faq', () => ({
                activeTab: null
            }))
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero Content Animation
        gsap.to('.hero-content', {
            opacity: 1,
            y: 0,
            duration: 0.5,
            ease: 'power3.out'
        });

        // Parallax Effect
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX / window.innerWidth - 0.5;
            const mouseY = e.clientY / window.innerHeight - 0.5;

            gsap.to('.card-3d', {
                rotationY: mouseX * 10,
                rotationX: -mouseY * 10,
                duration: 0.5,
                ease: 'power2.out'
            });

            // Adicionar efeito parallax no background
            gsap.to('.animated-background', {
                backgroundPosition: `${mouseX * 20}% ${mouseY * 20}%`,
                duration: 1,
                ease: 'power2.out'
            });
        });

        // Inicialização do Swiper
        const swiper = new Swiper('.depoimentosSwiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: false,
            loop: true,
            speed: 500,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    centeredSlides: false
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            }
        });
    </script>
</body>
</html> 