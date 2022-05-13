/*
Muda o estilo do NAVBAR quando scrollar para baixo
Mudando o 0 na função:
('window-scroll',window.scrollY > 0)

Podemos modificar quando vai mudar o estilo do NAVBAR
(É por pixels, ou seja, quando tiver a mínima mudança ele irá mudar)
*/

window.addEventListener('scroll', () => { 
    document.querySelector('nav').classList.toggle
    ('window-scroll',window.scrollY > 0)

})