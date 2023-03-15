<?php
if(isset($_GET['findnumber'])){
    $number = $_GET['fnumber'];
}
function getEvensOrOdds($number){
    if ($number % 2 == 0) {
        $resposta = "El numero ".$number." es parell.";
    }
    else {
        $resposta = "El numero ".$number." es imparell.";
    }
    return $resposta;
} 
?>
<form action="workin.php" method="get">
<label for="nfound"><h1>Resposta: </h1></label>
<input type="text" style="background-color: #72D2F2" name="nfound" value="<?php echo getEvensOrOdds($number) ?>">
</form>