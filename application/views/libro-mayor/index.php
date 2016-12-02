<div class="container content">
    <div class="navbar-header">
      <h1>Libro mayor</h1>
      <h3>Selecciona una cuenta para ver su libro mayor.</h3>
    </div>
    <div>
        <table class="table table-bordered table-hover">
            <tr class= "primary-color-background">
                <td><strong>Cuentas</strong></td>
            </tr>
            <?php foreach ($accounts as $account) { ?>
                <tr><td><?php echo $account->account; ?></td></tr>
            <?php } ?>
        </table>
    </div>
</div>
