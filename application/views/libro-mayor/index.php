<div class="container content">
    <div class="navbar-header">
      <h1>Libro mayor</h1>
    </div>    
        
        <?php
            foreach ($accounts as $account) {
        ?>
            <table class="table table-bordered table-hover">
                <td><strong> <?php echo $account->account; ?> </strong></td>
                <tr class= "primary-color-background">
                    <td><strong> Debe </strong></td>
                    <td><strong> Haber </strong></td>
                </tr>
        <?php
                $arrayDebe = array();
                $arrayHaber = array();
                foreach ($transactions as $transaction){
                    if(($account->account) == ($transaction->account)){
                        $acc=($account->account);
                        if(($transaction->account == $acc) and ($transaction->type == 'DEBE')){
                           array_push($arrayDebe, $transaction->payrate);
                        }else{
                            array_push($arrayDebe, '');
                            if(($transaction->account == $acc) and ($transaction->type == 'HABER')){
                                array_push($arrayHaber, $transaction->payrate);
                            }else{
                                array_push($arrayHaber, '');
                            }
                        }
                    }
                }
                if(sizeof($arrayDebe) > sizeof($arrayHaber)) {
                    $aux=sizeof($arrayDebe);
                }else{
                    $aux=sizeof($arrayHaber);
                }
                for ($i=0; $i < $aux; $i++): 
        ?>
                <tr>
                    <td>
                        <?php 
                            echo $arrayDebe[$i];
                            
                        ?>
                    </td>
                    <td>
                        <?php 
                            if(sizeof($arrayHaber)>$i){
                                echo $arrayHaber[$i];
                            }else{
                                echo '';
                            }
                        ?>
                    </td>
                </tr>
                <?php endFor; ?>
                <tr>
                    <td>
                        <?php
                            foreach ($arrayDebeSuma as $suma) {         
                                if(($suma->account)==($account->account)){
                                    echo $suma->payrate;
                                }
                            }
                        ?>
                    </td>
                    <td>
                        <?php 
                            foreach ($arrayHaberSuma as $suma) {         
                                if(($suma->account)==($account->account)){
                                    echo $suma->payrate;
                                }else{
                                    echo '';
                                }
                            }
                        ?>
                    </td>
                </tr>
                <?php
                    
            }
        ?>
</div>
