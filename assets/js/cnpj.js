

   
function limpa_formulário_cnpj() {
    //Limpa valores do formulário de cnpj.
    document.getElementById('nome').value=("");
    document.getElementById('cep').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('nome').value=(conteudo.nome);
    document.getElementById('cep').value=(conteudo.cep);
} //end if.
else {
    //cnpj não Encontrado.
    limpa_formulário_cnpj();
    alert("cnpj não encontrado.");
}
}

function pesquisacnpj(valor) {

//Nova variável "cnpj" somente com dígitos.
var cnpj = valor.replace(/\D/gm,'');

//Verifica se campo cnpj possui valor informado.
if (cnpj != "") {

    //Expressão regular para validar o cnpj.
    var validacnpj = /^[0-9]{18}$/;

    //Valida o formato do cnpj.
    if(validacnpj.test(cnpj)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('nome').value="...";
        document.getElementById('cep').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://www.receitaws.com.br/v1/cnpj/'+ cnpj +'/?callback=retornoReceitaWS';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cnpj é inválido.
        limpa_formulário_cnpj();
        alert("Formato de cnpj inválido.");
    }
} //end if.
else {
    //cnpj sem valor, limpa formulário.
    limpa_formulário_cnpj();
}
}




