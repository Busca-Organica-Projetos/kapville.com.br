/* ────────────────────────────────────────────────────────────────
   Sidebar de Navegação — Soluções
   - Smooth scroll ao clicar nos links da sidebar (com offset do header).
   - Scroll-spy: marca o link do produto visível com a classe .active.
   - Lida com sidebar fixa em desktop e horizontal scrollável em mobile.
   ──────────────────────────────────────────────────────────────── */
(function () {
    'use strict';

    var sidebar = document.querySelector('.sidebar-solucoes');
    if (!sidebar) return;

    var links = sidebar.querySelectorAll('a[href^="#"]');
    if (!links.length) return;

    /* Offset adicional para o scroll levar em conta o header fixo */
    var OFFSET = 120;

    /* ─── 1) Smooth scroll ao clicar ───────────────────────────── */
    links.forEach(function (link) {
        link.addEventListener('click', function (e) {
            var hash = link.getAttribute('href');
            if (!hash || hash === '#') return;

            var alvo = document.querySelector(hash);
            if (!alvo) return;

            e.preventDefault();

            var topo = alvo.getBoundingClientRect().top + window.pageYOffset - OFFSET;
            window.scrollTo({
                top: topo,
                behavior: 'smooth'
            });

            /* Atualiza a URL sem disparar scroll nativo */
            if (history.pushState) {
                history.pushState(null, '', hash);
            }

            /* Marca o link clicado como ativo imediatamente */
            setActive(link);
        });
    });

    /* ─── 2) Scroll-spy: detecta o produto visível ─────────────── */
    var alvos = [];
    links.forEach(function (link) {
        var hash = link.getAttribute('href');
        var alvo = hash ? document.querySelector(hash) : null;
        if (alvo) {
            alvos.push({ link: link, elemento: alvo });
        }
    });

    function setActive(linkAtivo) {
        sidebar.querySelectorAll('li').forEach(function (li) {
            li.classList.remove('active');
        });
        var li = linkAtivo.closest('li');
        if (!li) return;
        li.classList.add('active');

        /* Centraliza o item ativo APENAS no scroll horizontal do <ul>,
           sem mexer no scroll da página (evita o "jump" em mobile). */
        var ul = li.parentElement;
        if (!ul) return;

        var ehHorizontal = ul.scrollWidth > ul.clientWidth;
        if (!ehHorizontal) return;

        var alvo = li.offsetLeft - (ul.clientWidth / 2) + (li.offsetWidth / 2);
        var max  = ul.scrollWidth - ul.clientWidth;
        if (alvo < 0) alvo = 0;
        if (alvo > max) alvo = max;

        if (typeof ul.scrollTo === 'function') {
            ul.scrollTo({ left: alvo, behavior: 'smooth' });
        } else {
            ul.scrollLeft = alvo;
        }
    }

    /* IntersectionObserver detecta qual alvo está mais visível */
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            /* Pega a entrada que está mais perto do topo da viewport (com offset) */
            var visible = entries.filter(function (en) { return en.isIntersecting; });
            if (!visible.length) return;

            /* Ordena por proximidade do topo */
            visible.sort(function (a, b) {
                return Math.abs(a.boundingClientRect.top - OFFSET) -
                       Math.abs(b.boundingClientRect.top - OFFSET);
            });

            var topoMaisPerto = visible[0].target;
            var par = alvos.find(function (a) { return a.elemento === topoMaisPerto; });
            if (par) setActive(par.link);
        }, {
            /* Margem que define a "linha de detecção" perto do topo */
            rootMargin: '-' + OFFSET + 'px 0px -55% 0px',
            threshold: [0, 0.1, 0.5, 1]
        });

        alvos.forEach(function (a) {
            observer.observe(a.elemento);
        });
    } else {
        /* Fallback: scroll listener manual (browsers sem IntersectionObserver) */
        var ticking = false;
        window.addEventListener('scroll', function () {
            if (ticking) return;
            ticking = true;
            window.requestAnimationFrame(function () {
                var y = window.pageYOffset + OFFSET + 10;
                var atual = null;
                alvos.forEach(function (a) {
                    var top = a.elemento.offsetTop;
                    if (top <= y) atual = a;
                });
                if (atual) setActive(atual.link);
                ticking = false;
            });
        }, { passive: true });
    }

    /* ─── 3) Estado inicial baseado no hash da URL ─────────────── */
    if (window.location.hash) {
        var atual = sidebar.querySelector('a[href="' + window.location.hash + '"]');
        if (atual) setActive(atual);
    }

    /* ─── 4) Sidebar só aparece quando #produtos está em vista ──
       Em desktop a sidebar é position:fixed — sem controle, ela
       ficaria sobreposta ao banner (topo) e ao footer (rodapé).
       Esse observer adiciona .sidebar-hidden quando #produtos
       sai da viewport, e remove quando reentra. */
    var produtos = document.querySelector('#produtos');
    if (produtos && 'IntersectionObserver' in window) {
        var visObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (en) {
                if (en.isIntersecting) {
                    sidebar.classList.remove('sidebar-hidden');
                } else {
                    sidebar.classList.add('sidebar-hidden');
                }
            });
        }, {
            /* Considera "visível" quando pelo menos uma fração mínima
               de #produtos está dentro da viewport. */
            threshold: 0,
            rootMargin: '-80px 0px -80px 0px'
        });
        visObserver.observe(produtos);
    }
})();
