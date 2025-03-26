<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler Sessão em PHP</title>
</head>
<body>

<align='center'><h3>Ler Sessão em PHP</h3>
<hr size='3'color='purple'>

    <a href="index.php">Home: </a>

    <?php
    session_start();
    $nome = $_SESSION["nome"];
    echo "Nome: " . $nome;
    ?>

    <br>
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQHiowcIvL7Mkw/feedshare-shrink_800/feedshare-shrink_800/0/1687962582318?e=2147483647&v=beta&t=eHAo0TOQlCPxkd8HjVpxzeNED-EVDLOvSm-N2p7Y_cc" alt="">

</body>
</html>