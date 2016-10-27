<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema Contable</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
</head>
<body>
     <nav class="navbar navbar-default dark-color-background">
        <div class="container-fluid">
            <div class="navbar-header titulo">
                <h1>Registrar Transaccion</h1>
            </div>
        </div>
     </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 form">
                <form id="form-registrar-transaccion" action="registrar" method="post" accept-charset="utf-8">
                    <label for="cuenta-corriente">Cuenta Corriente</label>
                    <input id="cuenta-corriente" class="form-control" type="text" name="cuenta" placeholder="Cuenta Corriente">
                    <br>
                    <label for="fecha">Fecha</label> 
                    <input id="fecha" class="form-control" type="text" name="fecha" placeholder="Fecha">
                    <br>
                    <label for="tipo-transaccion">Tipo de Transaccion</label>
                    <div id="tipo-transaccion" class="radio">
                        <label class="radio-inline">
                            <input type="radio" name="tipoTransaccion" value="DEBE"> Debe
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="tipoTransaccion" value="HABER"> Haber
                        </label>
                    </div>
                    <br>
                    <label for="asiento-contable">Asiento Contable</label>
                    <input id="asiento-contable" class="form-control" type="text" name="asientoContable" placeholder="Asiento Contable">
                    <br>
                </form>
                <button class="btn btn-primary center-block button-softline" type="submit" form="form-registrar-transaccion" name="guardar" value="guardar">Guardar</button>
                <br>
            </div>
        </div>
    </div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../js/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>
</body>
</html>