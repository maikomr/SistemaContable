<div class="container content">
    <div class="navbar-header">
      <h1>Balance de Comprobacion Sumas y Saldos</h1>
    </div>
    <table class="table table-bordered table-hover">
        <tr class= "primary-color-background">
            <td><strong>Numero</strong></td>
            <td><strong>Detalle</strong></td>
            <td><strong>Debe</strong></td>
            <td><strong>Haber</strong></td>
            <td><strong>Deudor</strong></td>
            <td><strong>Acreedor</strong></td>
        </tr>
        <?php for ($i=0; $i < count($balances) ; $i++) { ?>
            <tr>
                <td><?php echo $i+1; ?></td>
                <td><?php echo $balances[$i]->name; ?></td>
                <td><?php echo $balances[$i]->totalDebit; ?></td>
                <td><?php echo $balances[$i]->totalCredit; ?></td>
                <td><?php echo $balances[$i]->saldoDebit; ?></td>
                <td><?php echo $balances[$i]->saldoCredit; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>