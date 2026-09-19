<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Oakdev — Lucas Carvalho. Desenvolvedor Full Stack, especialista em IA aplicada, automação e implantação de sistemas.">
    <title>Oakdev | Lucas Carvalho</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root { --bg:#0b090a; --surface:#171113; --surface-2:#211619; --text:#fff5f5; --muted:#c1abad; --line:#3a2025; --red:#f04452; --red-dark:#9f2635; --rose:#ff7a86; }
        * { box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        body { margin:0; background:var(--bg); color:var(--text); font-family:Manrope, sans-serif; line-height:1.6; }
        a { color:inherit; text-decoration:none; }
        .container { width:min(1120px, calc(100% - 40px)); margin:auto; }
        .nav { display:flex; justify-content:space-between; align-items:center; padding:28px 0; }
        .brand { font-family:"DM Mono", monospace; font-size:15px; color:var(--rose); }
        .nav-links { display:flex; gap:25px; color:var(--muted); font-size:14px; }
        .nav-links a:hover { color:var(--text); }
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
        .profile-photo { width:92px; height:92px; object-fit:cover; object-position:center; border-radius:50%; border:3px solid var(--red); box-shadow:0 0 0 6px #f0445218; margin-bottom:16px; }
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
        .tag { border:1px solid var(--line); border-radius:999px; color:#c9d7e8; padding:8px 13px; font:13px "DM Mono", monospace; background:var(--surface); }
        .case { display:flex; flex-direction:column; justify-content:space-between; min-height:220px; }
        .case-label { color:var(--rose); font:12px "DM Mono", monospace; text-transform:uppercase; }
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
        @keyframes float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-9px); } }
        @keyframes pulse { 0%,100% { transform:scale(1); opacity:.7; } 50% { transform:scale(1.15); opacity:1; } }
        @media (max-width:760px) { .nav-links { display:none; } .hero { grid-template-columns:1fr; min-height:auto; padding:65px 0 90px; gap:45px; } .grid,.service-grid { grid-template-columns:1fr; } .signal-bar,.process { grid-template-columns:1fr 1fr; } .signal:nth-child(2) { border-right:0; } .signal:nth-child(-n+2) { border-bottom:1px solid var(--line); } .process-step { border-right:0; border-bottom:1px solid var(--line); padding-bottom:20px; margin-right:0; } .contact, footer { flex-direction:column; align-items:flex-start; } section { padding:65px 0; } }
    </style>
</head>
<body>
<header class="container nav">
    <a class="brand" href="/">oakdev<span style="color:var(--muted)">();</span></a>
    <nav class="nav-links" aria-label="Navegação principal">
        <a href="#sobre">Sobre</a><a href="#servicos">Serviços</a><a href="#processo">Método</a><a href="#cases">Cases</a><a href="#contato">Contato</a>
    </nav>
</header>

<main>
    <section class="container hero">
        <div class="orb"></div>
        <div>
            <div class="eyebrow">Oakdev · Lucas Carvalho</div>
            <h1>Faço a operação <span id="dynamic-title">andar melhor.</span></h1>
            <p class="lead">Sou Lucas Carvalho, analista de sistemas com 7+ anos de experiência em desenvolvimento, integração, automação e implantação de soluções para operações reais.</p>
            <div class="availability">Disponível para projetos selecionados</div>
            <div class="actions">
                <a class="button primary" href="#contato">Vamos conversar →</a>
                <a class="button" href="https://github.com/oakdev-code" target="_blank" rel="noreferrer">GitHub ↗</a>
                <a class="button" href="https://www.linkedin.com/in/lucas-carvalho-726b97165/" target="_blank" rel="noreferrer">LinkedIn ↗</a>
            </div>
        </div>
        <div class="profile-card" aria-label="Resumo profissional">
            <img class="profile-photo" src="{{ asset('images/oakdev-profile.jpg') }}" alt="Oakdev — Lucas Carvalho">
            <div class="profile-heading">Quem está por trás da Oakdev</div>
            <div class="profile-name">Lucas Carvalho</div>
            <p class="profile-copy">Analista de sistemas, desenvolvedor e alguém que gosta de entender a operação antes de escolher a tecnologia.</p>
            <ul class="profile-list">
                <li>Desenvolvimento de sistemas e APIs</li>
                <li>Automação de processos</li>
                <li>Integração entre sistemas</li>
                <li>Implantação para clientes</li>
            </ul>
        </div>
    </section>
    <div class="container signal-bar reveal" aria-label="Resumo profissional">
        <div class="signal"><strong>7+</strong><span>anos de experiência</span></div>
        <div class="signal"><strong>Full stack</strong><span>do problema à produção</span></div>
        <div class="signal"><strong>IA + código</strong><span>automação com propósito</span></div>
        <div class="signal"><strong>Produção</strong><span>implantação e sustentação</span></div>
    </div>

    <section id="sobre" class="reveal">
        <div class="container">
            <div class="section-label">01 / sobre</div>
            <h2>Experiência aplicada,<br>não só teoria.</h2>
            <p class="section-intro">Atuo do entendimento do problema à entrega em produção: análise, desenvolvimento, integração, implantação e sustentação. Muitos projetos são corporativos e confidenciais; por isso, aqui apresento capacidades e cases sem expor código ou dados de clientes.</p>
            <div class="grid">
                <article class="card"><div class="icon">01</div><h3>Desenvolvimento</h3><p>Aplicações web, APIs e soluções full stack com foco em clareza, manutenção e valor para o negócio.</p></article>
                <article class="card"><div class="icon">02</div><h3>IA e automação</h3><p>Criação de skills, agents e workflows com Claude Code, Gemini, ChatGPT e ferramentas de produtividade.</p></article>
                <article class="card"><div class="icon">03</div><h3>Implantação</h3><p>Configuração, integração e entrega de sistemas em ambientes reais, com foco em estabilidade e operação.</p></article>
            </div>
        </div>
    </section>

    <section id="expertise" class="reveal">
        <div class="container">
            <div class="section-label">02 / expertise</div>
            <h2>Ferramentas para transformar<br>ideias em operação.</h2>
            <p class="section-intro">Uma stack pragmática para construir, testar, integrar e colocar soluções para funcionar.</p>
            <div class="stack">
                @foreach (['PHP', 'Laravel', 'JavaScript', 'HTML & CSS', 'SQL', 'Docker', 'REST APIs', 'Git & GitHub', 'Claude Code', 'Gemini', 'ChatGPT', 'Skills & Agents', 'Automação', 'Logística'] as $technology)
                    <span class="tag">{{ $technology }}</span>
                @endforeach
            </div>
        </div>
    </section>

    <section id="servicos" class="reveal">
        <div class="container">
            <div class="section-label">03 / como posso ajudar</div>
            <h2>Problema primeiro.<br>Tecnologia depois.</h2>
            <p class="section-intro">Não vendo uma tecnologia isolada. Entendo o processo, encontro o gargalo e construo uma solução que possa ser usada, mantida e evoluída.</p>
            <div class="service-grid">
                <article class="card service-card featured"><div><div class="service-number">01 — OPERAÇÃO</div><h3>Automação de processos</h3><p>Transformar tarefas repetitivas, planilhas e integrações manuais em fluxos confiáveis que economizam tempo da operação.</p></div><span class="tag">Processos → sistemas</span></article>
                <article class="card service-card"><div><div class="service-number">02 — SOFTWARE</div><h3>Sistemas e APIs</h3><p>Construção e evolução de aplicações web, integrações e APIs para problemas concretos de negócio.</p></div><span class="tag">Laravel · PHP</span></article>
                <article class="card service-card"><div><div class="service-number">03 — ENTREGA</div><h3>Implantação</h3><p>Configuração, publicação e sustentação para colocar a solução em funcionamento.</p></div><span class="tag">Ambiente real</span></article>
            </div>
        </div>
    </section>

    <section id="processo" class="reveal">
        <div class="container">
            <div class="section-label">04 / método Oakdev</div>
            <h2>Do caos ao próximo passo.</h2>
            <div class="process">
                <div class="process-step"><span class="service-number">01</span><strong>Entender</strong><p>Mapear o problema, a operação e o resultado esperado.</p></div>
                <div class="process-step"><span class="service-number">02</span><strong>Desenhar</strong><p>Escolher a solução mais simples que resolve de verdade.</p></div>
                <div class="process-step"><span class="service-number">03</span><strong>Construir</strong><p>Desenvolver com clareza, testes e contexto para evoluir.</p></div>
                <div class="process-step"><span class="service-number">04</span><strong>Entregar</strong><p>Implantar, acompanhar e melhorar com a operação.</p></div>
            </div>
        </div>
    </section>

    <section id="cases" class="reveal">
        <div class="container">
            <div class="section-label">05 / experiência</div>
            <h2>Cases e frentes de trabalho.</h2>
            <p class="section-intro">Projetos empresariais podem ser confidenciais. A experiência, os desafios e os resultados continuam podendo ser apresentados com responsabilidade.</p>
            <div class="grid">
                <article class="card case"><div><div class="case-label">Case confidencial · logística</div><h3>Operações integradas</h3><p>Desenvolvimento e sustentação de soluções para processos logísticos, integrações e eficiência operacional.</p></div><span class="tag">Produção</span></article>
                <article class="card case"><div><div class="case-label">Projeto pessoal · em construção</div><h3>Portfolio CMS</h3><p>Este portfólio está sendo construído com Laravel para publicar projetos, skills, serviços e conteúdo técnico.</p></div><span class="tag">Laravel</span></article>
                <article class="card case"><div><div class="case-label">Projeto pessoal · em construção</div><h3>Workspace Orchestrator</h3><p>CLI para organizar contexto de workspaces e preparar informações para agentes de IA.</p></div><span class="tag">IA · TypeScript</span></article>
            </div>
        </div>
    </section>

    <section id="contato" class="reveal">
        <div class="container contact">
            <div>            <div class="section-label">06 / contato</div><h2>Tem um problema para resolver?</h2><p class="section-intro">Vamos conversar sobre automação, desenvolvimento ou implantação de uma solução.</p></div>
            <a class="button primary" href="mailto:luccaosilva10@gmail.com">luccaosilva10@gmail.com ↗</a>
        </div>
    </section>
</main>
<footer class="container"><span>© {{ date('Y') }} Oakdev · Lucas Carvalho</span><span>Construído com Laravel · Docker em breve</span></footer>
<script>
    const phrases = ['andar melhor.', 'ganhar clareza.', 'deixar o trabalho mais simples.'];
    const dynamicTitle = document.getElementById('dynamic-title');
    let phraseIndex = 0;
    setInterval(() => {
        phraseIndex = (phraseIndex + 1) % phrases.length;
        dynamicTitle.style.opacity = '0';
        setTimeout(() => {
            dynamicTitle.textContent = phrases[phraseIndex];
            dynamicTitle.style.opacity = '1';
        }, 220);
    }, 3200);

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach((element) => observer.observe(element));
</script>
</body>
</html>
