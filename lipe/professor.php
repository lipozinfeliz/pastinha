<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor</title>
</head>
<body>

<align='center'><h3>Professores</h3>
<hr size='3'color='purple'>

    <a href="index.php">Home: </a>
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQHiowcIvL7Mkw/feedshare-shrink_800/feedshare-shrink_800/0/1687962582318?e=2147483647&v=beta&t=eHAo0TOQlCPxkd8HjVpxzeNED-EVDLOvSm-N2p7Y_cc" alt="">

    <div class="container">
    <p class="text-center text-primary">CADASTRO DO PROFESSOR</p>
    <form name="cadastro" method="post" action="">
        <table class="table table-bordered">
            <tr>
                <td class="text-primary"><label>Nome do professor:</label></td>
                <td><input type="text" name="nome_professor" size="60" maxlength="60" required></td>
            </tr>
            <tr>
                <td class="text-primary"><label>Cidade:</label></td>
                <td><input type="text" name="cidade" size="30" maxlength="30" required></td>
            </tr>
            <tr>
                <td class="text-primary">E-mail:</td>
                <td><input type="email" name="email" size="30" maxlength="30" required></td>
            </tr>
            <tr>
                <td class="text-primary">Contato:</td>
                <td><input type="text" name="contato" size="15" maxlength="15"></td>
            </tr>
            <tr>
                <td colspan="2" aling="center" class="text-primary">
                    <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
    </div>

    <?php
    session_start();
    $nome="Filipe";
    $session_start["nome"]=$nome;
    ?>
    <br>
   
</body>
</html>