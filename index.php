<html>
    <head>
        <meta charset="UTF-8">
        <title>Frente de Caixa</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >

        <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/pdv.js" type="text/javascript"></script>
        
        <script src="js/typeahead.jquery.js" type="text/javascript"></script>
        
        <style>
            #card-totalpagar .card-title {
                font-size: small;
                margin: 0;
            }
            #card-totalpagar .valor {
                margin: 0;
                font-size: 22pt; 
            }
            #card-produtos .card-body {
                height: 60%;
                font-family: monospace;
                text-align: left;
            }
        </style>

    </head>
    <body bgcolor="#000000">
        <div class="container">
            <div class="row" style="margin-top: 30px;">

                <div class="col-6">



                    <div class="card text-center" id="card-produtos">
                        <div class="card-header">
                            Cupom Fiscal
                        </div>
                        <div class="card-body">
                            <ol>
                                
                            </ol>

                        </div>

                    </div>
                </div>

                <div class="col-6">

                    <div class="card text-white bg-danger mb-3" id="card-totalpagar">                    
                        <div class="card-body">
                            <h5 class="card-title">Total a Pagar</h5>
                            <p class="valor">R$ 0,00</p>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Código de Barras" id="input-codbarras">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="btn-codbarras"><i class="fa fa-barcode" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nome do produto" id="input-produto" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="btn-produto"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-info">Estorno</button>
                    <button type="button" class="btn btn-success">Pagar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-cancelar">Cancelar</button>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modal-codbarras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <i class="fa fa-exclamation-triangle text-warning" style="font-size: 28pt;"></i>
                       Código de Barras não encontrado
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal cancelar -->
        <div class="modal fade" id="modal-cancelar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Atenção</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <i class="fa fa-exclamation-triangle text-warning" style="font-size: 28pt;"></i>
                       Você deseja realmente cancelar a venda?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Sim</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>