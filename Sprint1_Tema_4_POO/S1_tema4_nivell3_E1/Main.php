<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2846bd70ec.js" crossorigin="anonymous"></script>
    <title>S1_tema4_nivell3_E1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="boxContainer">
    <fieldset class="fieldSet">
        <legend>
            <h1>Projecte Bancs</h1>
        </legend>
    </fieldset><br/>
    <?php
        require_once ('Account.php');
        $account = new Account("BAR2023584103", "Jordan", "Medici", 10000)
        
    ?>
    <form action="Account.php" method="post">
        <div class="boxComptaSaldo">
            <div>
                <label for="compta"><strong>Nº Compta: </strong></label>
                <input class="inputSaldo" type="text" id="compta" value="<?php echo $account->getAccountNumber(); ?>">
            </div>
            <div>
                <label for="saldo"><strong>Saldo: </strong></label>
                <input class="inputSaldo" type="text" id="saldo" value="<?php echo $account->nouSaldo()." €"; ?>">
            </div>
        </div>
    </form><br/>
    
    <div class="boxOperacions">
        <div>
            <form action="Main.php" method="post">
                <h4>Quina operació vols fer?</h4>
                <input class="inputSaldo" type="text" name="amount"  placeholder="Ingressar un monto">
               <div  class="tipus">
                    <input type="radio" name="transaction"  value="retirar">Retirar 
                    <input type="radio" name="transaction"  value="dipositar">Dipositar
               </div><br/>
               <input class="anarBox" type="submit" value="ANAR">
            </form>
        </div>
    </div>
    <?php
        require_once ('Account.php');

        if(isset($_POST['transaction'])) {
            $amount = $_POST['amount'];
            $transaction = $_POST['transaction'];
            $account->setAmount($amount);
            if($transaction == "retirar") {
               echo $account->withdraw($amount);
            }elseif($transaction == "dipositar") {
                echo $account->deposit($amount);
            }else {
                echo "Invalid transaction type.";
            }
        } 
    ?>
    <div>
    <hr class="line">
        <?php
        echo $account->getPerfil();
        ?> 
    <hr class="line">
    </div>
    <form class="formBox" action="Main.php" method="post"><br/>
        <div class="inputGrup">
            <input class="inputImprimir"  type="submit" name="" value=" Vull comprovant">
            <i class="fa-solid fa-print icon"></i>
        </div>
    </form>
</body>
</html>