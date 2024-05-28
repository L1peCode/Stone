var resumo = document.getElementById('descricao'); // variavel para passar de uma pagina para outra a descrição e o valor do produto
// para passar de uma pagina para outra a descrição e o valor do produto
resumo.innerHTML = '<p><strong> Descrição do celular : </p></strong>' + sessionStorage.descricao +
 '<strong> <br>' + sessionStorage.valor + '</strong>';



