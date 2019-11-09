$(document).ready(function(){
   preencheCampo(); 
});

function buscarCliente()
{
    let id_pessoa = $('#pessoa').val();debugger;    
    $.ajax({
        url : "/master/euler-front/model/ModelConsultaCliente.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
             req : 'preencheCampos',
             id  : id_pessoa
        }
    })
    .done(function(aRes)
    {
        if(aRes) {debugger;
            aRes = JSON.parse(aRes);
            document.getElementById('id_pessoa').value = aRes.id_pessoa;
            document.getElementById('nome').value = aRes.nome;
            document.getElementById('cpf').value = aRes.cpf;
            document.getElementById('rg').value = aRes.rg;
            document.getElementById('data_nascimento').value = aRes.datanascimento;
            document.getElementById('logradouro').value = aRes.logradouro;
            document.getElementById('numero').value = aRes.numero;
            document.getElementById('bairro').value = aRes.bairro;
            document.getElementById('cep').value = aRes.cep;
            document.getElementById('cidade').value = aRes.cidade;
            document.getElementById('uf').value = aRes.uf;
            document.getElementById('email').value = aRes.email;
            document.getElementById('telefone').value = aRes.telefone;
            document.getElementById('celular').value = aRes.celular;
        }
    });
}