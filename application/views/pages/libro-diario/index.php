<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/main.css">
<title>LIBRO DIARIO</title>
</head>
<body>

<h1>LIBRO DIARIO</h1>
 <div class="container">
     
         <button type="button" class="btn btn-default pull-right btn-accion" aria-label="Nueva Transaccion" >
            <span class="glyphicon glyphicon-plus"></span> Nueva Transaccion
         </button>
          
<table class="table table-striped table-bordered">
<tr class= "success">
  <td><strong> Numero </strong></td>
  <td><strong> Fecha </strong></td>
  <td><strong> Detalle </strong></td>
  <td><strong> Debe </strong></td>
  <td><strong> Haber </strong></td>
</tr>
 <?php foreach ($detalle as $detail): ?> 
 <!-- <tr>
  <td> <?=$detail->idTransaction ?> </td>
  <td> <?=$detail->date ?> </td>
  <td> <?=$detail->account ?> </td>
  <td> <?=$detail->payrate ?> </td>
  </tr> -->
  <p> 
    <?=$detail->account?>
  </p>
  <?php endforeach; ?>
 </table>
</div>
</body>
</html>