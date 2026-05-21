/* ────────────────────────────────────────────────────────────────
   Carrossel reutilizável — funciona em qualquer .carrossel-gramas
   - Mostra 1 slide por vez (slide ocupa 100% do viewport).
   - Avança automaticamente a cada 3 segundos (loop circular).
   - Botões prev/next deslizam manualmente e resetam o timer.
   - Pausa o auto-play quando o cursor está sobre o carrossel.
   - Pausa quando a aba sai de foco.
   ──────────────────────────────────────────────────────────────── */
(function () {
    'use strict';

    var INTERVALO = 3000;

    function inicializarCarrossel(carrossel) {
        var track   = carrossel.querySelector('.carrossel-track');
        var slides  = track ? track.children : [];
        var btnPrev = carrossel.querySelector('.prev');
        var btnNext = carrossel.querySelector('.next');

        if (!track || !slides.length || !btnPrev || !btnNext) return;

        var indice  = 0;
        var total   = slides.length;
        var timerId = null;

        function aplicarSlide() {
            var offset = indice * 100;
            track.style.transform = 'translateX(-' + offset + '%)';
        }

        function proximo() {
            indice = (indice + 1) % total;
            aplicarSlide();
        }

        function anterior() {
            indice = (indice - 1 + total) % total;
            aplicarSlide();
        }

        function iniciarAuto() {
            pararAuto();
            timerId = setInterval(proximo, INTERVALO);
        }

        function pararAuto() {
            if (timerId) {
                clearInterval(timerId);
                timerId = null;
            }
        }

        btnPrev.addEventListener('click', function () {
            anterior();
            iniciarAuto();
        });

        btnNext.addEventListener('click', function () {
            proximo();
            iniciarAuto();
        });

        carrossel.addEventListener('mouseenter', pararAuto);
        carrossel.addEventListener('mouseleave', iniciarAuto);

        document.addEventListener('visibilitychange', function () {
            if (document.hidden) pararAuto();
            else iniciarAuto();
        });

        iniciarAuto();
    }

    var carrosseis = document.querySelectorAll('.carrossel-gramas');
    for (var i = 0; i < carrosseis.length; i++) {
        inicializarCarrossel(carrosseis[i]);
    }
})();
