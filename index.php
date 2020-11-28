<?php
    require_once "classes/Usuarios.php";
    $u = new Usuario();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>
<body>
   <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="POST">
                <input type="email" name="email" id="" placeholder ="Usuário">
                <input type="password" name="senha" id="" placeholder="Senha">
                <input type="submit" value="Enviar">
                <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se aqui!</strong></a>
        </form>
    </div>
<?php
    if(isset($_POST['email'])){
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
       
        $u->conectar("u728442474_aulasajax", "177.234.145.195", "u728442474_angelaleite", "nAg0Hk3An");
        if($u->msgErro == ""){
                if(!empty($email) && !empty($senha)){
                        if($u->logar($email, $senha)){
                            header("location: areaprivada.php");
                        }else{
                            echo "<div class='mensagem-erro'>";
                                echo "E-mail ou senha estão incorretos!";
                            echo "</div>";
                        }
                }
        }else{
            echo "<div class='mensagem-erro'>";
                echo "Erro: ". $u->msgErro;
            echo "</div>";
        }
    }

?>
</body>
</html>