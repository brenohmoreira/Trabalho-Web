<?php 
    $arquivo = fopen("texto.txt", "r");

    $texto = $arquivo ? fread($arquivo, 5000) : "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NOTÍCIAS </title>

    <link rel="stylesheet" href="./css/estilo.css">

    <?php include("compara.inc") ?>
</head>
<body>
    <div class="title-container">
        <div class="titulo">
            <h3> BEM VINDO AO SITE WEBDESIGN EM FOCO </h3>
        </div>
    </div>
    <div class="content-container language-text">
        <div class="conteudo">
            <p> <?php echo($texto) ?> </p>
            <a href="/reiniciaIdioma.php"> Selecionar outro idioma </a>
        </div>
    </div>
</body>
</html>