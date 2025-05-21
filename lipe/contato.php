<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>contato</title>
    <style>
    .caixa {
      width: 400px; 
      padding: 20px; 
      background-color: #f0f0f0; 
      border: 1px solid #ccc; 
      border-radius: 10px; 
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); 
      margin: 0 auto;
      margin-top: 20px;
    }
  </style>
</head>
<body>
    
<align='center'><h3>Sobre</h3>
<hr size='3'color='purple'>
<a href="index.php">Home: </a>

<header>
    <p class="text-center">
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQHiowcIvL7Mkw/feedshare-shrink_800/feedshare-shrink_800/0/1687962582318?e=2147483647&v=beta&t=eHAo0TOQlCPxkd8HjVpxzeNED-EVDLOvSm-N2p7Y_cc" alt="Contato">
   </p>
</header>
<div class="caixa">
<h1>contato</h1>
        <label for="nome">nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="idade">idade:</label><br>
        <input type="text" id="idade" name="idade" required><br><br>

        <label for="rg">rg:</label><br>
        <input type="text" id="rg" name="rg" required><br><br>

        <label for="email">email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="comentario">comentario:</label><br>
        <input type="text" id="comentario" name="comentario" required><br><br>

        <input type="submit" value="cadastrar">
    </form>
</body>
</html>