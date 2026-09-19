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
        .eyebrow { color:var(--rose); font:500 13px "DM Mono", monospace; letter-spacing:.08em; text-transform:uppercase; }
        h1 { font-size:clamp(46px, 7vw, 84px); line-height:1.02; letter-spacing:-.06em; margin:20px 0 24px; max-width:750px; }
        h1 span { color:var(--red); }
        #dynamic-title { display:inline-block; transition:opacity .22s ease; }
        .lead { color:var(--muted); font-size:19px; max-width:650px; }
        .actions { display:flex; flex-wrap:wrap; gap:14px; margin-top:34px; }
        .button { border:1px solid var(--line); border-radius:8px; padding:13px 18px; font-weight:700; font-size:14px; }
        .button.primary { background:var(--red); border-color:var(--red); color:#fff; }
        .button:hover { transform:translateY(-3px); box-shadow:0 10px 25px #f0445233; }
        .terminal { background:#100c0d; border:1px solid var(--line); border-radius:14px; padding:20px; box-shadow:0 25px 80px #0008; font:14px/1.8 "DM Mono", monospace; color:#d7c5c8; animation:float 5s ease-in-out infinite; }
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
        .contact { background:linear-gradient(135deg,var(--surface),#32151c); border:1px solid var(--line); border-radius:16px; padding:42px; display:flex; justify-content:space-between; align-items:center; gap:30px; }
        footer { padding:28px 0 45px; display:flex; justify-content:space-between; color:var(--muted); font-size:13px; }
        .orb { position:absolute; width:420px; height:420px; border-radius:50%; background:radial-gradient(circle, #f044521f, transparent 68%); top:35px; right:-130px; pointer-events:none; animation:pulse 6s ease-in-out infinite; }
        .reveal { opacity:0; transform:translateY(24px); transition:opacity .7s ease, transform .7s ease; }
        .reveal.visible { opacity:1; transform:none; }
        @keyframes float { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-9px); } }
        @keyframes pulse { 0%,100% { transform:scale(1); opacity:.7; } 50% { transform:scale(1.15); opacity:1; } }
        @media (max-width:760px) { .nav-links { display:none; } .hero { grid-template-columns:1fr; min-height:auto; padding:65px 0 90px; gap:45px; } .grid { grid-template-columns:1fr; } .contact, footer { flex-direction:column; align-items:flex-start; } section { padding:65px 0; } }
    </style>
</head>
<body>
<header class="container nav">
    <a class="brand" href="/">oakdev<span style="color:var(--muted)">();</span></a>
    <nav class="nav-links" aria-label="Navegação principal">
        <a href="#sobre">Sobre</a><a href="#expertise">Expertise</a><a href="#cases">Cases</a><a href="#contato">Contato</a>
    </nav>
</header>

<main>
    <section class="container hero">
        <div class="orb"></div>
        <div>
            <div class="eyebrow">Oakdev · Lucas Carvalho</div>
            <h1>Construo sistemas que <span id="dynamic-title">resolvem problemas reais.</span></h1>
            <p class="lead">Sou Lucas Carvalho, analista de sistemas com 7+ anos de experiência em desenvolvimento, integração, automação e implantação de soluções para operações reais.</p>
            <div class="actions">
                <a class="button primary" href="#contato">Vamos conversar →</a>
                <a class="button" href="https://github.com/oakdev-code" target="_blank" rel="noreferrer">GitHub ↗</a>
                <a class="button" href="https://www.linkedin.com/in/lucas-carvalho-726b97165/" target="_blank" rel="noreferrer">LinkedIn ↗</a>
            </div>
        </div>
        <div class="terminal" aria-label="Resumo profissional">
            <div class="terminal-top"><i class="dot"></i><i class="dot"></i><i class="dot"></i></div>
            <div><span class="prompt">$ whoami</span></div>
            <div class="value">Oakdev // Lucas Carvalho</div>
            <br>
            <div><span class="prompt">$ focus --list</span></div>
            <div class="value">→ Software & APIs</div>
            <div class="value">→ IA & Agent workflows</div>
            <div class="value">→ Automation & Integrations</div>
            <div class="value">→ Client deployments</div>
        </div>
    </section>

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

    <section id="cases" class="reveal">
        <div class="container">
            <div class="section-label">03 / experiência</div>
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
            <div><div class="section-label">04 / contato</div><h2>Tem um problema para resolver?</h2><p class="section-intro">Vamos conversar sobre automação, desenvolvimento ou implantação de uma solução.</p></div>
            <a class="button primary" href="mailto:luccaosilva10@gmail.com">luccaosilva10@gmail.com ↗</a>
        </div>
    </section>
</main>
<footer class="container"><span>© {{ date('Y') }} Oakdev · Lucas Carvalho</span><span>Construído com Laravel · Docker em breve</span></footer>
<script>
    const phrases = ['resolvem problemas reais.', 'automatizam operações.', 'conectam pessoas e sistemas.'];
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
