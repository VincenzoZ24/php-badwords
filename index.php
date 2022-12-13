<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paragrafo = 'domani ho lezione per il corso di Boolean, faremo la seconda lezione di PHP, boolean è un corso di programmazione';
    $parola_censurata = $_GET['censura'];
    $paragrafo_modificato = str_ireplace($parola_censurata, "***", $paragrafo);
    ?>

    <h1><?php echo $paragrafo?></h1>
    <h3>lunghezza paragrafo: <?php echo strlen($paragrafo)?></h3> 
    <form action="" method="get">
        <label for="censura">parola da censurare</label>
        <input type="text" id="censura" name="censura">
        <button>CENSURA</button>
    </form>
    <h3>paragrafo cesurato: <?php  echo $paragrafo_modificato ?></h3>
    <h3>lunghezza paragrafo censurato <?php echo strlen($paragrafo_modificato)?></h3>
</body>
</html>