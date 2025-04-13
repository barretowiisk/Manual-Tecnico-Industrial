# 📘 Manual Técnico Industrial

**Manual Técnico Industrial** é um sistema web desenvolvido em PHP, HTML5 e JavaScript com uso do PDF.js. O objetivo principal é oferecer uma interface amigável para visualizar manuais técnicos em PDF diretamente no navegador, bloqueando funcionalidades como download, impressão ou cópia dos documentos.

## 🚀 Funcionalidades

- ✅ Listagem dinâmica de manuais a partir de um diretório específico (pasta `arquivos/`)
- ✅ Interface responsiva e moderna com layout limpo
- ✅ Visualização de arquivos PDF diretamente no navegador utilizando **PDF.js**
- ✅ Zoom ajustado automaticamente à **largura da página** no carregamento
- ✅ Dropdown para seleção de manuais, facilitando a navegação
- ✅ Bloqueio de:
  - Clique com o botão direito
  - Teclas de atalho como `Ctrl + S`, `Ctrl + P`, `F12`, `PrintScreen`, entre outras
- ✅ Mensagens amigáveis em caso de erro no carregamento de arquivos

## 🧠 Tecnologias Utilizadas

- PHP (Backend simples para listagem e proteção de arquivos)
- HTML5 e CSS3
- JavaScript (interações com o DOM e segurança)
- [PDF.js](https://mozilla.github.io/pdf.js/) (para exibição de PDFs no navegador)
- Font Awesome e Google Fonts para ícones e tipografia

## 📁 Estrutura do Projeto

```
📂 manual-tecnico-industrial/
├── arquivos/                     # Diretório contendo os arquivos PDF
├── viewer/                       # Diretório do PDF.js
│   ├── viewer.html               # Visualizador PDF customizado
│   ├── viewer.css
│   ├── viewer.mjs
│   ├── viewer.mjs.map
│   ├── locale/
│   ├── images/
│   └── cmaps/
├── abrir_pdf.php                 # Script para servir os PDFs de forma segura
├── listar_manuais.php           # Gera JSON com os arquivos disponíveis
├── index.html                   # Página principal do sistema
```

## 📦 Como Usar

1. Clone o repositório:
   ```bash
   git clone https://github.com/barretowiisk/Manual-Tecnico-Industrial.git
   ```

2. Coloque seus arquivos PDF na pasta `arquivos/`.

3. Hospede o sistema localmente ou em um servidor com suporte a PHP.

4. Acesse `index.html` pelo navegador.

> ⚠️ É recomendado usar um servidor local como o XAMPP, Laragon, WAMP ou o embutido do PHP (`php -S localhost:8000`), pois requisições locais diretas podem ser bloqueadas por segurança do navegador.

