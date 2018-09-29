
$(document).ready(function(){
     
     var valorTotal = 0;
     var produtosCadastrados = [];
     
     $.getJSON('model/produtos.php', function(valores){
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
        minLength: 1,
        highlight: true
      },
      {
        name: 'produtos',
        source: pesquisaProduto,
        display: "nome"
      });
      
      //evento de quando seleciona produto
      $("#input-produto").bind("typeahead:select", function(ev, valor){
          addProduto(valor);
          
      });//fim do select.
     
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
                 addProduto(res);
             }
             

     }); //fim do Click
     
     function addProduto(produto)
     {

        var preco = parseFloat(produto.preco); 
        var html = '<li>'+ produto.nome + ' ------ R$ '+ formataReais(preco) +'</li>';
        $("#card-produtos ol").append(html);
        valorTotal += preco;
        
        $("#input-codbarras").val('');         
        $("#input-produto").typeahead('val','');
        $("#card-totalpagar .valor").html("R$ "+formataReais(valorTotal));
     }
     $("#btn-cancelar-sim").click(function(){
         window.location.reload();
     });//fim do click
     
     
     $("#input-codbarras").keydown(function(ev){
         if(ev.keyCode == 13) //13 é o codigo do enter.
         {
             $("#btn-codbarras").click();
         }
     });// fim do keydown
     
        $('body').keydown(function(ev){
            
        
         
         if(ev.keyCode == 116)
         {
              ev.preventDefault();
           $("#input-codbarras").focus(); //entra no componente  
         }
         
         if(ev.keyCode == 117)
         {
              ev.preventDefault();
            $("#input-produto").focus(); 
         }    
             
     });// fim keydown do input
     
}); //fim document ready

function formataReais (valor)
{
  var formataReais = valor.toFixed(2).replace(".",",");
  return formataReais;     
}

function pesquisaProduto(pesquisa)
{
    return produtosCadastrados
}