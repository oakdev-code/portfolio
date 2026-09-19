# Instruções para agentes do portfólio Oakdev

## Contexto

Este é o portfólio profissional de Lucas Carvalho, sob a marca Oakdev.

- Laravel é a fonte principal da aplicação.
- `docs/index.html` é a versão estática publicada no GitHub Pages.
- Projetos de clientes podem ser confidenciais.
- A comunicação deve ser ampla e atender produtos digitais, serviços, automação, IA, integrações e sistemas.

## Ao retomar o projeto

1. Ler [README.md](../README.md).
2. Ler [docs/roadmap.md](../docs/roadmap.md).
3. Verificar o estado do Git antes de editar.
4. Consultar a skill `clareza-de-negocio` no workspace raiz para qualquer texto comercial.
5. Confirmar se a mudança afeta Laravel, GitHub Pages ou ambos.

## Regras de conteúdo

- Não inventar clientes, depoimentos, números ou resultados para publicação.
- Dados fictícios podem existir apenas em ambiente local e precisam estar identificados.
- Explicar contexto, problema, solução e mudança percebida antes de mencionar tecnologia.
- Não transformar logística no posicionamento principal da Oakdev.
- Evitar novas seções, cards ou animações sem uma necessidade clara.

## Sincronização

Quando uma mudança visual ou de conteúdo for publicada:

- atualizar `resources/views/portfolio.blade.php`;
- refletir a mudança em `docs/index.html`;
- validar a aplicação Laravel;
- confirmar que os dados locais não foram para `docs/`;
- executar os testes existentes;
- usar mensagem de commit em português.

## Estado de produto

O portfólio está em uma versão estável e enxuta. A próxima evolução deve ser motivada por conteúdo real, contato de cliente, domínio próprio ou necessidade técnica concreta, não por adicionar informação apenas para preencher espaço.

