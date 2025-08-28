<?php
$mensagem = "";
if($_SERVER[ 'REQUEST_METHOD'] == 'POST'){
    //$mensagem = "olá ";
    /*
    if($_POST['periodo'] == 'M'){
        $mensagem = ' Bom dia ' ;
    } else if($_POST['periodo'] == 'T'){
        $mensagem = ' Boa tarde ' ; 
    } else{
        $mensagem = ' Boa noite ' ;
    }
    */

    switch($_POST['periodo']) {
        case 'M':
            $mensagem = ' Bom dia ';
            break;
            case 'T';
            $mensagem = ' Boa tarde ';
            break;
            default:
              $mensagem = ' Boa noite ';
    }
    
    $mensagem .= $_POST['nome'];
    //mensagem .=$mensagem . $_POST{'nome'};
} else {
    $mensagem = "Digite o seu nome";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Estruturas de controle</title>
</head>
<body>
    <form action="controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" />
        <select name ="periodo">
            <option value = "M">Manhã</option>
            <option value = "T">Tarde</option>
            <option value = "N">Noite</option>
        </select>
        <button type="submit">Enviar</button> 
        
    </form>
    
    <p><?= $mensagem ?></p>
</body>  
</html>