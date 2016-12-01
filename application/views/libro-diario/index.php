<div class="container content">
    <div class="navbar-header">
      <h1>Libro Diario</h1>
    </div>
    <a role="button" class="btn btn-default pull-right btn-accion button-softline" href="http://sistema-contable.com/index.php/libro-diario/registrar" >
        <span class="glyphicon glyphicon-plus"></span> Nueva Transaccion
    </a>
    <table class="table table-bordered table-hover">
        <tr class= "primary-color-background">
            <td><strong> Numero </strong></td>
            <td><strong> Fecha </strong></td>
            <td><strong> Detalle </strong></td>
            <td><strong> Debe </strong></td>
            <td><strong> Haber </strong></td>
        </tr>
        <?php foreach ($transactions as $transaction): ?>
        <tr>
            <td><strong> <?php echo $transaction->idTransaction; ?> </strong></td>
            <td> <?php echo $transaction->date; ?> </td>
            <td> <?php echo $transaction->account; ?> </td>
            <td>
            <?php
                if ($transaction->type === 'DEBE') {
                    echo $transaction->payrate;
                } else {
                    echo '';
                }
            ?>
            </td>
            <td>
            <?php
                if ($transaction->type === 'HABER') {
                    echo $transaction->payrate;
                } else {
                    echo '';
                }
            ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3"><strong>Total</strong></td>
            <td><strong><?php echo $totalDebit ?></strong></td>
            <td><strong><?php echo $totalCredit ?></strong></td>
        </tr>
    </table>
</div>