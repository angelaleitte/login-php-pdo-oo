<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastrar</title>
</head>
<body>
   <div id="corpo-form">
        <h1>Cadastrar</h1>
        <form action="POST" method="processa.php">
                <input type="text" name="nome" id="" placeholder ="Nome completo" maxlegth="30">
                <input type="email" name="email" id="" placeholder ="E-mail" maxlegth="50">
                <input type="password" name="senha" id="" placeholder="Senha" maxlegth="15">
                <input type="password" name="confirmar" id="" placeholder="Confirmar senha">
                <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>