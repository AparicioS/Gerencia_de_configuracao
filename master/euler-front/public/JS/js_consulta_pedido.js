$(document).ready(function(){
   preencheCampo(); 
});
function buscarPedido(){
    debugger;    
    let id_pessoa = $('#pedido_select').val();
    document.getElementById('id_pessoa').value = id_pessoa;
//    let id_pessoa = $('#pedido_select').val();
    
    $.ajax({
//        url : "/master/euler-front/model/ModelConsultaCliente.php",
        url : "/master/euler-front/model/ModelCadastroPedido.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
             req : 'preencheCampos',
             id  : id_pessoa
        }
    }).done(function(aRes){debugger;
            aRes = JSON.parse(aRes);
        if(aRes) {
            let itotal = 0;
            let sHtml = '<table class="tabela_de_pedidos">';
             aRes.map(function(item){debugger;
                 itotal+=item.quantidade * parseFloat(item.valorVenda.replace('$',''));
                sHtml += '<tr>';
                sHtml += '<td>';
                sHtml += item.descricao;
                sHtml += '</td>';
                sHtml += '<td>';
                sHtml += item.fabricante;
                sHtml += '</td>';
                sHtml += '<td>R';
                sHtml += item.valorProduto;
                sHtml += '</td>';
                sHtml += '<td>';
                sHtml += item.quantidade;
                sHtml += '</td>';
                sHtml += '<td>R';
                sHtml += item.valorVenda;
                sHtml += '</tr>';
            });
        sHtml += '<tr></tr>' ;
        sHtml += '<tr><td colspan="4"> Total do Pedido:</td><td> R$';
        sHtml += itotal;
        sHtml += '</tr></table>';
        document.getElementById('tabela_pedido').innerHTML= sHtml;
        }else{
        document.getElementById('tabela_pedido').innerHTML= 'Não Existe Registro de Pedidos para o Cliente Informado!  ';
            
        }
    });
    
};
