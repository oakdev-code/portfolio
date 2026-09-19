<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oakdev — Lucas Carvalho. Desenvolvedor Full Stack, especialista em IA aplicada, automação e implantação de sistemas.">
    <meta name="author" content="Lucas Carvalho — Oakdev">
    <meta name="theme-color" content="#0b090a">
    <link rel="canonical" href="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Oakdev | Lucas Carvalho">
    <meta property="og:description" content="Sistemas, automação e tecnologia para operações reais.">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:image" content="{{ asset('images/oakdev-social-card.svg') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Oakdev | Lucas Carvalho">
    <meta name="twitter:description" content="Sistemas, automação e tecnologia para operações reais.">
    <meta name="twitter:image" content="{{ asset('images/oakdev-social-card.svg') }}">
    <title>Oakdev | Lucas Carvalho</title>
    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @php
        $structuredData = json_encode([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => 'Lucas Carvalho',
            'alternateName' => 'Oakdev',
            'url' => config('app.url'),
            'sameAs' => [
                'https://github.com/oakdev-code',
                'https://www.linkedin.com/in/lucas-carvalho-726b97165/',
            ],
            'jobTitle' => 'Analista de Sistemas e Desenvolvedor Full Stack',
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    @endphp
    <script type="application/ld+json">{!! $structuredData !!}</script>
    <style>
        :root { --bg:#0b090a; --surface:#171113; --surface-2:#211619; --text:#fff5f5; --muted:#c1abad; --line:#3a2025; --red:#f04452; --red-dark:#9f2635; --rose:#ff7a86; }
        * { box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        body { margin:0; background:var(--bg); color:var(--text); font-family:Manrope, sans-serif; line-height:1.6; }
        a { color:inherit; text-decoration:none; }
        :focus-visible { outline:2px solid var(--rose); outline-offset:4px; }
        .skip-link { position:absolute; left:16px; top:-60px; z-index:10; background:var(--red); color:#fff; padding:10px 14px; border-radius:6px; font-weight:700; }
        .skip-link:focus { top:16px; }
        .container { width:min(1120px, calc(100% - 40px)); margin:auto; }
        .nav { display:flex; justify-content:space-between; align-items:center; padding:28px 0; }
        .brand { font-family:"DM Mono", monospace; font-size:15px; color:var(--rose); }
        .brand img { display:block; width:178px; height:auto; }
        .nav-links { display:flex; gap:25px; color:var(--muted); font-size:14px; }
        .nav-links a:hover { color:var(--text); }
        .menu-toggle { display:none; border:1px solid var(--line); background:var(--surface); color:var(--text); border-radius:7px; padding:9px 12px; font:500 13px "DM Mono", monospace; cursor:pointer; }
        .hero { min-height:680px; display:grid; grid-template-columns:1.2fr .8fr; align-items:center; gap:70px; position:relative; }
        .hero::before { content:""; position:absolute; inset:10% 0 auto; height:1px; background:linear-gradient(90deg, transparent, var(--line), transparent); opacity:.7; }
        .eyebrow { color:var(--rose); font:500 13px "DM Mono", monospace; letter-spacing:.08em; text-transform:uppercase; }
        h1 { font-size:clamp(46px, 7vw, 84px); line-height:1.02; letter-spacing:-.06em; margin:20px 0 24px; max-width:750px; }
        h1 span { color:var(--red); }
        #dynamic-title { display:inline-block; transition:opacity .22s ease; }
        .lead { color:var(--muted); font-size:19px; max-width:650px; }
        .actions { display:flex; flex-wrap:wrap; gap:14px; margin-top:34px; }
        .button { border:1px solid var(--line); border-radius:8px; padding:13px 18px; font-weight:700; font-size:14px; }
        .button.primary { background:var(--red); border-color:var(--red); color:#fff; }
        .button:hover { transform:translateY(-3px); box-shadow:0 10px 25px #f0445233; }
        .profile-card { background:#100c0d; border:1px solid var(--line); border-radius:14px; padding:25px; box-shadow:0 25px 80px #0008; animation:float 5s ease-in-out infinite; }
        .profile-card::after { content:""; display:block; height:2px; width:48%; margin-top:24px; background:linear-gradient(90deg, var(--red), transparent); }
        .profile-photo { width:118px; height:118px; object-fit:cover; object-position:center; border-radius:50%; border:3px solid var(--red); box-shadow:0 0 0 6px #f0445218; margin-bottom:16px; background:#241016; }
        .profile-heading { color:var(--rose); font:500 12px "DM Mono", monospace; letter-spacing:.1em; text-transform:uppercase; }
        .profile-name { font-size:27px; font-weight:800; margin:13px 0 18px; }
        .profile-copy { color:var(--muted); font-size:15px; margin:0; }
        .profile-list { list-style:none; padding:0; margin:22px 0 0; display:grid; gap:11px; }
        .profile-list li { color:#eadde0; font:13px "DM Mono", monospace; }
        .profile-list li::before { content:"+"; color:var(--red); margin-right:10px; }
        .terminal-top { display:flex; gap:7px; margin-bottom:22px; }
        .dot { width:9px; height:9px; border-radius:50%; background:#ef767a; } .dot:nth-child(2){background:#f6c453}.dot:nth-child(3){background:var(--red)}
        .prompt { color:var(--rose); } .value { color:#fff5f5; }
        section { padding:90px 0; border-top:1px solid #ffffff0b; }
        .section-label { color:var(--rose); font:500 12px "DM Mono", monospace; text-transform:uppercase; letter-spacing:.1em; }
        h2 { font-size:clamp(30px, 4vw, 48px); letter-spacing:-.04em; margin:14px 0 18px; }
        .section-intro { color:var(--muted); max-width:700px; margin-bottom:38px; }
        .grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
        .card { background:var(--surface); border:1px solid var(--line); border-radius:12px; padding:25px; transition:transform .25s ease, border-color .25s ease, background .25s ease; }
        .card:hover { transform:translateY(-7px); border-color:var(--red-dark); background:var(--surface-2); }
        .card h3 { margin:0 0 10px; font-size:19px; } .card p { color:var(--muted); margin:0; font-size:15px; }
        .icon { color:var(--red); font:22px "DM Mono", monospace; margin-bottom:20px; }
        .stack { display:flex; flex-wrap:wrap; gap:10px; }
        .compact-stack { margin-top:34px; padding-top:22px; border-top:1px solid var(--line); }
        .stack-label { display:block; color:var(--muted); font-size:13px; margin-bottom:12px; }
        .tag { border:1px solid var(--line); border-radius:999px; color:#c9d7e8; padding:8px 13px; font:13px "DM Mono", monospace; background:var(--surface); }
        .case { display:flex; flex-direction:column; justify-content:space-between; min-height:220px; }
        .case-label { color:var(--rose); font:12px "DM Mono", monospace; text-transform:uppercase; }
        .demo-section { background:#100c0d; }
        .demo-card { min-height:210px; }
        .demo-result { display:block; color:var(--red); font:500 clamp(26px, 3.4vw, 40px) "DM Mono", monospace; line-height:1.15; margin:16px 0 10px; }
        .signal-bar { display:grid; grid-template-columns:repeat(4,1fr); border:1px solid var(--line); border-radius:12px; background:var(--surface); margin-top:-38px; position:relative; z-index:2; }
        .signal { padding:18px 20px; border-right:1px solid var(--line); }
        .signal:last-child { border-right:0; }
        .signal strong { display:block; font:500 22px "DM Mono", monospace; color:var(--text); }
        .signal span { color:var(--muted); font-size:12px; }
        .service-grid { display:grid; grid-template-columns:1.3fr .7fr .7fr; gap:18px; }
        .service-card { min-height:270px; display:flex; flex-direction:column; justify-content:space-between; }
        .service-card.featured { background:linear-gradient(145deg, var(--surface-2), #35151c); }
        .service-number { font:13px "DM Mono", monospace; color:var(--red); }
        .process { display:grid; grid-template-columns:repeat(4,1fr); gap:0; border-top:1px solid var(--line); }
        .process-step { padding:22px 22px 0 0; border-right:1px solid var(--line); margin-right:22px; }
        .process-step:last-child { border-right:0; margin-right:0; }
        .process-step strong { display:block; margin:10px 0 6px; }
        .process-step p { color:var(--muted); font-size:14px; margin:0; }
        .availability { display:inline-flex; align-items:center; gap:8px; color:var(--muted); font:12px "DM Mono", monospace; margin-top:25px; }
        .availability::before { content:""; width:8px; height:8px; border-radius:50%; background:#55d68a; box-shadow:0 0 0 5px #55d68a18; }
        .contact { background:linear-gradient(135deg,var(--surface),#32151c); border:1px solid var(--line); border-radius:16px; padding:42px; display:flex; justify-content:space-between; align-items:center; gap:30px; }
        footer { padding:28px 0 45px; display:flex; justify-content:space-between; color:var(--muted); font-size:13px; }
        .orb { position:absolute; width:420px; height:420px; border-radius:50%; background:radial-gradient(circle, #f044521f, transparent 68%); top:35px; right:-130px; pointer-events:none; animation:pulse 6s ease-in-out infinite; }
        .reveal { opacity:0; transform:translateY(24px); transition:opacity .7s ease, transform .7s ease; }
        .reveal.visible { opacity:1; transform:none; }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior:auto; } *, *::before, *::after { animation-duration:.01ms !important; animation-iteration-count:1 !important; scroll-behavior:auto !important; transition-duration:.01ms !important; } .reveal { opacity:1; transform:none; } }
        @keyframes float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-9px); } }
        @keyframes pulse { 0%,100% { transform:scale(1); opacity:.7; } 50% { transform:scale(1.15); opacity:1; } }
        @media (max-width:760px) { .nav { padding:20px 0; } .brand img { width:150px; } .menu-toggle { display:block; } .nav-links { display:none; position:absolute; left:20px; right:20px; top:76px; z-index:5; flex-direction:column; gap:0; padding:8px; background:var(--surface); border:1px solid var(--line); border-radius:10px; box-shadow:0 18px 45px #0009; } .nav-links.open { display:flex; } .nav-links a { padding:12px; border-radius:6px; } .nav-links a:hover { background:var(--surface-2); } .hero { grid-template-columns:1fr; min-height:auto; padding:65px 0 90px; gap:45px; } .grid,.service-grid { grid-template-columns:1fr; } .signal-bar,.process { grid-template-columns:1fr 1fr; } .signal:nth-child(2) { border-right:0; } .signal:nth-child(-n+2) { border-bottom:1px solid var(--line); } .process-step { border-right:0; border-bottom:1px solid var(--line); padding-bottom:20px; margin-right:0; } .contact, footer { flex-direction:column; align-items:flex-start; } .contact { padding:28px; } .contact .button { width:100%; text-align:center; } section { padding:65px 0; } }
        @media (max-width:420px) { .container { width:min(100% - 28px, 1120px); } h1 { font-size:clamp(42px, 14vw, 58px); } .signal strong { font-size:18px; } .signal { padding:15px 12px; } }
    </style>
</head>
<body>
<a class="skip-link" href="#conteudo">Pular para o conteúdo</a>
<header class="container nav">
    <a class="brand" href="/" aria-label="Oakdev — Lucas Carvalho"><img src="{{ asset('images/oakdev-logo.svg') }}" alt="Oakdev"></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="menu-principal">Menu</button>
    <nav id="menu-principal" class="nav-links" aria-label="Navegação principal">
        <a href="#solucoes">Soluções</a><a href="#processo">Método</a><a href="#cases">Experiência</a><a href="#contato">Contato</a>
    </nav>
</header>

<main id="conteudo">
    <section class="container hero">
        <div class="orb"></div>
        <div>
            <div class="eyebrow">Oakdev · Lucas Carvalho</div>
            <h1>Transformo ideias em <span id="dynamic-title" aria-live="polite">soluções que funcionam.</span></h1>
            <p class="lead">Sou Lucas Carvalho, analista de sistemas. Desenvolvo produtos digitais, automações e integrações que ajudam negócios a sair do improviso e evoluir com mais clareza.</p>
            <div class="availability">Disponível para projetos selecionados</div>
            <div class="actions">
                <a class="button primary" href="#contato">Vamos conversar →</a>
                <a class="button" href="https://github.com/oakdev-code" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                <a class="button" href="https://www.linkedin.com/in/lucas-carvalho-726b97165/" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
            </div>
        </div>
        <div class="profile-card" aria-label="Resumo profissional">
            <img class="profile-photo" src="{{ asset('images/oakdev-profile.jpg') }}" alt="Oakdev — Lucas Carvalho">
            <div class="profile-heading">Quem está por trás da Oakdev</div>
            <div class="profile-name">Lucas Carvalho</div>
            <p class="profile-copy">Entendo o objetivo do negócio antes de escolher a tecnologia. Meu foco é transformar ideias, gargalos e oportunidades em soluções que as pessoas consigam usar e evoluir.</p>
            <ul class="profile-list">
                <li>Produtos digitais e plataformas</li>
                <li>Automação de tarefas e fluxos</li>
                <li>Integração de dados e serviços</li>
                <li>Implantação e evolução contínua</li>
            </ul>
        </div>
    </section>
    <div class="container signal-bar reveal" aria-label="Resumo profissional">
        <div class="signal"><strong>7+</strong><span>anos de experiência</span></div>
        <div class="signal"><strong>Full stack</strong><span>do problema à produção</span></div>
        <div class="signal"><strong>IA + código</strong><span>automação com propósito</span></div>
        <div class="signal"><strong>Produção</strong><span>implantação e sustentação</span></div>
    </div>

    <section id="solucoes" class="reveal">
        <div class="container">
            <div class="section-label">01 / soluções</div>
            <h2>O que posso criar<br>com você.</h2>
            <p class="section-intro">Você não precisa chegar com a solução pronta. Conte o objetivo e eu ajudo a transformar a ideia em algo claro, utilizável e possível de evoluir.</p>
            <div class="grid">
                <article class="card"><div class="icon">01</div><h3>Sites e landing pages</h3><p>Presença profissional para apresentar serviços, divulgar uma oferta ou transformar visitas em conversas.</p></article>
                <article class="card"><div class="icon">02</div><h3>Produtos e plataformas</h3><p>Portais, áreas de membros e aplicações web para entregar conteúdo, serviço ou uma experiência digital.</p></article>
                <article class="card"><div class="icon">03</div><h3>Sistemas sob medida</h3><p>Ferramentas para organizar clientes, tarefas, pedidos, agenda ou qualquer rotina que dependa de controles espalhados.</p></article>
                <article class="card"><div class="icon">04</div><h3>Automação e IA</h3><p>Fluxos inteligentes para reduzir trabalho repetitivo, apoiar equipes e criar novas formas de entregar valor.</p></article>
                <article class="card"><div class="icon">05</div><h3>Integrações</h3><p>Conexões entre APIs, pagamentos, CRM, e-mail, WhatsApp e outras ferramentas que já fazem parte do negócio.</p></article>
                <article class="card"><div class="icon">06</div><h3>Painéis e dados</h3><p>Dashboards para reunir informações importantes e facilitar o acompanhamento e a tomada de decisão.</p></article>
            </div>
            <div class="compact-stack">
                <span class="stack-label">Ferramentas que podem entrar no projeto</span>
                <div class="stack">
                    @foreach (['PHP', 'Laravel', 'JavaScript', 'SQL', 'Docker', 'REST APIs', 'Git & GitHub', 'Claude Code', 'Gemini', 'ChatGPT', 'Skills & Agents'] as $technology)
                        <span class="tag">{{ $technology }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="processo" class="reveal">
        <div class="container">
            <div class="section-label">02 / método Oakdev</div>
            <h2>Da ideia ao próximo passo.</h2>
            <div class="process">
                <div class="process-step"><span class="service-number">01</span><strong>Entender</strong><p>Conversar sobre o objetivo, o público e o problema que precisa ser resolvido.</p></div>
                <div class="process-step"><span class="service-number">02</span><strong>Desenhar</strong><p>Definir uma solução possível, começando pelo que traz clareza e utilidade primeiro.</p></div>
                <div class="process-step"><span class="service-number">03</span><strong>Construir</strong><p>Desenvolver, testar e explicar a solução para que ela possa continuar evoluindo.</p></div>
                <div class="process-step"><span class="service-number">04</span><strong>Entregar</strong><p>Colocar em uso, observar a rotina e medir o que pode ser melhorado.</p></div>
            </div>
        </div>
    </section>

    <section id="cases" class="reveal">
        <div class="container">
            <div class="section-label">03 / experiência</div>
            <h2>Cases e frentes de trabalho.</h2>
            <p class="section-intro">Nem todo projeto pode ser publicado. Ainda assim, é possível explicar o tipo de problema, a solução construída e como o trabalho melhora a operação sem expor informações sensíveis.</p>
            <div class="grid">
                <article class="card case"><div><div class="case-label">Case confidencial · operações</div><h3>Informação para decisões melhores</h3><p>Integrações para conectar etapas de uma operação, reduzir consultas espalhadas e apoiar decisões do dia a dia em diferentes contextos de negócio.</p></div><span class="tag">Integração · produção</span></article>
                <article class="card case"><div><div class="case-label">Projeto pessoal · em construção</div><h3>Portfolio CMS</h3><p>Uma base em Laravel para organizar projetos, serviços e conteúdo em um só lugar, facilitando futuras atualizações do portfólio.</p></div><span class="tag">Laravel</span></article>
                <article class="card case"><div><div class="case-label">Projeto pessoal · em construção</div><h3>Workspace Orchestrator</h3><p>Uma ferramenta que organiza o contexto de cada projeto para reduzir informações repetidas e orientar melhor o trabalho com agentes de IA.</p></div><span class="tag">IA · TypeScript</span></article>
            </div>
        </div>
    </section>

    @if (app()->environment('local'))
        <section id="previa-local" class="reveal demo-section">
            <div class="container">
                <div class="section-label">prévia local · dados fictícios</div>
                <h2>Como os resultados podem aparecer.</h2>
                <p class="section-intro">Esta área existe somente no ambiente local para testar a apresentação de cases. Os exemplos abaixo são fictícios e não são publicados.</p>
                <div class="grid">
                    <article class="card demo-card">
                        <div class="case-label">Demonstração · rotina administrativa</div>
                        <strong class="demo-result">De 2h para 15min</strong>
                        <h3>Conferência diária de pedidos</h3>
                        <p>Antes, a equipe conferia dados manualmente em três planilhas. Um fluxo integrado passou a reunir as informações e sinalizar apenas as divergências.</p>
                    </article>
                    <article class="card demo-card">
                        <div class="case-label">Demonstração · integração de sistemas</div>
                        <strong class="demo-result">Uma visão só</strong>
                        <h3>Status da operação em tempo real</h3>
                        <p>Antes, cada área consultava um sistema diferente. A integração reuniu pedidos, estoque e entregas em um único painel para a tomada de decisão.</p>
                    </article>
                    <article class="card demo-card">
                        <div class="case-label">Demonstração · implantação</div>
                        <strong class="demo-result">Primeira entrega em 3 semanas</strong>
                        <h3>Projeto saindo do papel</h3>
                        <p>O trabalho começou com um escopo pequeno e utilizável. A equipe pôde testar a solução cedo, corrigir o necessário e evoluir com mais segurança.</p>
                    </article>
                </div>
            </div>
        </section>
    @endif

    <section id="contato" class="reveal">
        <div class="container contact">
            <div>            <div class="section-label">04 / contato</div><h2>Vamos tirar sua ideia do papel.</h2><p class="section-intro">Conte o que você quer criar, melhorar ou automatizar. A primeira conversa serve para entender o cenário e identificar um próximo passo possível.</p></div>
            <a class="button primary" href="mailto:luccaosilva10@gmail.com">luccaosilva10@gmail.com ↗</a>
        </div>
    </section>
</main>
<footer class="container"><span>© {{ date('Y') }} Oakdev · Lucas Carvalho</span><span>Construído com Laravel · Docker em breve</span></footer>
<script>
    const phrases = ['soluções que funcionam.', 'produtos que geram valor.', 'ideias prontas para evoluir.'];
    const dynamicTitle = document.getElementById('dynamic-title');
    let phraseIndex = 0;
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        setInterval(() => {
            phraseIndex = (phraseIndex + 1) % phrases.length;
            dynamicTitle.style.opacity = '0';
            setTimeout(() => {
                dynamicTitle.textContent = phrases[phraseIndex];
                dynamicTitle.style.opacity = '1';
            }, 220);
        }, 3200);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));

    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.getElementById('menu-principal');
    menuToggle.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
    });
    menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
        menu.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
    }));
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menu.classList.contains('open')) {
            menu.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.focus();
        }
    });
</script>
</body>
</html>
