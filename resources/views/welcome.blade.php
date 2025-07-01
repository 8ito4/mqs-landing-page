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
                linear-gradient(rgba(0, 242, 254, 0.12) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 242, 254, 0.12) 1px, transparent 1px);
            background-size: 40px 40px;
            z-index: 1;
            opacity: 0.4;
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
                            <!-- Conteúdo do placeholder -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-20 h-20 text-[#00f2fe]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
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
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20 fade-up">
                    <span class="neon-text">Como</span> funciona
                </h2>

                <div class="max-w-4xl mx-auto mb-20 fade-up">
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
                <div class="title-container fade-up">
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
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20 fade-up">
                    <span class="text-white">Quem já está</span>
                    <span class="neon-text">lucrando</span>
                </h2>

                <!-- Swiper -->
                <div class="swiper depoimentosSwiper max-w-6xl mx-auto fade-up">
                    <div class="swiper-wrapper pb-12">
                        <!-- Depoimento 1 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-8 h-full">
                                <div class="flex items-center mb-6">
                                    <img src="https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg" alt="João Silva" class="w-16 h-16 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-xl font-bold neon-text">João Silva</h4>
                                        <p class="text-white/60">São Paulo, SP</p>
                                    </div>
                                </div>
                                <p class="text-white/80 mb-4">"Comecei há 2 meses e já recuperei mais de R$ 2.000 em bônus. O método é muito mais simples do que eu imaginava!"</p>
                                <div class="flex items-center">
                                    <div class="flex text-[#00f2fe]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Depoimento 2 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-8 h-full">
                                <div class="flex items-center mb-6">
                                    <img src="https://api.uifaces.co/our-content/donated/FJkaAKYh.jpg" alt="Maria Santos" class="w-16 h-16 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-xl font-bold neon-text">Maria Santos</h4>
                                        <p class="text-white/60">Rio de Janeiro, RJ</p>
                                    </div>
                                </div>
                                <p class="text-white/80 mb-4">"Incrível como o método é organizado. Em 3 meses já consegui mais de R$ 4.000 em bônus. Recomendo muito!"</p>
                                <div class="flex items-center">
                                    <div class="flex text-[#00f2fe]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Depoimento 3 -->
                        <div class="swiper-slide">
                            <div class="neon-box p-8 h-full">
                                <div class="flex items-center mb-6">
                                    <img src="https://api.uifaces.co/our-content/donated/n4Ngwvi7.jpg" alt="Carlos Oliveira" class="w-16 h-16 rounded-full object-cover mr-4">
                                    <div>
                                        <h4 class="text-xl font-bold neon-text">Carlos Oliveira</h4>
                                        <p class="text-white/60">Belo Horizonte, MG</p>
                                    </div>
                                </div>
                                <p class="text-white/80 mb-4">"A planilha automatizada é sensacional! Facilita muito o controle dos bônus. Já fiz R$ 1.800 no primeiro mês."</p>
                                <div class="flex items-center">
                                    <div class="flex text-[#00f2fe]">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section id="faq" class="py-32">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl md:text-6xl font-poppins font-bold text-center mb-20 fade-up">
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
                <div class="max-w-4xl mx-auto text-center fade-up">
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
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-poppins font-bold neon-text mb-4">MQS</h3>
                        <p class="text-white/60">Método Que Sobra - Transformando bônus em renda extra.</p>
                    </div>
                    <div class="md:text-right">
                        <div class="space-x-6">
                            <a href="#" class="text-white/60 hover:text-purple-400 transition-colors">Termos de Uso</a>
                            <a href="#" class="text-white/60 hover:text-purple-400 transition-colors">Política de Privacidade</a>
                            <a href="#" class="text-white/60 hover:text-purple-400 transition-colors">Suporte</a>
                        </div>
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
            duration: 1,
            ease: 'power3.out'
        });

        // Animações de Scroll
        const fadeUpElements = gsap.utils.toArray('.fade-up');
        fadeUpElements.forEach(element => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 50,
                duration: 1,
                ease: 'power3.out'
            });
        });

        // Timeline para a seção "Como Funciona"
        const timelineItems = gsap.utils.toArray('.space-y-12 > div');
        timelineItems.forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                x: -50,
                duration: 0.8,
                delay: i * 0.2,
                ease: 'power3.out'
            });
        });

        // Animação para os cards
        const cards = gsap.utils.toArray('.card-grid > div');
        cards.forEach((card, i) => {
            gsap.from(card, {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=100',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 30,
                duration: 0.8,
                delay: i * 0.2,
                ease: 'power3.out'
            });
        });

        // Animação para os itens do FAQ
        const faqItems = gsap.utils.toArray('.neon-box');
        faqItems.forEach((item, i) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: 'top bottom-=50',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 20,
                duration: 0.6,
                delay: i * 0.1,
                ease: 'power3.out'
            });
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
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                },
                1024: {
                    slidesPerView: 2.5,
                }
            },
            effect: 'coverflow',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: false,
            }
        });

        // Efeito de revelação suave ao scroll
        ScrollTrigger.batch('.fade-up', {
            start: 'top bottom-=100',
            toggleActions: 'play none none reverse',
            onEnter: batch => {
                gsap.to(batch, {
                    opacity: 1,
                    y: 0,
                    stagger: 0.15,
                    duration: 0.8,
                    ease: 'power3.out'
                });
            },
            onLeave: batch => {
                gsap.to(batch, {
                    opacity: 0,
                    y: 30,
                    stagger: 0.15,
                    duration: 0.8,
                    ease: 'power3.out'
                });
            }
        });
    </script>
</body>
</html> 