
$(document).ready(function(){
     
     var valorTotal = 0;
     var produtosCadastrados = [];
     
     $.getJSON('model/produtos.json', function(valores){
         produtosCadastrados = valores;
     });
     
   function pesquisaProduto(pesquisa, cb)
   {
    
       var lista = produtosCadastrados.filter(function(el){
        if(el.nome.search(pesquisa) >= 0)
        {
            return true;
        } else {
            return false;
        }
    });
    
    cb(lista);
    
   }
     //autocomplete
     $("#input-produto").typeahead({
        minLength: 3,
        highlight: true
      },
      {
        name: 'my-dataset',
        source: pesquisaProduto,
        display: "nome"
      });
     
     // add codigo de barras
     $("#btn-codbarras").click(function(){
         
         
         var cod = $("#input-codbarras").val();
         
        
             var res = produtosCadastrados.find(function (el){
                 return el.id == cod;
             }); //fim do find
             
             if (res == undefined)
             {                
                 $('#modal-codbarras').modal('show');
             } else {
                 var html = '<li>'+ res.nome + ' ------ R$ '+ formataReais(res.preco) +'</li>';
                 $("#card-produtos ol").append(html);
                 valorTotal += res.preco;
                 
                 $("#input-codbarras").val('');
                 $("#card-totalpagar .valor").html("R$ "+formataReais(valorTotal));
             }
             

     }); //fim do Click
     
}); //fim document ready

function formataReais (valor)
{
  var formataReais = "R$ " + valor.toFixed(2).replace(".",",");
  return formataReais;     
}

function pesquisaProduto(pesquisa)
{
    return produtosCadastrados
}