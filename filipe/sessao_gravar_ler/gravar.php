<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar a Sessão em PHP</title>
</head>
<body>

<align='center'><h3>Gravar Sessão em PHP</h3>
<hr size='3'color='purple'>

    <a href="index.php">Home: </a>
    <br>
    <h3>Gravar a Sessão</h3>
    <?php
    session_start();
    $nome="Filipe";
    $_SESSION["nome"]=$nome;
    echo "Sessão gravada com sucesso!";
    ?>
    <br>
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQHiowcIvL7Mkw/feedshare-shrink_800/feedshare-shrink_800/0/1687962582318?e=2147483647&v=beta&t=eHAo0TOQlCPxkd8HjVpxzeNED-EVDLOvSm-N2p7Y_cc" alt="">

</body>
</html>