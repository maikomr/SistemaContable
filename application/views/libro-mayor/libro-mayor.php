<div class="container content">
    <div class="navbar-header">
      <h1>Libro mayor</h1>
      <h3>Cuenta: <?php echo $accountName; ?></h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 form">
                <table class="table table-bordered table-hover">
                    <tr class= "primary-color-background">
                        <td style="text-align: center"><strong>Debe</strong></td>
                        <td style="text-align: center"><strong>Haber</strong></td>
                    </tr>
                    <?php
                        $counter = 0;
                        while ($counter < count($debit) || $counter < count($credit)) {
                    ?>
                        <tr>
                        <td style="text-align: right">
                    <?php
                        if ($debit != false && $counter < count($debit)) {
                            echo $debit[$counter]->payrate;
                        } else {
                            echo '';
                        }
                    ?>
                        </td>
                        <td style="text-align: right">
                    <?php
                        if ($credit != false && $counter < count($credit)) {
                            echo $credit[$counter]->payrate;
                        } else {
                            echo '';
                        }
                    ?>
                        </td>
                    </tr>
                    <?php $counter = $counter + 1; } ?>
                    <tr>
                        <td style="text-align: right"><strong><?php echo $totalDebit; ?></strong></td>
                        <td style="text-align: right"><strong><?php echo $totalCredit; ?></strong></td>
                    </tr>
                    <?php if ($totalCredit != $totalDebit) { ?>
                    <tr>
                        <td style="text-align: right">
                        <?php
                            if ($saldoDebit != 0) {
                                echo $saldoDebit;
                            } else echo '';
                        ?>
                        </td>
                        <td style="text-align: right">
                        <?php
                            if ($saldoCredit != 0) {
                                echo $saldoCredit;
                            } else echo '';
                        ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
