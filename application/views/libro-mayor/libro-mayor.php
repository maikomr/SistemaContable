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
                        <td><strong>Debe</strong></td>
                        <td><strong>Haber</strong></td>
                    </tr>
                    <?php
                        $counter = 0;
                        while ($counter < count($debit) || $counter < count($credit)) {
                    ?>
                        <tr>
                        <td>
                    <?php
                        if ($debit != false && $counter < count($debit)) {
                            echo $debit[$counter]->payrate;
                        } else {
                            echo '';
                        }
                    ?>
                        </td>
                        <td>
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
                </table>
            </div>
        </div>
    </div>
</div>
