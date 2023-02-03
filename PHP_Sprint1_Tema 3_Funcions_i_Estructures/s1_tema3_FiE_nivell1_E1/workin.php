<?php

if(isset($_GET['findnumber'])){
    $n = $_GET['fnumber'];
}

if ($n % 2 == 0) {
    $resposta = "El numero ".$n." es parell.";
}
elseif ($n % 2 != 0) {
    $resposta = "El numero ".$n." es imparell.";
}

?>
<form action="workin.php" method="get">
<label for="nfound"><h1>Resposta: </h1></label>
<input type="text" style="background-color: #72D2F2" name="nfound" value="<?php echo $resposta ?>">
</form>