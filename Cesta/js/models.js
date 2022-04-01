var resumo = document.getElementById('produto-descricao');
var qtdeProduto = document.getElementById('qtdeProduto');
var total = document.getElementById('valorTotal');
var valorServico;
var valorTotalCompra;

<<<<<<< HEAD
resumo.innerHTML ='<p><strong> Descrição do Produto </strong></p>' + sessionStorage.descricao +'<strong></br>'+ sessionStorage.preco + '</strong>';
=======
resumo.innerHTML = sessionStorage.nome+ '<br/>'+sessionStorage.descricao+'<strong></br>'+sessionStorage.preco+'</strong>';
>>>>>>> 3b036b6826706087477246d0486f797e3beab6a6

qtdeProduto.addEventListener('change', calculaValorTotalCompra);
valorServico = sessionStorage.preco; 
valorServico = valorServico.replaceAll('R$', ' ');

function calculaValorTotalCompra(){
    valorServico = Number(valorServico);
<<<<<<< HEAD
    valorTotalCompra = valorServico * qtdeProduto.value;
=======
    valorTotalCompra = valorServico*qtdeProduto.value;
>>>>>>> 3b036b6826706087477246d0486f797e3beab6a6
    total.innerHTML = '<p><strong> Valor Total da Compra: </strong></p>' + '<strong>R$' + valorTotalCompra +'</strong>';
}


function botao2(){
    window.location = "../Cesta/finalizarcompra.html";
}

