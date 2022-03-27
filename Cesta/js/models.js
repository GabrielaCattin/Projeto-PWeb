var resumo = document.getElementById('produto-descricao');
var qtdeProduto = document.getElementById('qtdeProduto');
var total = document.getElementById('valorTotal');
var valorServico;
var valorTotalCompra;

resumo.innerHTML ='<p><strong> Descrição do Produto </strong></p>' + sessionStorage.descricao +'<strong></br>'+ sessionStorage.preco + '</strong>';

qtdeProduto.addEventListener('change', calculaValorTotalCompra);
valorServico = sessionStorage.preco; 
valorServico = valorServico.replaceAll('R$', ' ');

function calculaValorTotalCompra(){
    valorServico = Number(valorServico);
    valorTotalCompra = valorServico * qtdeProduto.value;
    total.innerHTML = '<p><strong> Valor Total da Compra: </strong></p>' + '<strong>R$' + valorTotalCompra +'</strong>';
}


function botao2(){
    window.location = "../Cesta/finalizarcompra.html";
}

