# Oakdev Portfolio

Portfólio profissional público de **Oakdev — Lucas Carvalho**, construído com Laravel.

`Oakdev` é o codinome profissional: `Oak` faz referência a Carvalho e `dev` a developer.

## Objetivo

Apresentar experiência, stack, IA aplicada, automação, implantação e serviços profissionais sem expor código ou dados confidenciais de clientes.

## Estado atual

- landing page pública responsiva
- navegação mobile acessível e suporte a preferência de movimento reduzido
- apresentação profissional
- expertise e tecnologias
- cases públicos e confidenciais descritos com responsabilidade
- links de LinkedIn, GitHub e e-mail
- Laravel 12 com SQLite
- roadmap persistente para futuras melhorias em `docs/roadmap.md`

## Desenvolvimento local

```powershell
composer install
php artisan serve
```

Acesse `http://127.0.0.1:8000`.

## Versão pública

A landing page estática é publicada automaticamente no GitHub Pages a partir de `docs/`:

https://oakdev-code.github.io/portfolio/

O Laravel continua sendo a fonte principal do projeto. Sempre que a apresentação pública mudar, atualize também `docs/index.html` e envie para a branch `main`. O GitHub Pages republica a versão estática automaticamente.

## Contexto para futuras sessões

Antes de continuar o desenvolvimento, leia [docs/roadmap.md](docs/roadmap.md) e [.github/copilot-instructions.md](.github/copilot-instructions.md). Esses arquivos registram o estado atual, as próximas melhorias e as regras para agentes de IA.

## Próximas etapas

1. criar painel administrativo protegido
2. transformar projetos, skills e serviços em conteúdo persistido
3. adicionar migrations, models e seeders
4. criar formulário de contato com validação
5. adicionar Docker e pipeline de publicação
