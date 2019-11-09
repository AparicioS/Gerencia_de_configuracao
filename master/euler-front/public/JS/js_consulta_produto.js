
function buscarProduto(){
    debugger;    
    let id_produto = $('#produto_select').val();
    $.ajax({
        url : "/master/euler-front/model/ModelConsultaProduto.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
             req : 'preencheCampos',
             id  : id_produto
        }
    })
    .done(function(aRes)
    {
        if(aRes) {debugger;
            aRes = JSON.parse(aRes);
            document.getElementById('id_produto').value = aRes.id_produto;
            document.getElementById('descricao').value = aRes.descricao;
            document.getElementById('fabricante').value = aRes.fabricante;
            document.getElementById('valor').value = aRes.valor;
        }
    });
}
