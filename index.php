<html>
    <head>
        <meta charset="UTF-8">
        <title>Frente de Caixa</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" >
        
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
    <body>
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                
                <div class="col-6">

                    

                    <div class="card text-center" id="card-produtos">
                        <div class="card-header">
                            Cupom Fiscal
                        </div>
                        <div class="card-body">
                            <ol>
                                <li>Sanduiche de Presunto ------ R$ 2,90</li>
                            </ol>
                            
                        </div>

                    </div>
                </div>

                <div class="col-6">
                    
                    <div class="card text-white bg-danger mb-3" id="card-totalpagar">                    
                        <div class="card-body">
                            <h5 class="card-title">Total a Pagar</h5>
                            <p class="valor">R$ 123,45</p>
                        </div>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Código de Barras" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-barcode" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nome do produto" >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-plus" aria-hidden="true"></i></button>
                        </div>
                    </div>

                    <button type="button" class="btn btn-info">Estorno</button>
                    <button type="button" class="btn btn-success">Pagar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>

            </div>
        </div>
    </body>
</html>