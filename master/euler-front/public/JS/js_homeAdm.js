$(document).ready(function() {
   $('#seguradora').attr('title', 'Nome da empresa seguradora ');
   $('#Curso').attr('title', 'Campo destinado ao curso ');
   $('#Atividade').attr('title', 'Relacionar as atividades /tarefas a serem desenvolvidas durante o estágio, para atingir os objetivos propostos: incluir quantas linhas forem necessárias ');
   $('#nApolice').attr('title', 'Numero da ápolice de seguro');
   $('#professorOrientador').attr('title', 'Nome do professor que ira auxiliar o estagiario');
   
   carregaEstagios();
});

function Mudarestado(el) {
  var display = document.getElementById(el).style.display;
  if (display === "none")
    document.getElementById(el).style.display = 'block';
  else
    document.getElementById(el).style.display = 'none';
}

function carregaEstagios()
{
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
             req : 'selectEstagio'
        }
    })
    .done(function(aRes)
    {
        if(aRes) {
            document.getElementById('teste').innerHTML = aRes;
        }
    });
}

function salvarProduto()
{debugger;
    let sdescricao = $('#descricao').val();
    let xfabricante   = $('#fabricante').val();
    let ivalor = $('#valor').val();
    
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
            req : 'insertProduto',
            descricao: sdescricao,
            fabricante : xfabricante,
            valor : ivalor
        }
    })
    .done(function(aRes)
    {
        if(aRes == 1) {
            $('#descricao').val('');
            $('#fabricante').val('');
            $('#valor').val('');
            $('#divCadastro').hide();
        }
    });
}

function salvarArea()
{
    let iCurso = $('#curso').val();
    let sArea   = $('#Area').val();
    let sAtividade  = $('#Atividade').val();
    
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
            req : 'insertArea',
            curso: iCurso,
            Area : sArea,
            Atividade : sAtividade
        }
    })
    .done(function(aRes)
    {
        if(aRes == 1) {
            $('#curso').val('0');
            $('#Area').val('');
            $('#Atividade').val('');
        }
    });
}

function salvaEstagios()
{

    let linhas = [];
    $('[name="finalizado"]').each(function () {
        if($(this).prop('disabled') == false && $(this).prop('checked') == true) {
            linhas.push(this.value);
        }        
    });
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data :
            {
                req : 'finalizados',
                linhas : linhas
            }
    });
    location.reload();

}

function salvarOrientador()
{
    let sSupervisor = $('#professorOrientador').val();
    
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
            req : 'updateOrientador',
            supervisor: sSupervisor
        }
    })
    .done(function(aRes)
    {
        if(aRes == 1) {
            $('#professorOrientador').val('');
            $('#divCadastroOrientador').hide();
        }
    });
}

function salvarCurso()
{
    let sCurso = $('#Curso').val();
    
    $.ajax({
        url : "/master/euler-front/model/ModelCadastroHomeAdm.php",
        type : 'POST',
        dataType: 'html', // json
        data : 
        {
            req : 'insertCurso',
            curso: sCurso
        }
    })
    .done(function(aRes)
    {
        if(aRes == 1) {
            $('#Curso').val('');
            $('#divCadastroCurso').hide();
        }
    });
}