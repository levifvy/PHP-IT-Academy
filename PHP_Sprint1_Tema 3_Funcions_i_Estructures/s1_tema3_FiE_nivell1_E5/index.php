<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1_Tema3_FiE_nivell1_E5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #aaa69d;">
    <fieldset>
        <h2>Grau d'un estudiant</h2>
        <p>Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.<br/><br/>Condicions:<br/>- Si la nota és 60% o més, el grau hauria de ser Primera Divisió.<br/>- Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.<br/>- Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.<br/>- Si la nota és menor a 33%, l'estudiant reprovarà.<br/></p>
    </fieldset><br/><br/>
    <form name="porcentajes" method="get" action="index.php" >
        <label for="fname">Ingressar nota: </label>
        <input type="number" id="fname" name="fname" value="" placeholder="Indicar un percentatge en numeros" required>&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="findpercentage" value="verificar el grau">
    </form>
    <hr style="border: 2px #84817a solid">
    <?php
       
        if(isset($_GET['findpercentage'])){
                    $note = $_GET['fname'];
                }
                
        function grauEstudiant($note){
            if($note > 60) {
                $resposta = "Primera Divisio";
            }elseif ($note>= 45) {
                $resposta = "Segona Divisio";
            }elseif ($note >= 33) {
                $resposta = "Tercera Divisio";
            }else {
                $resposta = "L'estudiant reprovara.";
            }
            return $resposta;
        } 

    ?>
    <form action="index.php" name="ITakeIt">
        <h2>Resposta: </h2><br/>
        <input class="box" type="text" name="resposta" value="<?php echo grauEstudiant($note); ?> ">
    </form> 
</body>
</html>