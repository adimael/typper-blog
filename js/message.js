var texto = "Olá! Sou a Tess, estou aqui para lhe ajudar. Qualquer duvida clique sobre mim para que você seja direcionado para nossa página de suporte.";
var result;

var count = 0;
function digitar() {
  result = document.getElementById("result");
  window.setTimeout(function() { inserir(texto[count]) }, 200);
}

function inserir(letra) {
  result.innerHTML += letra;
  count++;
  if(count < texto.length)
    window.setTimeout(function() { inserir(texto[count]) }, 100);
}

window.onload = digitar;