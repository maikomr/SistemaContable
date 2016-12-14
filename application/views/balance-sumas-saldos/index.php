<div class="container content">
    <div class="navbar-header">
      <h1>Balance de Comprobación de Sumas y Saldos</h1>
    </div>
    <table class="table table-bordered table-hover">
        <tr class= "primary-color-background">
            <td rowspan="2"><strong>Nº</strong></td>
            <td rowspan="2"><strong>Detalle</strong></td>
            <td colspan="2" style="text-align: center;"><strong>Sumas</strong></td>
            <td colspan="2" style="text-align: center;"><strong>Saldos</strong></td>
        </tr>
        <tr class= "primary-color-background">
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
        <tr>
            <td colspan="2"></td>
            <td class=<?php echo $comprobacionSumas; ?>>
                <strong><?php echo $totalBalanceSumaDebe; ?></strong>
            </td>
            <td class=<?php echo $comprobacionSumas; ?>>
                <strong><?php echo $totalBalanceSumaHaber; ?></strong>
            </td>
            <td class=<?php echo $comprobacionSaldos; ?>>
                <strong><?php echo $totalBalanceSaldoDeudor; ?></strong>
            </td>
            <td class=<?php echo $comprobacionSaldos; ?>>
                <strong><?php echo $totalBalanceSaldoAcreedor; ?></strong>
            </td>
        </tr>
    </table>
</div>