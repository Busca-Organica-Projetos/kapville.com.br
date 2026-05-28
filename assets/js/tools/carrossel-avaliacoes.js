document.addEventListener('DOMContentLoaded', function () {

    'use strict';

    var INTERVALO = 5000;

    var carrossel = document.querySelector('.carrossel-avaliacoes');
    if (!carrossel) return;

    var track   = carrossel.querySelector('.carrossel-track');
    var slides  = track ? track.children : [];
    var btnPrev = carrossel.querySelector('.prev');
    var btnNext = carrossel.querySelector('.next');

    if (!track || !slides.length || !btnPrev || !btnNext) return;

    var indice   = 0;
    var total    = slides.length;
    var visiveis = 3;
    var timerId  = null;

    function calcularVisiveis() {
        var w = window.innerWidth;

        if (w <= 640) return 1;
        if (w <= 991) return 2;

        return 3;
    }

    function aplicarLargura() {

        visiveis = calcularVisiveis();

        for (var i = 0; i < slides.length; i++) {

            slides[i].style.flex =
                '0 0 ' + (100 / visiveis) + '%';

            slides[i].style.maxWidth =
                (100 / visiveis) + '%';
        }

        var maxIndice = Math.max(0, total - visiveis);

        if (indice > maxIndice) {
            indice = maxIndice;
        }

        aplicarSlide();
    }

    function aplicarSlide() {

        var offset = indice * (100 / visiveis);

        track.style.transform =
            'translateX(-' + offset + '%)';
    }

    function proximo() {

        var maxIndice = Math.max(0, total - visiveis);

        if (indice >= maxIndice) {
            indice = 0;
        } else {
            indice++;
        }

        aplicarSlide();
    }

    function anterior() {

        var maxIndice = Math.max(0, total - visiveis);

        if (indice <= 0) {
            indice = maxIndice;
        } else {
            indice--;
        }

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

        if (document.hidden) {
            pararAuto();
        } else {
            iniciarAuto();
        }
    });

    var resizeTimer;

    window.addEventListener('resize', function () {

        clearTimeout(resizeTimer);

        resizeTimer = setTimeout(aplicarLargura, 120);
    });

    aplicarLargura();

    iniciarAuto();

});