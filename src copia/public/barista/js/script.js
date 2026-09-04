$('.banner').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.itensGaleria').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1500,
  pauseOnHover: false,
  pauseOnFocus: false,
  arrows:false,
  mobileFirst: true,

  /*
  Este bloco responsivo controla quantos cards da Galeria ficam visiveis em cada largura de tela.
  Usamos valores menores de `slidesToShow` conforme a tela diminui para manter leitura e evitar cards espremidos.
  `slidesToScroll: 1` deixa o movimento suave e previsivel no toque.
  Sem essa reducao progressiva, os cards da galeria podem parecer quebrados ou estreitos no tablet e celular.
  */
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1
      }
    }
  ]
});


$('.itensDepo').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2250,

  /*
  Depoimentos e uma secao de texto longo, entao manter um slide visivel em todos os breakpoints preserva a leitura.
  Se aumentarmos `slidesToShow` em telas menores, cada depoimento fica comprimido e o layout parece quebrado.
  Mantemos `slidesToScroll: 1` sempre para conservar o mesmo padrao de interacao.
  */
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.cardEventos').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2250,
  mobileFirst: true,

  /*
  Este mapa responsivo controla a densidade de cards em Eventos.
  Em telas largas podemos mostrar mais cards, mas em tablet/celular reduzimos para 2 e depois 1.
  Isso evita cards minimos e impede que a secao pareca quebrada.
  Manter `slidesToScroll: 1` deixa a navegacao mais suave e evita saltos grandes.
  */
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


new WOW().init();


// Menu Mobile
document.querySelector(".abrir-menu").onclick = function(){
    // alert("Cliquei no Botão ABRIR MENU")
    document.documentElement.classList.add("menu-mobile");
}

document.querySelector(".fechar-menu").onclick = function(){
  // alert("Cliquei no Botão fechar MENU")
  document.documentElement.classList.remove("menu-mobile")
}

// On Scroll
window.onscroll = function(){
    var top = window.scrollY;
    var topoFixo = document.getElementById('topoFixo');
 
    if(top >= 1100){ // SE top >= 1100 faça:
        //console.log(top);
        topoFixo.classList.remove('saindo');
        topoFixo.classList.add('menu-fixo');
    }else{ // Senão for faça:
        //console.log("Estou abaixo de: " + top);
        if (topoFixo.classList.contains('menu-fixo') && !topoFixo.classList.contains('saindo')) {
            topoFixo.classList.add('saindo');
            topoFixo.addEventListener('animationend', function onMenuFixoOut(e) {
                if (e.animationName === 'menuFixoOut') {
                    topoFixo.classList.remove('menu-fixo', 'saindo');
                    topoFixo.removeEventListener('animationend', onMenuFixoOut);
                }
            });
        }
    }
   
}
